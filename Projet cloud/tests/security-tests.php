<?php
declare(strict_types=1);
require_once __DIR__ . '/../security.php';

$root = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mediatheque-security-' . bin2hex(random_bytes(6));
$library = $root . DIRECTORY_SEPARATOR . 'library';
$outside = $root . DIRECTORY_SEPARATOR . 'outside';
mkdir($library, 0777, true);
mkdir($outside, 0777, true);
$pdf = $library . DIRECTORY_SEPARATOR . 'sample.pdf';
$text = $library . DIRECTORY_SEPARATOR . 'notes.txt';
$secret = $outside . DIRECTORY_SEPARATOR . 'secret.pdf';
file_put_contents($pdf, "%PDF-1.4\n");
file_put_contents($text, "not a PDF\n");
file_put_contents($secret, "%PDF-1.4\n");

$cases = [
    'accepts an in-library PDF' => resolve_library_pdf('sample.pdf', $library) === realpath($pdf),
    'rejects missing files' => resolve_library_pdf('missing.pdf', $library) === null,
    'rejects non-PDF files' => resolve_library_pdf('notes.txt', $library) === null,
    'rejects path traversal' => resolve_library_pdf('../outside/secret.pdf', $library) === null,
];
$failed = false;
foreach ($cases as $label => $passed) {
    echo ($passed ? 'PASS' : 'FAIL') . ': ' . $label . PHP_EOL;
    $failed = $failed || !$passed;
}
unlink($pdf); unlink($text); unlink($secret);
rmdir($library); rmdir($outside); rmdir($root);
exit($failed ? 1 : 0);

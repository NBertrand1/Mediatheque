# Mediatheque

**Bibliothèque numérique de supports de cours | Digital Library for Course Materials**

## Présentation | Overview

Mediatheque est une application web développée pour organiser les matières enseignées et leurs supports de cours au format PDF. Les étudiants peuvent parcourir les catégories et consulter les documents associés.

Mediatheque is a web application designed to organize taught subjects and their PDF course materials. Students can browse categories and access the related documents.

## Fonctionnalités présentes dans le code | Features found in the code

- Pages de catégories de cours / Course category pages
- Organisation des documents PDF par matière / PDF materials organized by subject
- Affichage intégré des PDF dans le navigateur / Embedded PDF viewing
- Pages de connexion et d'inscription / Login and registration pages
- Sessions PHP sécurisées, protection CSRF des formulaires et contrôle de la page d'accueil / Hardened PHP sessions, form CSRF protection and protected home page

## Technologies identifiées | Verified technologies

- PHP
- MySQL
- PDO pour l'accès à la base de données / PDO for database access
- HTML et CSS
- Fichiers PDF pour les ressources pédagogiques / PDF files for learning resources

## Structure du projet | Project structure

Le code applicatif se trouve dans le dossier `Projet cloud/`. Les supports PDF sont organisés dans `Projet cloud/Livres/`, par matière.

Application source is located in `Projet cloud/`. PDF materials are organized by subject under `Projet cloud/Livres/`.

## Configuration | Configuration

La connexion MySQL utilise désormais les variables d'environnement suivantes, à définir dans l'environnement du serveur PHP :

The MySQL connection now reads the following environment variables, which must be configured in the PHP hosting environment:

- `DB_HOST` (default: `localhost`)
- `DB_NAME` (default: `projet_cloud`)
- `DB_USER` (required)
- `DB_PASS` (required)

Un exemple non secret est fourni dans `.env.example`. Ce fichier est un modèle documentaire : le projet ne charge pas automatiquement un fichier `.env`. Configurez les variables dans votre hébergement ou votre serveur web. Utilisez un compte MySQL dédié avec les privilèges minimum nécessaires.

A non-secret template is provided in `.env.example`. It is documentation only: the application does not automatically load a `.env` file. Configure these variables in your hosting or web-server environment. Use a dedicated MySQL account with the minimum required privileges.

## Sécurité et limites | Security and limitations

Les modifications de cette branche ajoutent des cookies de session HttpOnly/SameSite, le mode strict des sessions, la régénération de l'identifiant après connexion, la destruction complète de session à la déconnexion, des jetons CSRF sur les formulaires de connexion et d'inscription, la validation des entrées et des messages d'erreur génériques côté utilisateur. Les erreurs techniques sont envoyées dans les journaux PHP, pas dans la page.

This branch adds HttpOnly/SameSite session cookies, strict session mode, session ID rotation after login, complete logout cleanup, CSRF tokens on login and registration forms, input validation, and generic user-facing errors. Technical details are written to PHP logs rather than rendered in the browser.

**Avant mise en production / Before production:** configurez les variables d'environnement, utilisez HTTPS, vérifiez la structure réelle de la table `users`, ajoutez des limites de tentatives de connexion, revoyez les contrôles d'accès sur chaque page qui doit être privée, et effectuez des tests d'intégration avec une base de test. Le dépôt ne fournit pas de schéma SQL ni de configuration de déploiement permettant de valider ces points automatiquement.

Configure environment variables, enforce HTTPS, verify the actual `users` table schema, add login rate limiting, review access control on every page that should be private, and run integration tests against a test database. The repository does not currently provide a SQL schema or deployment configuration to verify these items automatically.

## État actuel | Current status

Le dépôt contient un prototype PHP/MySQL de bibliothèque de cours. Les changements de sécurité doivent être relus et testés avec la base de données réelle avant d'être déployés.

The repository contains a PHP/MySQL course-library prototype. Security changes must be reviewed and tested against the actual database before deployment.


## Protected library resources

Category, contact, and subject pages require an authenticated session. PDF files are embedded through `document.php`, which validates the requested path and serves only PDF files resolved inside `Projet cloud/Livres/`. Apache deployments use the `.htaccess` rule in that directory to block direct file URLs. If the host uses Nginx or another server, configure an equivalent deny rule for direct requests to `/Livres/`; the repository cannot enforce that server-level rule on every hosting platform.

The path resolver has CLI regression tests for valid PDFs, missing files, non-PDF files, and path traversal. Database integration, the live `users` schema, login rate limiting, and hosting-specific access rules still require environment-level verification. No deployment is included.


## Projet de référence et continuité | Canonical project

Le dépôt **Mediatheque** est désormais le dépôt de référence pour le développement de l'ancienne bibliothèque numérique de cours. L'ancien prototype **Ma-biblio** est conservé comme référence historique et source éventuelle d'éléments graphiques ou de contenu ; il ne doit pas devenir une seconde application indépendante. Les évolutions fonctionnelles, la sécurité, les données et les futurs écrans doivent être conçus et intégrés dans ce dépôt Mediatheque, après revue de l'architecture et du schéma réel de la base de données.

**Mediatheque is the canonical repository** for the former course digital-library prototype. **Ma-biblio** is retained as a historical reference and a possible source of visual/content assets, not as a separate application to rebuild. Future features, security work, data structures, and screens should be developed in this Mediatheque repository after reviewing the actual architecture and database schema.

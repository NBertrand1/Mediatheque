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
- Gestion de session PHP / PHP session handling

## Technologies identifiées | Verified technologies

- PHP
- MySQL
- PDO pour l'accès à la base de données / PDO for database access
- HTML et CSS
- Fichiers PDF pour les ressources pédagogiques / PDF files for learning resources

## Structure du projet | Project structure

Le code applicatif se trouve dans le dossier `Projet cloud/`. Les supports PDF sont organisés dans `Projet cloud/Livres/`, par matière.

Application source is located in `Projet cloud/`. PDF materials are organized by subject under `Projet cloud/Livres/`.

## Installation et configuration | Setup and configuration

Le projet dépend d'un serveur PHP et d'une base MySQL. La configuration de connexion à la base se trouve actuellement dans `Projet cloud/con.php` et des identifiants de développement sont également présents dans certains scripts.

The project requires a PHP server and a MySQL database. Database connection settings are currently stored in `Projet cloud/con.php`, and development credentials also appear in some scripts.

**Important security note:** before deploying or publishing this application as a live service, move database credentials to environment variables or a configuration file outside the web root, remove duplicated credentials, avoid displaying raw database errors, and review session handling and access control. Do not reuse the current development credentials in production.

**Note de sécurité :** avant toute mise en production, déplacer les identifiants de base de données vers des variables d'environnement ou une configuration hors du répertoire public, supprimer les identifiants dupliqués, ne pas afficher les erreurs SQL brutes et revoir la gestion des sessions et des autorisations. Ne pas réutiliser les identifiants de développement actuels en production.

## Current status | État actuel

The repository contains a PHP/MySQL prototype with course categories, PDF resources, and basic account flows. It still requires a security and deployment review before being considered production-ready.

Le dépôt contient un prototype PHP/MySQL avec des catégories de cours, des ressources PDF et des parcours de compte basiques. Une revue de sécurité et de déploiement reste nécessaire avant toute mise en production.

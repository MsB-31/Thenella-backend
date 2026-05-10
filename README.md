# Thenella Backend

Un backend Laravel moderne pour la gestion de réservations, albums et images de galerie, avec un panneau d'administration Filament.

## Description générale du projet

Thenella Backend est une application backend robuste et évolutive développée pour répondre aux besoins des professionnels de la photographie et des événements. Elle offre une plateforme centralisée pour la gestion des réservations, des albums photographiques et des galeries d'images, facilitant l'organisation et la présentation du travail créatif. Conçue avec une architecture modulaire et sécurisée, elle assure une performance optimale et une intégration facile avec des interfaces utilisateur ou des applications mobiles. Le projet vise à simplifier les workflows administratifs tout en offrant une expérience utilisateur fluide et professionnelle.

## Technologies utilisées

Ce projet repose sur un stack technologique moderne et éprouvé pour garantir fiabilité, sécurité et maintenabilité :

- **Laravel 11** : Framework PHP principal pour le développement backend, offrant une architecture MVC, des migrations de base de données, et des outils intégrés pour l'authentification, le cache et les files d'attente.
- **Filament 3** : Package PHP pour créer des panneaux d'administration intuitifs et personnalisables, basé sur Livewire et Alpine.js.
- **PHP 8.1+** : Langage de programmation serveur avec support des dernières fonctionnalités pour une performance accrue.
- **Composer** : Gestionnaire de dépendances PHP pour l'installation et la gestion des packages.
- **MySQL / PostgreSQL** : Systèmes de gestion de base de données relationnelle pour le stockage persistant des données (réservations, utilisateurs, albums, images).
- **Eloquent ORM** : Mapper objet-relationnel intégré à Laravel pour une interaction simplifiée avec la base de données.
- **Laravel Mail** : Système d'envoi d'emails intégré pour les notifications (confirmations de réservation, alertes admin).
- **Blade Templates** : Moteur de templates PHP pour les vues (emails, pages web si nécessaire).
- **Vite** : Outil de build moderne pour la compilation des assets JavaScript et CSS.
- **Node.js & npm** : Pour la gestion des dépendances front-end et la compilation des assets.
- **PHPUnit** : Framework de tests unitaires et fonctionnels pour assurer la qualité du code.
- **Git** : Système de contrôle de version pour la gestion du code source.

## Fonctionnalités principales

- **Gestion des utilisateurs** : Authentification et autorisation avec des rôles (admin, utilisateur).
- **Système de réservations** : Création, modification et suivi des réservations avec notifications automatiques.
- **Gestion des albums** : Organisation hiérarchique des albums photo.
- **Galerie d'images** : Upload, stockage et gestion des images associées aux albums.
- **Panneau d'administration Filament** : Interface web pour la gestion des ressources sans code complexe.
- **API RESTful** : Endpoints pour l'intégration avec des frontends externes ou des applications mobiles.
- **Sécurité** : Protection contre les vulnérabilités communes (CSRF, XSS, injection SQL) via Laravel.
- **Performance** : Cache, optimisation des requêtes et support des files d'attente pour les tâches lourdes.

## Installation

### Prérequis
- PHP 8.1 ou supérieur
- Composer
- Node.js (version 16+) et npm
- Serveur de base de données (MySQL 8.0+, PostgreSQL 13+, ou SQLite pour développement)
- Git

### Étapes d'installation
1. **Clonez le dépôt** :
   ```bash
   git clone https://github.com/votre-utilisateur/thenella-backend.git
   cd thenella-backend
   ```

2. **Installez les dépendances PHP** :
   ```bash
   composer install
   ```

3. **Installez les dépendances JavaScript** :
   ```bash
   npm install
   ```

4. **Configurez l'environnement** :
   - Copiez le fichier `.env.example` vers `.env` :
     ```bash
     cp .env.example .env
     ```
   - Éditez `.env` pour configurer :
     - La base de données (DB_CONNECTION, DB_HOST, etc.)
     - Le mail (MAIL_MAILER, MAIL_HOST, etc.)
     - Les clés d'application (APP_KEY générée automatiquement)

5. **Générez la clé d'application** :
   ```bash
   php artisan key:generate
   ```

6. **Exécutez les migrations** :
   ```bash
   php artisan migrate
   ```

7. **Seedez la base de données (optionnel, pour données de test)** :
   ```bash
   php artisan db:seed
   ```

8. **Compilez les assets** :
   ```bash
   npm run build
   ```

9. **Démarrez le serveur de développement** :
   ```bash
   php artisan serve
   ```

L'application sera accessible sur `http://localhost:8000`. Le panneau d'administration Filament sur `/admin`.

## Utilisation

### Développement
- **Lancer les tests** : `php artisan test`
- **Vider le cache** : `php artisan cache:clear`
- **Compiler les assets en mode dev** : `npm run dev`

### Production
- Configurez un serveur web (Apache/Nginx) avec PHP-FPM.
- Utilisez des outils comme Laravel Envoy ou des services CI/CD pour le déploiement.
- Assurez-vous que les permissions des dossiers `storage` et `bootstrap/cache` sont correctes.

## Structure du projet
```
thenella-backend/
├── app/                    # Code de l'application
│   ├── Http/Controllers/   # Contrôleurs
│   ├── Mail/               # Classes d'emails
│   ├── Models/             # Modèles Eloquent
│   └── Providers/          # Fournisseurs de services
├── database/               # Migrations et seeders
├── public/                 # Assets publics
├── resources/              # Vues et assets
├── routes/                 # Définition des routes
├── tests/                  # Tests unitaires et fonctionnels
├── composer.json           # Dépendances PHP
├── package.json            # Dépendances JS
└── README.md               # Ce fichier
```

## Contribution
1. Forkez le projet.
2. Créez une branche feature (`git checkout -b feature/nouvelle-fonction`).
3. Commitez vos changements (`git commit -am 'Ajoute nouvelle fonctionnalité'`).
4. Pushez (`git push origin feature/nouvelle-fonction`).
5. Ouvrez une Pull Request.

## Licence
MIT License. Voir `LICENSE` pour plus de détails.

## Support
Pour des questions, ouvrez une issue sur GitHub ou contactez l'équipe de développement.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

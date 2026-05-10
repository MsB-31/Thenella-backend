# Thenella Backend

Un backend Laravel moderne pour la gestion de réservations, albums et images de galerie, avec un panneau d'administration Filament.

## Description

Thenella Backend est une application web développée avec Laravel, conçue pour gérer efficacement les réservations, les albums photo et les images de galerie. Elle offre un panneau d'administration intuitif via Filament, un système d'emails pour les notifications de réservation, et une API RESTful pour l'intégration. Avec une architecture modulaire, des migrations sécurisées et une gestion optimisée des utilisateurs, elle assure performance, sécurité et évolutivité pour les professionnels de la photographie et des événements.

### Fonctionnalités principales
- **Gestion des utilisateurs** : Modèle User avec authentification.
- **Système de réservations** : Création, gestion et notifications par email (confirmation et admin).
- **Gestion des albums** : Organisation des albums photo.
- **Galerie d'images** : Upload et gestion des images associées aux albums.
- **Panneau d'administration** : Interface Filament pour une gestion facile des ressources.
- **API REST** : Routes API pour l'intégration avec des frontends ou applications mobiles.

## Technologies utilisées
- **Laravel** : Framework PHP pour le backend.
- **Filament** : Package pour le panneau d'administration.
- **MySQL/PostgreSQL** : Base de données (configurable).
- **Mail** : Envoi d'emails via Laravel Mail.
- **Vite** : Pour la compilation des assets (si nécessaire).

## Installation

### Prérequis
- PHP 8.1 ou supérieur
- Composer
- Node.js et npm (pour les assets)
- Base de données (MySQL, PostgreSQL, etc.)

### Étapes d'installation
1. **Clonez le dépôt** :
   ```bash
   git clone <url-du-depot>
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
   - Éditez `.env` pour configurer la base de données, le mail, etc.

5. **Générez la clé d'application** :
   ```bash
   php artisan key:generate
   ```

6. **Exécutez les migrations** :
   ```bash
   php artisan migrate
   ```

7. **Seedez la base de données (optionnel)** :
   ```bash
   php artisan db:seed
   ```

8. **Compilez les assets** :
   ```bash
   npm run build
   ```

9. **Démarrez le serveur** :
   ```bash
   php artisan serve
   ```

L'application sera accessible sur `http://localhost:8000`.

## Utilisation

### Panneau d'administration
Accédez au panneau Filament via `/admin` (ou configurez la route dans `AdminPanelProvider.php`).

### API
Les routes API sont définies dans `routes/api.php`. Exemples :
- `GET /api/bookings` : Liste des réservations.
- `POST /api/bookings` : Créer une réservation.

Utilisez des outils comme Postman pour tester les API.

### Tests
Exécutez les tests avec :
```bash
php artisan test
```

## Structure du projet
- `app/Models/` : Modèles Eloquent (User, Booking, Album, GalleryImage).
- `app/Http/Controllers/` : Contrôleurs pour la logique métier.
- `app/Mail/` : Classes pour les emails.
- `database/migrations/` : Migrations de base de données.
- `resources/views/` : Vues Blade (si utilisées).
- `routes/` : Définition des routes web et API.

## Contribution
1. Forkez le projet.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/nouvelle-fonction`).
3. Commitez vos changements (`git commit -am 'Ajoute nouvelle fonctionnalité'`).
4. Pushez vers la branche (`git push origin feature/nouvelle-fonction`).
5. Ouvrez une Pull Request.

## Licence
Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## Support
Pour des questions ou des problèmes, ouvrez une issue sur GitHub ou contactez l'équipe de développement.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

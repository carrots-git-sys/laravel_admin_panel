# Filament Admin Panel & Front-Facing Page Assignment

## Overview

This is a Laravel 10/11 application using [Filament 3](https://filamentphp.com/) as the admin panel.  
It manages two core models:

- **CharacteristicCategories**
- **Characteristics**

The application includes a Filament-powered admin interface for CRUD operations and a public-facing page (styled with Tailwind CSS) to display all categories and their characteristics.

---

## Features

- **Filament Admin Panel**  
  - Manage Characteristic Categories (create, edit, delete, list)
  - Manage Characteristics (create, edit, delete, list)
  - Friendly editing for `meta_data` (description & type) on Characteristics

- **Front-End Page**
  - `/characteristics` route
  - Lists all categories and their characteristics
  - Built with Tailwind CSS and Vite

---

## Models & Database Schema

### CharacteristicCategory

| Column      | Type      | Description            |
|-------------|-----------|------------------------|
| id          | bigint PK | Primary key            |
| name        | string    | Category name          |
| timestamps  |           | created_at, updated_at |

**Relation:** hasMany Characteristics

### Characteristic

| Column                      | Type      | Description                                    |
|-----------------------------|-----------|------------------------------------------------|
| id                          | bigint PK | Primary key                                    |
| name                        | string    | Characteristic name                            |
| meta_data                   | JSON      | Contains:                                      |
|                             |           | - description (string)                         |
|                             |           | - type (string: "boolean", "integer", etc.)    |
| characteristic_category_id   | foreignId | Reference to CharacteristicCategory             |
| timestamps                  |           | created_at, updated_at                         |

**Relation:** belongsTo CharacteristicCategory

---

## Setup Instructions

### 1. Clone & Install

```bash
git clone [your-repo-url]
cd [your-repo-folder]
composer install
npm install
cp .env.example .env
php artisan key:generate
```

### 2. Configure Database

Update your `.env` with your DB credentials.

### 3. Run Migrations

```bash
php artisan migrate
```

### 4. Install Filament

```bash
php artisan filament:install
```

### 5. Build Front-End Assets

```bash
npm run dev
```

### 6. Run the App

```bash
php artisan serve
```

Access the admin at `/admin` and the public page at `/characteristics`.

---

## Code Structure

- **app/Models**  
  - CharacteristicCategory.php  
  - Characteristic.php

- **Filament Admin Resources**  
  - `app/Filament/Resources/CharacteristicCategoryResource.php`
  - `app/Filament/Resources/CharacteristicResource.php`

- **Public Front-End**  
  - Route: `/characteristics`  
  - Controller: `app/Http/Controllers/CharacteristicPublicController.php`
  - Blade view: `resources/views/characteristics/index.blade.php`

---

## Acceptance Criteria

- [x] Filament management pages for both models
- [x] Can create, edit, delete both types of records in admin
- [x] `meta_data` (JSON) is handled as description and type fields
- [x] `/characteristics` public page lists all categories and characteristics in a Tailwind layout
- [x] Code follows Laravel best practices and is easy to understand

---

## Notes

- Built with Laravel 10/11 and Filament 3
- Tailwind CSS for all custom front-end styling
- You can extend the `meta_data` structure easily for more fields if needed

---

## Credentials

Filament admin login will be set up during `filament:install`.  
Create a new user with:

```bash
php artisan make:filament-user
```

---

## License

This project is for evaluation/demo purposes only.

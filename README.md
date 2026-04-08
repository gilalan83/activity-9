# Activity 9 - Authentication System

## Description
Laravel web application that implements a user authentication system with protected views.
Guest users are shown a **Landing Page**, while authenticated users can access a **Dashboard**.

## Objectives
Implement concepts related to security and user authentication in Laravel.

## Features
- User registration and login (Laravel UI + Bootstrap)
- Protected dashboard route using `auth` middleware
- Dynamic navbar: shows Login/Register for guests, Dashboard/Logout for authenticated users
- Guest users cannot access the dashboard and are redirected to login
- SQLite database

## Technologies Used
- Laravel 9
- Laravel UI (Bootstrap Auth Scaffolding)
- Bootstrap 5
- SQLite

## Installation
```bash
composer install
cp .env.example .env
php artisan key:generate
# Create database/database.sqlite manually
php artisan migrate
npm install && npm run build
php artisan serve
```

## Views
| URL | View | Access |
|-----|------|--------|
| `/` | Landing Page | Public |
| `/dashboard` | Dashboard | Authenticated users only |
| `/login` | Login form | Public |
| `/register` | Registration form | Public |

## GitHub Repository
[https://github.com/gilalan83/activity-9](https://github.com/gilalan83/activity-9)
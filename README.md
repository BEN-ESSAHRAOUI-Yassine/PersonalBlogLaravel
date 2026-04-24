# Personal Blog

## Overview

Personal Blog  is a web-based blogging platform developed using **Laravel 13**.

The application allows a freelance blogger to manage technical articles, publish content online, and create a professional digital presence.

Visitors can browse published articles without creating an account, while the authenticated blogger can manage all content through a private dashboard.

The system follows Laravel MVC architecture and uses Eloquent ORM, Blade templating, named routes, middleware protection, and migrations for a clean and scalable codebase.

---

## 🚀 Features

## 🌍 Public Blog

### Visitors can:

* Browse all published articles
* View article details
* Filter articles by category
* Search articles by title
* View estimated reading time
* Paginated article listing

---

## 🔐 Authentication

### Blogger can:

* Login securely
* Logout securely

> Registration is disabled.
> Blogger account is created via Seeder.

---

## 📝 Dashboard (Authenticated Blogger)

### Blogger can:

* View all articles (draft + published)
* Create new article
* Edit existing article
* Delete article
* Change status:

  * Draft
  * Published

---

## 🎁 Bonus Features

* Pagination (6 per page)
* Search bar
* Reading time counter

---

## Installation

## Prerequisites

* PHP 8.2+
* Composer
* Node.js + NPM
* MySQL
* Laravel CLI (optional)
* XAMPP / Laragon / WAMP

---

## Steps

### 1. Clone project

```bash
git clone https://github.com/BEN-ESSAHRAOUI-Yassine/PersonalBlogLaravel
cd PersonalBlogLaravel
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Environment file

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure database

Edit `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run migrations + seeders

```bash
php artisan migrate:fresh --seed
```

### 6. Compile assets

```bash
npm run build
```

### 7. Start server

```bash
php artisan serve
```

Visit:

```text
http://127.0.0.1:8000
```

---

## Technologies Used

* Laravel 13
* PHP 8+
* MySQL
* Blade
* Eloquent ORM
* Laravel Breeze
* Tailwind CSS
* Vite
* MVC Architecture

---

## Directory Structure

```text
app/
 ├── Http/Controllers
 │   ├── PublicBlogController.php
 │   ├── DashboardController.php
 │   └── ArticleController.php
 │
 ├── Models
 │   ├── User.php
 │   ├── Article.php
 │   └── Category.php

database/
 ├── migrations/
 └── seeders/

resources/views/
 ├── layouts/
 ├── partials/
 ├── public/
 ├── articles/
 └── auth/

routes/
 └── web.php
```

---

## Security Measures

* Laravel Authentication
* Password hashing
* CSRF protection
* Validation with `$request->validate()`
* Auth middleware
* Ownership protection on articles

---

## Routing System

| Method | Route               | Controller                 |
| ------ | ------------------- | -------------------------- |
| GET    | /                   | PublicBlogController@index |
| GET    | /article/{id}       | PublicBlogController@show  |
| GET    | /dashboard          | DashboardController@index  |
| GET    | /articles/create    | ArticleController@create   |
| POST   | /articles           | ArticleController@store    |
| GET    | /articles/{id}/edit | ArticleController@edit     |
| PUT    | /articles/{id}      | ArticleController@update   |
| DELETE | /articles/{id}      | ArticleController@destroy  |

---

## Database Design

### DB Diagram

![DB Diagram Screenshot](resources/Asset/db_diagram.png)


### Tables

* users
* categories
* articles

### Relationships

* One user has many articles
* One category has many articles
* One article belongs to one user
* One article belongs to one category

---

## Test Account

| Role    | Email                                       | Password |
| ------- | ------------------------------------------- | -------- |
| Blogger | admin@test.com                              | password |

> ⚠️ These accounts are for development/testing purposes only.
---

## Notes

* Visitors only see published articles
* Draft articles stay private
* Unauthenticated users are redirected to login

---

## Screenshots

### Homepage

![Dashboard Screenshot](resources/Asset/Homepage.png)

### Login page

![Dashboard Screenshot](resources/Asset/Login.png)

### Dashboard (Blogger Panel)

![Dashboard Screenshot](resources/Asset/Dashboard.png)

### article page

![Dashboard Screenshot](resources/Asset/ArticlePage.png)

### Jira Board

![Dashboard Screenshot](resources/Asset/JiraBoard.png)




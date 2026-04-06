# Wedding Photo Sharing Platform

A **Wedding Photo Sharing Platform** built using **Laravel (PHP Framework)** where users can upload wedding photos, explore images posted by others, and interact through likes.

The platform works similar to a **social media gallery**, allowing users to showcase wedding memories. Images with the **highest number of likes are highlighted and ranked at the top**, and top-performing posts can be rewarded.

This project demonstrates backend development using **Laravel MVC architecture**, image upload management, database-driven content, and interactive user engagement features.

---

## Tech Stack

* PHP
* Laravel Framework
* MySQL Database
* Blade Template Engine
* JavaScript
* Tailwind CSS
* Vite

---

## Key Features

* Upload wedding images
* Public gallery of wedding photos
* Like functionality for posts
* Real-time like counting
* Top-liked images displayed at the top
* Dynamic image listing
* Responsive user interface
* Laravel MVC architecture
* Secure image upload handling

---

## How the Platform Works

1. Users upload wedding photos.
2. Uploaded images are displayed in the gallery.
3. Visitors can **like images** they enjoy.
4. Images with the **highest number of likes automatically appear at the top**.
5. Top liked photos can be **selected as winners or rewarded**.

This makes the platform ideal for **wedding events, competitions, or community sharing**.

---

## Project Structure

Key Laravel directories used in this project:

```id="n7smp1"
app/            Controllers and models
bootstrap/      Framework bootstrap files
config/         Configuration files
database/       Database migrations
public/         Public assets and uploaded images
resources/      Blade templates and frontend resources
routes/         Application routes
storage/        Application storage
tests/          Test files
```

Important files:

```id="o6al3o"
artisan
composer.json
package.json
vite.config.js
tailwind.config.js
```

---

## Installation

Clone the repository:

```id="gksd8d"
git clone https://github.com/MohmmadHamza/Wedding.git
```

Navigate to the project directory:

```id="3gw8p5"
cd Wedding
```

Install PHP dependencies:

```id="pk3w8n"
composer install
```

Install frontend dependencies:

```id="rxr9ok"
npm install
```

Create environment configuration:

```id="g45d2h"
cp .env.example .env
```

Generate application key:

```id="r0qq0k"
php artisan key:generate
```

---

## Database Setup

1. Create a MySQL database.
2. Configure database credentials inside `.env`.

Example:

```id="j8qvij"
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run migrations if available:

```id="yppk55"
php artisan migrate
```

---

## Running the Application

Start the Laravel development server:

```id="9g6ycm"
php artisan serve
```

Open the application in your browser:

```id="scnsqv"
http://127.0.0.1:8000
```

---

## Possible Future Enhancements

* User authentication system
* Comment system for images
* Share images on social platforms
* Image moderation system
* Admin dashboard
* Real-time notifications
* Image categories or tags
* Event-based photo competitions

---

## Author

**Mohammed Hamza**

Backend Developer specializing in **PHP, Laravel, APIs, and scalable web applications**

GitHub
https://github.com/MohmmadHamza

---

## License

This project is open-source and available under the **MIT License**.

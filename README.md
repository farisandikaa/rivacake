# 🎂 Riva Cake – Web-Based Cake Sales Website

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=flat&logo=php)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=flat&logo=javascript)
![CSS](https://img.shields.io/badge/CSS-3-1572B6?style=flat&logo=css3)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql)

**Riva Cake** is a web-based application for managing and selling cakes by UMKM *Riva Cake*.  
Built with [Laravel 10](https://laravel.com/) and [Breeze](https://laravel.com/docs/10.x/starter-kits#breeze), it provides a modern, secure, and responsive solution for product management and customer interaction.

🔗 **Live Website:** (https://rivacake.vercel.app)

---

## ✨ Features
- 🎂 Showcase available cakes and products
- 📦 Manage product inventory (CRUD)
- 🛒 Shopping cart & simple order system
- 👥 Customer management
- 🔐 User authentication & authorization (via Laravel Breeze)
- 📱 Responsive design with Tailwind CSS

---



## 📂 Project Structure
```
rivacake/
├── app/ # Application core (Models, Controllers, Middleware)
├── bootstrap/
├── config/
├── database/ # Migrations and seeders
├── public/ # Public assets (CSS, JS, images)
├── resources/ # Blade templates and frontend files
│ ├── views/
│ └── css/js
├── routes/ # Web and API routes
├── storage/
├── tests/
├── .env # Environment config
├── artisan # Laravel CLI
├── composer.json
├── package.json
├── README.md
└── LICENSE
```

---

## 🛠️ Getting Started

### 1. Clone this repository
```
git clone https://github.com/farisandikaa/rivacake.git
cd rivacake
```

### 2. Install dependencies
```
composer install
npm install && npm run dev
```

### 3. Configure environment
```
cp .env.example .env
# Edit .env to set your database credentials
```

### 4. Run migrations 
```
php artisan key generate
php artisan migrate --seed
```

### 5. Start development server
```
php artisan serve
```

Open [http://localhost:8080](http://localhost:8080) to see the result.

---

## 📜 License
This project is licensed under the [MIT License](LICENSE).

---

## 📬 Contact
If you’d like to collaborate or have any inquiries, feel free to reach out:

- 📧 Email: **farisandika2111@gmail.com**
- 💼 LinkedIn: [linkedin.com/in/farisandikaputra](https://linkedin.com/in/farisandikaputra)
- 🐙 GitHub: [github.com/farisandikaa](https://github.com/farisandikaa)

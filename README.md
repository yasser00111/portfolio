# Muhammad Yasser — Portfolio Website

> **Full Stack Web Developer & Engineering On Site (EOS) — PT Telkom Indonesia**

A professional, modern, and premium portfolio website built with **Laravel 11**, **Tailwind CSS**, **Alpine.js**, and **Filament Admin**.

---

## 🚀 Tech Stack

| Layer        | Technology                                 |
|--------------|--------------------------------------------|
| Backend      | Laravel 11, PHP 8.4                        |
| Frontend     | Tailwind CSS v3, Alpine.js v3, Vite        |
| Admin Panel  | Filament v3                                |
| Database     | SQLite (dev) / MySQL (production)          |
| Animations   | AOS (Animate On Scroll), Custom Canvas     |
| Carousel     | Swiper.js                                  |
| Icons        | Lucide Icons                               |

---

## ✨ Features

### Public Portfolio
- **Hero Section** — Animated network canvas, typing effect, stats counter, social links
- **About Me** — Profile, skill badges, floating info cards
- **Skills** — Animated progress bars (Development & Engineering categories)
- **Portfolio** — Project showcase with category filter tabs
- **Experience** — Vertical animated timeline
- **Services** — Web Development & Engineering services grid
- **Testimonials** — Swiper.js carousel with coverflow effect
- **Contact** — Laravel-validated contact form with toast notification

### Admin Panel (`/admin`)
- 🔐 Secure authentication
- 📁 **Project** CRUD — title, slug, thumbnail, tech stack, links, status
- ⚡ **Skill** CRUD — category, proficiency %, color
- 🕐 **Experience** CRUD — timeline with responsibilities & tech tags
- 🏆 **Certification** CRUD
- 💬 **Testimonial** CRUD — rating, avatar
- ⚙️ **Service** CRUD — web & engineering categories
- 📬 **Contact Messages** — inbox with unread badge counter

### UI/UX
- 🌑 Dark mode by default
- 🔵 Blue neon accent with glassmorphism cards
- 📱 Mobile-first responsive design
- ✨ AOS scroll animations throughout
- 🎯 SEO meta tags, Open Graph, Twitter Cards

---

## 📦 Installation

```bash
# Clone repo
git clone https://github.com/yasser00111/portfolio.git
cd portfolio

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env then run migrations + seed
php artisan migrate --seed

# Build frontend assets
npm run build

# Start development server
php artisan serve
```

### Default Admin Credentials
```
URL:      http://localhost:8000/admin
Email:    admin@yasser.dev
Password: password
```

> ⚠️ Change credentials immediately in production!

---

## 🗂️ Project Structure

```
app/
├── Filament/Resources/     # Admin panel CRUD resources
├── Http/Controllers/       # PortfolioController, ContactController
├── Models/                 # Project, Skill, Experience, Testimonial, ...
database/
├── migrations/             # All table schemas
├── seeders/                # Demo data seeders
resources/
├── css/app.css             # Tailwind + custom styles
├── js/app.js               # Alpine, AOS, Swiper, canvas animation
├── views/
│   ├── layouts/app.blade.php
│   ├── partials/           # navbar, footer
│   ├── sections/           # hero, about, skills, portfolio, ...
│   └── portfolio/          # index, show
routes/web.php
```

---

## 🌐 Deployment

### Environment Variables (Production)
```env
APP_ENV=production
APP_URL=https://yourdomain.com
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=portfolio_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

### Production Commands
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
php artisan storage:link
```

---

## 📸 Profile Photo

Replace `public/assets/img/yasser.jpg` with your actual profile photo.

## 📄 CV / Resume

Place your CV file at `public/cv/muhammad-yasser-cv.pdf`

---

## 📝 License

MIT © Muhammad Yasser

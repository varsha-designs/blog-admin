# 📖 Blog Admin Project

A simple **Blog Admin Dashboard** built with **PHP (Laravel)**, **MySQL**, and **Tailwind CSS**.
This project allows authenticated users to **manage blog posts** (CRUD: Create, Read, Update, Delete) with an easy-to-use admin interface.

---

## 🚀 Features

* 🔐 User Authentication (Login & Register)
* 📝 Manage blog posts (title, slug, content, status, author)
* 📂 CRUD operations for posts
* 🎨 Styled with Tailwind CSS
* 👤 Posts linked to logged-in users

---

## 🛠️ Tech Stack

* **Backend:** Laravel
* **Frontend:** Blade + Tailwind CSS
* **Database:** MySQL
* **Version Control:** Git

---

## 📂 Project Setup

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/varsha-designs/blog-admin.git
cd blog-admin
```

### 2️⃣ Install Dependencies

```bash
composer require laravel/breeze --dev
npm install
npm run dev
```

### 3️⃣ Configure Environment

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

Update database credentials in `.env`:

```env
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4️⃣ Run Migrations

```bash
php artisan migrate
```

### 5️⃣ Start Development Server

```bash
php artisan serve
```

App will be available at:
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🔮 Future Improvements

* ✨ Rich Text Editor for blog content
* 🖼️ Image upload & media management
* 📑 Categories & tags for better organization
* 💬 Comment system for posts
* 📊 Admin dashboard with stats (views, posts, users)
* 🌍 Multi-language support
* 🔍 Search & filtering options
* 📱 Responsive design improvements

---

## 📸 Screenshots



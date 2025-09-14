# 📖 Blog Admin Project

A simple **Blog Admin Dashboard** built with **PHP (Laravel)**, **MySQL**, and **Tailwind CSS**.
This project allows authenticated users to **manage blog posts** (CRUD: Create, Read, Update, Delete) with an easy-to-use admin interface.

---

## 🚀 Features

* 🔐 User Authentication (Login & Register) with Laravel Breeze
* 📝 Manage blog posts (title, slug, content, status, author)
* 📂 CRUD operations for posts
* 🎨 Styled with Tailwind CSS
* 👤 Posts linked to logged-in users

---

## 🛠️ Tech Stack

* **Framework:** Laravel
* **Auth Scaffolding:** Laravel Breeze
* **Frontend:** Blade + Tailwind CSS
* **Database:** MySQL
* **Version Control:** Git
* **Local Server:** Laravel Herd

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

If you’re using Laravel Herd (recommended):

Your app will be available at:

👉 http://blog-admin.test

If you’re not using Herd, you can still start the built-in Laravel server:

php artisan serve


App will be available at:
👉 http://127.0.0.1:8000

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

REGISTRATION PAGE
<img width="1624" height="874" alt="Screenshot 2025-09-10 135636" src="https://github.com/user-attachments/assets/27b90fe0-9f3e-4673-ab3d-34b079c6dc12" />
LOGIN PAGE
<img width="974" height="734" alt="Screenshot 2025-09-10 140035" src="https://github.com/user-attachments/assets/a30bbfc7-ec48-4411-9686-7be64dd62033" />
USER DASHBOARD PAGE
<img width="1911" height="874" alt="Screenshot 2025-09-10 135751" src="https://github.com/user-attachments/assets/718951d5-ca4f-4eea-8793-2ad874674ffa" />
CATEGORY PAGE(USER)
<img width="1912" height="877" alt="Screenshot 2025-09-10 135821" src="https://github.com/user-attachments/assets/7456aa40-6dad-424a-ace9-c427794a97e0" />
CATEGORY EDIT PAGE(USER)
<img width="1919" height="875" alt="Screenshot 2025-09-10 135843" src="https://github.com/user-attachments/assets/cbf4d34c-4bcb-412f-b0bf-c22a4906be2e" />
CATEGORY VIEW PAGE(USER)
<img width="1919" height="874" alt="Screenshot 2025-09-10 135902" src="https://github.com/user-attachments/assets/829735b3-c869-499f-a09f-ef802037e51d" />
CATEGORY UPDATE PAGE(USER)
<img width="1919" height="864" alt="Screenshot 2025-09-10 135916" src="https://github.com/user-attachments/assets/0f45d1b5-2f27-4854-8750-a2f0b6c0cc52" />
POST CREATION PAGE(USER)
<img width="1919" height="875" alt="Screenshot 2025-09-10 140006" src="https://github.com/user-attachments/assets/4c55c22a-869a-4f69-a932-819db961ab92" />
POST UPDATE PAGE(USER)
<img width="1919" height="870" alt="Screenshot 2025-09-10 140022" src="https://github.com/user-attachments/assets/604c6f59-9b38-482e-9b6b-cfdbac12a309" />














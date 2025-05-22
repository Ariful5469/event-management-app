
---

# 🎉 Event Management App

A simple yet powerful Event Management Application built using **Laravel MVC Framework**, **Tailwind CSS**, and **MySQL**.

---

## 🛠️ Tech Stack

* **Backend:** [Laravel 12](https://laravel.com/)
* **Frontend:** Tailwind CSS, JavaScript
* **Authentication:** [Laravel Breeze](https://laravel.com/docs/starter-kits#breeze)
* **Database:** MySQL

---

## 👤 User Roles

The application supports **three** types of users with specific access levels:

### 1. 🧑‍🤝‍🧑 Guest

* Access **Home Page**
* View available **Events**


![Guest View - Home](https://github.com/user-attachments/assets/dcea6edb-7cda-41fa-8d05-6da65c2a51a9)

![Guest View - Events](https://github.com/user-attachments/assets/c5bd79b5-f4e7-4753-81ec-3d03e5529bfc)

---

### 2. ✅ Authenticated User

* Can **Create New Events**


![Authenticated User - Create Event](https://github.com/user-attachments/assets/e1a8ba5b-88d0-49ec-a65f-34a7f628a04b)

---

### 3. 👑 Admin

* Can **Manage All Events** (edit, delete, etc.)


![Admin View - Manage Events](https://github.com/user-attachments/assets/5e6e8c16-9db9-489c-ab59-ed7f56fb0e20)

---

## 🚀 Features

* 📌 User registration & login via **Laravel Breeze**
* 🎯 Role-based access control (Guest, User, Admin)
* 📝 Event creation (User)
* 🛠️ Full event management (Admin)
* 💅 Responsive UI with Tailwind CSS

---

## 📂 Folder Structure (Overview)

```
├── app
├── bootstrap
├── config
├── database
├── public
├── resources
│   ├── views         # Blade Templates
│   └── css/js        # Tailwind & JS Files
├── routes
│   └── web.php       # Route definitions
├── .env
└── ...
```

---

## 🧪 Setup Instructions

```bash
# Clone the repository
git clone https://github.com/your-username/event-management-app.git

# Navigate into the project
cd event-management-app

# Install dependencies
composer install
npm install && npm run dev

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start the server
php artisan serve
```

---

## 📬 Contact

For suggestions, feel free to open an issue or contact the maintainer.

---

Let me know if you'd like to add badges, license info, or deployment guides.

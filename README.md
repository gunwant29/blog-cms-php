# 📰 Blog CMS – PHP + MySQL

A simple and responsive blog-style **Content Management System** (CMS) built with **PHP** and **MySQL**. This project lets you create, edit, and delete blog posts dynamically using a MySQL database. Designed with a modern UI, smooth animations, and basic JavaScript enhancements like delete confirmation and live character counter.

---

## 🚀 Features

- ✅ Add, Edit, and Delete blog posts
- ✅ Posts stored in MySQL with timestamps
- ✅ Responsive UI with clean layout and CSS animations
- ✅ JavaScript enhancements:
  - Character counter on textarea
  - Delete confirmation prompt
- ✅ Pure PHP backend (no frameworks)

---

## 🧠 Technologies Used

- **PHP** – Backend logic
- **MySQL** – Data storage
- **HTML5 + CSS3** – Frontend layout and styles
- **JavaScript** – Interactivity and client-side features
- **XAMPP** – Local development environment

---

## 📂 Project Structure

BlogCMS/
├── index.php # View all posts
├── create.php # Add new post
├── edit.php # Update existing post
├── db.php # DB connection config
├── script.js # JavaScript (char counter, confirm delete)
├── style.css # UI styles
└── README.md # Project info

---

## 🛠️ Setup Instructions

1. **Start XAMPP** and enable Apache + MySQL
2. Place the folder in:  
   `C:/xampp/htdocs/BlogCMS/`
3. Open `phpMyAdmin` and run:

```sql
CREATE DATABASE BlogCMS;
USE BlogCMS;
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Visit in your browser:
http://localhost/BlogCMS


🙋 Author
Gunwant Patil
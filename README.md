🛒 E-Commerce Website

Overview

This project is a simple e-commerce platform built using PHP and MySQL. It provides separate interfaces and features for customers and admins, including user authentication, shopping cart functionality, product management, and secure database handling.

User Features

Registration

Users register via register.php by providing name, email, and password.
Registration enables personalized access to cart and order features.
Login/Logout

Login: login.php
Logout: logout.php
Browse & Add Products

Products are listed on index.php with name, price, description, and image.
Users can add items to their cart directly from this page.
Manage Cart

Users manage their cart on cart.php — update quantities, remove items, and view total price.
Admin Features

Admin Authentication

Admin login: admin/login.php
Admin logout: admin/logout.php
Dashboard

Accessed at admin/dashboard.php
Provides controls for product management.
Add Product

admin/add_product.php allows product creation with image upload.
Manage Products

admin/manage_products.php displays products with options to edit or delete.
Database Structure

users Table

Stores user data (name, email, hashed password)
Includes role field to differentiate users and admins.
products Table

Stores product name, price, description, image file name.
cart Table

Tracks which user added which products and their quantities.
Website Flow

Action	What Happens
User Registers	Validates input, hashes password, saves to users table
User Logs In	Verifies credentials, starts session
Add to Cart	Adds product to cart table linked to user ID
Admin Adds Product	Saves product to products table and image to server
Admin Deletes Product	Removes entry from products table
Security Measures

Password Hashing: Uses password_hash() for secure storage. Session Management: Tracks sessions with $_SESSION variables. Admin Restrictions: Only users with role = 'admin' can access admin pages.

How to Run

Clone this repository.
Set up your local Apache server (XAMPP, WAMP, etc.).
Import the provided SQL file into your MySQL database.
Place project files in the htdocs directory.
Ensure the database connection is configured correctly in config.php.
Technology Stack

Frontend: HTML, CSS, Bootstrap*Backend:** PHP Database: MySQL Server: Apache (via XAMPP/WAMP)

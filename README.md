<h1>🛒 Farid Shopping Cart</h1>

A simple, attractive, and user-friendly e-commerce web application built with Laravel 12 and PHP 8.

The application provides a complete shopping experience where users can browse categories, explore products, add items to their shopping cart, and proceed to checkout using the Stripe test payment gateway.

<h1>📸 About the Project</h1>

<strong>Farid Shopping Cart</strong> was developed as an e-commerce application to demonstrate the implementation of essential online shopping features using Laravel.

The application allows customers to:

Browse product categories

Explore products within each category

View product information

Add products to a shopping cart

Review and manage their cart

Calculate the total order price

Proceed to payment through Stripe

Complete test payments using Stripe's test environment

The application also includes administrative functionality for adding new categories and products to the store.

<h2>✨ Features</h2>
<strong>🏠 Home Page</strong>

The home page serves as the welcome page of the application and provides users with an intuitive entry point to the online store.

<strong>📂 Categories</strong>

The Categories page displays the available product categories using an attractive card-based layout.

Each category contains:

🖼️ Category image

🏷️ Category name

🔗 Access to the products belonging to that category

The layout adapts according to the number of available categories.

<strong>🛍️ Products</strong>

When a user selects a category, they are redirected to the corresponding Products page.

Products are displayed using individual cards containing:

🖼️ Product image

🏷️ Product name

💰 Product price

📝 Product description

🛒 Add to Cart button

Clicking Add to Cart adds the selected product to the shopping cart.

<strong>🛒 Shopping Cart</strong>

The Cart page displays all products selected by the user.

Each item contains:

Information	Description
🖼️ Image	Product image
🏷️ Name	Product name
💰 Price	Price of one item
🔢 Quantity	Number of items
💵 Total	Price × Quantity

The final order total is automatically calculated and displayed below the cart.

Users can:

Review their selected products

Manage the items in their cart

Clear the entire cart

Proceed to payment

💳 Checkout & Stripe Payment

After reviewing their order, users can click Proceed to Payment to continue to checkout.

The application redirects the customer to Stripe Checkout, where payment information can be entered and the transaction can be completed.

<strong>⚠️ Important:</strong> This project uses a Stripe test secret key. Payments are therefore intended for development and testing purposes only. No real transactions should be made using this project.

<strong>⚙️ Administration</strong>

The application includes administrative panels that allow administrators to add new content to the store.

Administrators can:

➕ Add new categories

➕ Add new products

📦 Extend the store's product inventory

🗄️ Database & Storage

The application uses MySQL as its database management system.

Database operations are handled using Laravel Eloquent ORM, which provides an expressive and convenient way to interact with the database and manage relationships between application models.

<strong>🔐 Security</strong>

The project takes advantage of Laravel's built-in security features, including:

🔒 Secure password hashing

🛡️ Middleware for authentication and authorization

🗄️ Eloquent ORM for database interactions

🔐 Access control for administrative functionality

Laravel's built-in protection mechanisms against common web vulnerabilities

<strong>🧰 Technologies & Tools</strong>
Backend

PHP 8

Laravel 12

Laravel Eloquent ORM

Database

MySQL

Payment

Stripe Checkout

Stripe Test Environment

Development Environment

Visual Studio Code

<strong>⚠️ Disclaimer</strong>

This project is intended for educational and development purposes.

The Stripe integration uses the Stripe test environment and should not be used for processing real payments without appropriate configuration and security measures.

<strong>📄 License</strong>

This project is available on GitHub for learning and development purposes.

<strong>👨‍💻 Author</strong>

Farid Kesmia

<strong>GitHub:</strong>
https://github.com/faridkesmia

# Blog Project

## Overview
The Blog Project is a web application that allows users to publish and manage blog posts. The application includes an admin panel for managing blog posts, categories, and comments. It is built using Laravel, a powerful PHP framework, and utilizes MySQL for database management.

## Features
- **Admin Panel**: Manage blog posts, categories, and comments.
- **User Interface**: Frontend for users to view, search, and interact with blog posts.
- **Authentication**: User login and registration functionalities.
- **CRUD Operations**: Create, read, update, and delete blog posts.
- **Search Functionality**: Search blog posts by title or content.
- **Responsive Design**: Ensures usability across different devices and screen sizes.

## Technologies Used
- **Frontend**: HTML, CSS, Bootstrap, JavaScript
- **Backend**: PHP, Laravel
- **Database**: MySQL
- **Tools**: Git, Composer, NPM

## Installation
To get a local copy up and running, follow these simple steps.

## Prerequisites
- PHP 7.4 or higher
- Composer
- Node.js & npm
- MySQL

## Steps
1. **Clone the repository**:
   ```bash
   git clone https://github.com/Faiaz1997/blog_project_batch_15.git
   cd blog_project_batch_15

2.Install dependencies:
- composer install
- npm install
- npm run dev

3.Copy the example environment file and configure it:
- cp .env.example .env

4.Generate an application key:
- php artisan key:generate

5.Run the database migrations:
- php artisan migrate

6.Seed the database with test data (optional):
- php artisan db:seed

7.Start the development server:
- php artisan serve

8.Access the application:
- Open your browser and go to http://localhost:8000.

## Usage

- **Admin Panel**:
- URL: /admin
Features:
- Manage blog posts
- Manage categories
- Manage comments

- **Blog Frontend**:
- URL: /
Features:
- View all blog posts
- Search for posts
- View post details
- Comment on posts

## Contact
- Email: faiazbenreza@gmail.com
- Project Link: https://github.com/Faiaz1997/blog_project_batch_15

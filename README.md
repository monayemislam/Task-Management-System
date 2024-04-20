# Task Management System

## Overview

This Laravel project is a simple Task Management System that facilitates collaboration between Managers and Teammates on projects. The system includes user authentication, project management, and task assignment and status management features.

## System Features

### 1. User Authentication and Authorization

-   Two types of users: Manager and Teammate.
-   Managers can sign up using their Email, Name, Employee ID, and Password.
-   Managers can log in and create Teammates by providing their Name, Email, Employee ID, Position, and Password.

### 2. Project Management

-   Managers can create Projects with a unique Project Code and a Name.
-   Managers can create Tasks under these projects, where each task has a Task Name, Project Code (indicating which project it belongs to), Description, and Status (Pending, Working, Done).

### 3. Task Assignment and Status Management

-   The Manager can assign tasks to Teammates.
-   Teammates can log in to their accounts, view their assigned tasks, and update the status of these tasks.

## How to Run the Application

### Prerequisites

-   [Composer](https://getcomposer.org/) installed
-   [PHP](https://www.php.net/) installed
-   [MySQL](https://www.mysql.com/) or [SQLite](https://www.sqlite.org/) database
-   [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) installed

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/monayemislam/task-management-system.git
    cd task-management-system
    ```

2. **Install Composer dependencies:**

    ```bash
    composer install
    ```

3. **Copy the `.env.example` file to `.env` and configure the database settings:**

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the database migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database with sample data:**

    ```bash
    php artisan db:seed
    ```

7. **Install npm dependencies and compile assets:**

    ```bash
    npm install && npm run dev
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

9. **Open your web browser and navigate to [http://localhost:8000](http://localhost:8000).**

Now you should be able to access the Task Management System and explore its features. Log in as a Manager to create projects, assign tasks, and log in as a Teammate to view and update task statuses.

## License

This project is licensed under the [MIT License](LICENSE).

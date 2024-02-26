<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

# Laravel Employee Management API

This Laravel project provides a RESTful API for managing employees and departments.

## Prerequisites

Before you begin, ensure you have the following installed:

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/) or [MariaDB](https://mariadb.org/)

## Getting Started

1. Clone the repository:

    ```bash
    git clone https://github.com/iampraful/Aertrip_assignment.git
    ```

2. Change into the project directory:

    ```bash
    cd your-repo
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Update the `.env` file with your database configuration:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=aertrip_assignment
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Run the database migrations:

    ```bash
    php artisan migrate
    ```

7. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

The API should now be accessible at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## API Endpoints

- Departments
    - GET `/api/departments`: Get all departments.
    - POST `/api/departments`: Create a new department.
    - GET `/api/departments/{id}`: Get a specific department by ID.
    - PUT `/api/departments/{id}`: Update a specific department by ID.
    - DELETE `/api/departments/{id}`: Delete a specific department by ID.

- Employees
    - GET `/api/employees`: Get all employees.
    - POST `/api/employees`: Create a new employee.
    - GET `/api/employees/{id}`: Get a specific employee by ID.
    - PUT `/api/employees/{id}`: Update a specific employee by ID.
    - DELETE `/api/employees/{id}`: Delete a specific employee by ID.

## Contributing

If you would like to contribute to this project, please follow our [Contribution Guidelines](CONTRIBUTING.md).

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

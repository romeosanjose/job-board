# PHP REST API Project

## Overview
This project is a PHP-based REST API that follows the repository pattern, adheres to SOLID principles, and employs clean coding practices. It is designed to provide a robust and scalable API for managing resources.

## Project Structure
The project is organized into several directories and files, each serving a specific purpose:

- **app**: Contains the core application logic, including controllers, models, repositories, services, exceptions, and helpers.
  - **Controllers**: Handles incoming requests and returns responses.
  - **Models**: Represents the data structure and interacts with the database.
  - **Repositories**: Implements data access logic, following the repository pattern.
  - **Services**: Contains business logic and interacts with repositories.
  - **Exceptions**: Custom exceptions for handling API errors.
  - **Helpers**: Utility classes for common tasks.

- **config**: Contains configuration files, such as database settings.

- **public**: The entry point of the application, where routing and request handling occurs.

- **routes**: Defines the API routes and maps them to controller actions.

- **tests**: Contains unit and feature tests to ensure the application functions correctly.

- **vendor**: Contains third-party dependencies managed by Composer.

- **composer.json**: Configuration file for Composer, listing dependencies and autoloading settings.

- **composer.lock**: Locks the versions of the installed dependencies.

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd php-rest-api
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Configure the database settings in `config/database.php`.

## Usage
To start the application, run the following command in the terminal:
```
php -S localhost:8000 -t public
```
You can then access the API at `http://localhost:8000`.

## Testing
To run the tests, use the following command:
```
vendor/bin/phpunit
```

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.
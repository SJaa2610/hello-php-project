# PHP Hello World Application

A simple PHP application that prints "Hi, I'm Sarahi. This is my PHP project" when accessed via a GET request.

## Description
This project is a basic PHP application that demonstrates how to set up a simple web service. It handles GET requests and responds with a simple message.

## Prerequisites
- PHP 8.1+
- Apache (if running locally)
- Docker (optional, for containerization)
- A text editor or IDE of your choice (VS Code, PhpStorm, etc.)

## Technologies Used
- PHP 8.1
- Apache HTTP Server

## Installation and Running the Application

1. Clone the repository:
   ```bash
   https://github.com/SJaa2610/hello-php-project.git
   ```

2. Navigate to the project directory:
   ```bash
   cd hello-php-project
   ```

3. Install Apache and PHP (if running locally without Docker):
   ```bash
   sudo apt update
   sudo apt install apache2 php libapache2-mod-php
   ```

4. Place the `project.php` file in the Apache server's root directory:
   ```bash
   sudo cp project.php /var/www/html/index.php
   ```

5. Access the application:
   - Open your web browser and visit `http://localhost`.

   The app will be accessible on `http://localhost:8080`.

## Project Structure
```
src/
├── project.php          # Main PHP file
├── Dockerfile           # Docker configuration
└── .gitignore           # Git ignore file
```

## Configuration

No additional configuration is required to run this basic application.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository
2. Create a new branch for your changes
3. Open a pull request with your changes

## Author
Sarahi

## Contact
- GitHub: @sjaa2610

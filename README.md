# Symfony Post-Blog

Symfony project to create a post blog, with content stored in the database and with authentication.

![image](https://github.com/JoaoCoquim/Symfony-Post-Blog/assets/113604962/3e4d1b12-cd6b-4073-b288-ebfea345bdf2)
![image](https://github.com/JoaoCoquim/Symfony-Post-Blog/assets/113604962/66cd1f29-11e5-4602-8e80-2da6754c289c)

## Requirements

- PHP 8.0 or higher
- Composer
- Symfony CLI
- Docker Desktop

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/JoaoCoquim/Symfony-Post-Blog.git
   cd Symfony-Post-Blog
   
2. Install the dependencies:
    ```bash
   composer install

3. Configure the database in the ```.env``` file:
    ```bash
   DATABASE_URL=mysql://<username>:<password>@127.0.0.1:3306/<database_name>

4. Initialize Docker container
    ```bash
   docker-compose up -d

5. Run migrations to set up the database schema:
    ```bash
   symfony console doctrine:migrations:migrate

## Running the Application
To run the application, use the Symfony server:
   ```bash
   symfony serve -d
   ```
You can now access the application at http://localhost:8000

## Endpoints

| Endpoint            | Description                     |
|---------------------|---------------------------------|
| `/`                 | Homepage                        |
| `/custom/{slug?}`   | Custom page with optional slug  |
| `/post/`            | List all posts                  |
| `/post/create`      | Form to create a new post       |
| `/post/show/{id}`   | Show post details               |
| `/post/remove/{id}` | Remove a post                   |
| `/register`         | Registration form               |
| `/login`            | Login page                      |
| `/logout`           | Log out                         |

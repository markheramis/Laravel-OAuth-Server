# Laravel OAuth2 Server

## About This Project

This project is a demonstrator project for a basic OAuth2 authorization built using Laravel Passport. It also includes basic authentication features using Laravel Breeze and Blade templates.

## Features

- **OAuth 2.0 Authentication**: Implemented using Laravel Passport.
- **Basic Authentication**: Provided by Laravel Breeze with Blade templates.
- **User Registration and Login**: Simple and intuitive user registration and login system.
- **Password Reset**: Secure password reset functionality.
- **Email Verification**: Optional email verification for new users.

## Installation

1. Clone the repository.
2. Run `docker compose up -d` to start the containers.
3. To enter the app docker container CLI, run `docker exec -it ${APP_NAME}-app /bin/bash`.
4. You can now run `php artisan` to view all available Artisan commands.

## Routes

### Laravel Breeze Authentication Routes

- `GET /register`: Show the registration form.
- `POST /register`: Handle the registration request.
- `GET /login`: Show the login form.
- `POST /login`: Handle the login request.
- `POST /logout`: Log the user out.
- `GET /forgot-password`: Show the form to request a password reset link.
- `POST /forgot-password`: Send a password reset link.
- `GET /reset-password/{token}`: Show the password reset form.
- `POST /reset-password`: Handle the password reset request.
- `GET /email/verify`: Show the email verification notice.
- `GET /email/verify/{id}/{hash}`: Verify the user's email address.
- `POST /email/resend`: Resend the email verification link.

### Laravel Passport OAuth Routes

- `POST /oauth/token`: Issue an access token.
- `GET /oauth/authorize`: Authorize a client to access the user's account.
- `POST /oauth/clients`: Create a new client.
- `GET /oauth/clients`: List all clients.
- `PUT /oauth/clients/{client-id}`: Update a client.
- `DELETE /oauth/clients/{client-id}`: Delete a client.
- `GET /oauth/scopes`: List all scopes.
- `GET /oauth/personal-access-tokens`: List all personal access tokens.
- `POST /oauth/personal-access-tokens`: Create a new personal access token.
- `DELETE /oauth/personal-access-tokens/{token-id}`: Delete a personal access token.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

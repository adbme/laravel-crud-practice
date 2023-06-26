# Jobtrek évents / front-end - back-end part

Gestion Events is an event management application developed using React JS, Material-UI, and Laravel (PHP) as the back-end framework. The application lets you create and manage events with several roles :

- **admin** : Person who has admin rights, creates events, edits, deletes, accesses pages that others don't have access to.
- **assistant** : Person with assistant rights, create events, edit, delete, but only on request from an admin.
- **normal** : Normal represents any person who is not part of admin and assiatant, this can be visitors, employees, spectators etc.

This project is divided into several parts which can be viewed on github :

- [laravel breeze (dashboard, root)](https://github.com/adbme/breeze-react_practice)

- [laravel (full back-end, blade php)](https://github.com/adbme/laravel-crud-practice)

- [react (will be replaced)](https://github.com/adbme/react-test)


# Features

- Authentication with administrator and assistant roles
- Event creation with details such as name, dates, description, speakers, rooms, layouts, floor plans, etc.
- Email notifications to confirm event arrangements and send event reminders to participants
- Home page for attendees to view valid events and register for them
- Event registration with personal information like name, first name, participant status, accompanying persons, contact details, etc.
- Confirmation email sent after successful event registration
- List of registered members for each event
- Management of multiple rooms for events


# Installation

1. Clone the GitHub repository:

```bash
git clone https://github.com/adbme/laravel-crud-practice
```

2. Navigate to the project directory:

```bash
cd laravel-crud-practice/front-end
npm install
```

3. Install the dependencies using Composer:
```bash
composer install
```

4. Configure the database in the .env file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
```

5. Generate the Laravel application key :
```bash
php artisan key:generate
```

6. Run the database migrations:
```bash
php artisan migrate
```

7. Start the back-end development server:

```bash
php artisan serve
```

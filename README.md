
# Laravel User Notification System

### Installation Steps

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/virubhavsar/laravel-notification-system.git
   cd laravel-notification-system
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

## Database Setup

### Migration
1. **Create a new database "laravel_notifications"**
2. **Run migrations in the project console :"php artisan migrate"**
3. **Seed the database with initial data:"php artisan db:seed"**

## Configuration

1. **Copy the example environment file and update the configuration:**
   ```bash
   cp .env.example .env
   ```
2. **Update the `.env` file with your database credentials:**
   ```dotenv
   DB_DATABASE=laravel_notifications
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
   ```
3. **Generate an application key:"php artisan key:generate"**

## Running the Application

1. **Start the Laravel development server:**
   ```bash
   php artisan serve
   ```
### Accessing the Application
- Visit `http://localhost:8000` in your browser.


### Design Decisions

- **Notification System:** Implemented using Eloquent relationships to efficiently handle and track notifications for each user.
- **Form Request Validation:** Used Laravel Form Request classes to handle validation cleanly, ensuring that the controller logic remains concise.
- **Database Design:** The `users` table and `notifications` table are linked via a one-to-many relationship to manage the notifications efficiently.

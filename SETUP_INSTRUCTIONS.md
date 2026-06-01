# Library Management System - Setup Instructions

## Project Overview
A complete full-stack Library Management System built with PHP, MySQL, HTML, CSS, and Bootstrap 5. The system is admin-focused for librarian management with a responsive, mobile-friendly interface.

## Project Structure
```
DBMS Project/
├── admin/                    # Admin panel pages
│   ├── login.php            # Admin login page
│   ├── logout.php           # Admin logout
│   ├── index.php            # Dashboard
│   ├── add_book.php         # Add book form
│   ├── manage_books.php     # View/search/delete books
│   ├── edit_book.php        # Edit book details
│   ├── add_student.php      # Add student form
│   ├── manage_students.php  # View/search/delete students
│   ├── edit_student.php     # Edit student details
│   ├── issue_book.php       # Issue book to student
│   ├── return_book.php      # Return book from student
│   └── reports.php          # View all reports
├── includes/                 # Reusable components
│   ├── config.php           # Database connection
│   ├── header.php           # HTML header template
│   ├── footer.php           # HTML footer template
│   ├── navbar.php           # Top navigation bar
│   └── sidebar.php          # Sidebar navigation
├── assets/                   # Static assets
│   └── css/
│       └── style.css        # Custom Bootstrap theme
├── database/                 # Database files
│   └── database.sql         # SQL file for database setup
└── index.php                # Main entry point

```

## Features

### Authentication
- Admin login system with session management
- Login credentials: admin@library.com / admin123
- Protected pages with session verification
- Logout functionality

### Dashboard
- Real-time statistics (Total books, Available books, Total students, Issued books)
- Quick action buttons
- Bootstrap card-based UI

### Book Management
- Add new books with title, author, category, ISBN, quantity
- View all books with search functionality
- Edit book details and quantity
- Delete books
- Search by title, author, or ISBN

### Student Management
- Add new students with name, email, phone
- View all students with search
- Edit student details
- Delete students
- Search by name, email, or phone

### Book Issue System
- Issue books to students
- Select from available books dropdown
- Select from students dropdown
- Set return date
- Automatic quantity update

### Book Return System
- View all issued books
- Mark books as returned
- Automatic quantity restoration
- Days overdue indicator

### Reports
- Issued books report with list of current issues
- Returned books report (last 50)
- Overdue books report with days overdue
- Summary statistics for all categories

### UI Features
- Responsive Bootstrap 5 design
- Mobile-friendly sidebar navigation
- Cards, tables, forms, and alerts
- Bootstrap icons for visual appeal
- Success/error message alerts
- Auto-hiding notifications

## Requirements

### System Requirements
- PHP 7.4 or higher
- MySQL 5.7 or higher
- XAMPP (recommended for local development)
- Modern web browser

### Components Used
- **Backend**: Core PHP (no frameworks)
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Icons**: Bootstrap Icons
- **Security**: Prepared Statements (MySQLi)

## Installation Steps

### Step 1: Set Up XAMPP

1. Download and install XAMPP from https://www.apachefriends.org/
2. Start Apache and MySQL services from XAMPP Control Panel
3. Create a folder in `C:\xampp\htdocs\` named `library_system`
4. Place all project files in this folder

### Step 2: Create Database

1. Open phpMyAdmin: http://localhost/phpmyadmin/
2. Create a new database named `library_system`
3. Import the SQL file:
   - Go to the `database` folder
   - Copy the contents of `database.sql`
   - In phpMyAdmin, select the database and go to SQL tab
   - Paste the SQL and click Execute
   
   OR
   
   - Open Command Prompt and navigate to your project folder
   - Run: `mysql -u root -p library_system < database/database.sql`
   - Leave password blank when prompted

### Step 3: Configure Database Connection

1. Edit `includes/config.php` if your database credentials are different
2. Default credentials:
   - Host: localhost
   - User: root
   - Password: (empty for XAMPP)
   - Database: library_system

### Step 4: Access the Application

1. Open your browser
2. Navigate to: `http://localhost/library_system/`
3. You'll be redirected to the login page
4. Login with default credentials:
   - Email: admin@library.com
   - Password: admin123

## Default Admin Account

```
Email: admin@library.com
Password: admin123
```

> **Important**: Change this password in production!

## Database Structure

### admins table
- id (INT, Primary Key, Auto Increment)
- name (VARCHAR 100)
- email (VARCHAR 100, Unique)
- password (VARCHAR 255)
- created_at (TIMESTAMP)

### books table
- id (INT, Primary Key, Auto Increment)
- title (VARCHAR 200)
- author (VARCHAR 150)
- category (VARCHAR 100)
- isbn (VARCHAR 20, Unique)
- quantity (INT)
- available_quantity (INT)
- added_date (TIMESTAMP)
- updated_at (TIMESTAMP)

### students table
- id (INT, Primary Key, Auto Increment)
- name (VARCHAR 150)
- email (VARCHAR 100, Unique)
- phone (VARCHAR 15)
- created_at (TIMESTAMP)

### issued_books table
- id (INT, Primary Key, Auto Increment)
- book_id (INT, Foreign Key)
- student_id (INT, Foreign Key)
- issue_date (TIMESTAMP)
- return_date (DATE)
- status (ENUM: issued/returned)
- returned_at (TIMESTAMP)

## Key Features

### Security
- Prepared statements to prevent SQL injection
- Session-based authentication
- HTML entity encoding for XSS prevention
- Input validation on server-side

### Responsive Design
- Mobile-first approach
- Bootstrap 5 grid system
- Responsive sidebar (collapses on mobile)
- Mobile-friendly forms and tables

### User Experience
- Auto-hiding success/error alerts (5 seconds)
- Confirmation dialogs for delete operations
- Search functionality on all list pages
- Quick action buttons on dashboard

## File Descriptions

### Core Files
- **index.php**: Main entry point, redirects to login/dashboard
- **includes/config.php**: Database connection and session initialization

### Admin Pages
- **admin/login.php**: Authentication page
- **admin/index.php**: Admin dashboard with statistics
- **admin/manage_books.php**: Book management and search
- **admin/manage_students.php**: Student management and search
- **admin/issue_book.php**: Issue books to students
- **admin/return_book.php**: Return books and track overdue items
- **admin/reports.php**: Comprehensive reports view

### Templates
- **includes/header.php**: HTML header with Bootstrap links
- **includes/footer.php**: HTML footer and scripts
- **includes/navbar.php**: Top navigation bar
- **includes/sidebar.php**: Sidebar navigation menu

### Styling
- **assets/css/style.css**: Custom Bootstrap theme with responsive design

## Usage Tips

### Adding Books
1. Go to "Add Book" from sidebar
2. Fill in all required fields (Title, Author, Category, ISBN, Quantity)
3. Click "Add Book"

### Adding Students
1. Go to "Add Student" from sidebar
2. Enter name, email, and phone
3. Click "Add Student"

### Issuing Books
1. Go to "Issue Book" from sidebar
2. Select a student from dropdown
3. Select a book from dropdown (only available books shown)
4. Set return date
5. Click "Issue Book"

### Returning Books
1. Go to "Return Book" from sidebar
2. View all issued books with days left
3. Click "Return" button to mark as returned
4. Book quantity automatically updates

### Viewing Reports
1. Go to "Reports" from sidebar
2. See statistics and all three report sections:
   - Currently Issued Books
   - Overdue Books (highlighted in red)
   - Recently Returned Books

## Troubleshooting

### Database Connection Error
- Ensure MySQL service is running
- Check credentials in `includes/config.php`
- Verify database name is `library_system`

### Page Not Found
- Ensure files are in correct folders
- Check URL is `http://localhost/library_system/`
- Clear browser cache

### Login Not Working
- Ensure database is properly imported
- Verify admin email exists in database
- Check password is exactly "admin123"

### Sidebar Navigation Issues
- Try hard refreshing (Ctrl+F5)
- Clear browser cookies
- Check browser console for JavaScript errors

## Security Considerations

### For Production Use
1. Change default admin password
2. Enable HTTPS
3. Add CSRF tokens to forms
4. Implement stronger password hashing (password_hash)
5. Add rate limiting for login attempts
6. Implement proper user roles and permissions
7. Regular database backups
8. Add SQL query logging

## Performance Tips

1. Add indexes on frequently searched fields (already included)
2. Implement pagination for large result sets
3. Use caching for statistics
4. Optimize database queries
5. Minify CSS and JavaScript

## Future Enhancements

- Multiple admin roles
- Email notifications for overdue books
- Book reservations system
- Fine calculation system
- PDF report generation
- Excel export functionality
- Advanced search filters
- Book ratings and reviews

## Support

For issues or questions:
1. Check the troubleshooting section
2. Review database structure
3. Verify file permissions
4. Check browser console for errors

## License

This project is free to use and modify for educational and commercial purposes.

---

**Created**: 2026
**Version**: 1.0
**Last Updated**: May 31, 2026

# Library Management System

A complete **full-stack Library Management System** designed for librarians to manage books, students, and book issuance/return operations.

## 🚀 Quick Start

### Requirements
- PHP 7.4+
- MySQL 5.7+
- XAMPP (recommended)

### Installation (5 Steps)
1. **Copy to XAMPP**: Place project in `C:\xampp\htdocs\library_system\`
2. **Create Database**: Import `database/database.sql` in phpMyAdmin
3. **Start Services**: Run Apache & MySQL from XAMPP Control Panel
4. **Access**: Open http://localhost/library_system/
5. **Login**: Use email `admin@library.com` and password `admin123`

## 📋 Features

### Admin Dashboard
- Real-time statistics (books, students, issued/available counts)
- Quick action buttons for common tasks
- Responsive Bootstrap 5 UI

### Book Management
- ✅ Add, Edit, Delete books
- ✅ Search by title, author, ISBN
- ✅ Track quantity and availability
- ✅ Prepared statements for security

### Student Management
- ✅ Add, Edit, Delete students
- ✅ Search by name, email, phone
- ✅ Student registration tracking

### Book Issuance
- ✅ Issue books to students with return date
- ✅ Automatic availability tracking
- ✅ Student and book dropdowns

### Book Return System
- ✅ Mark books as returned
- ✅ Track overdue books
- ✅ Auto-restore book availability
- ✅ Days overdue indicator

### Reports
- ✅ Issued books list
- ✅ Returned books history
- ✅ Overdue books tracking
- ✅ Summary statistics

## 📁 Project Structure

```
library_system/
├── admin/                  # Admin pages
├── includes/              # Reusable components
├── assets/css/            # Styling
├── database/              # SQL file
├── index.php              # Entry point
└── SETUP_INSTRUCTIONS.md  # Detailed setup
```

## 🔐 Security Features
- Session-based authentication
- Prepared SQL statements (MySQLi)
- Input validation & sanitization
- HTML entity encoding

## 📱 Responsive Design
- Mobile-friendly interface
- Bootstrap 5 grid system
- Adaptive sidebar navigation
- Works on all devices

## 🎨 UI Components
- Bootstrap 5 cards, tables, forms
- Bootstrap Icons
- Auto-hiding alerts (5 seconds)
- Confirmation dialogs
- Professional color scheme

## 📊 Database Tables
- **admins**: Admin user accounts
- **books**: Library books inventory
- **students**: Student records
- **issued_books**: Book issuance tracking

## 🔧 Customization

Edit `includes/config.php` if using different database credentials:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'library_system');
```

## 📖 Usage

### Issue a Book
1. Click "Issue Book" → Select student and book → Set return date → Submit
2. Book availability automatically decreases

### Return a Book
1. Click "Return Book" → Find the issued book → Click "Return"
2. Book availability automatically increases

### View Reports
1. Click "Reports" → See all statistics
2. Check overdue books (highlighted in red)

## ⚡ Performance
- Optimized database queries
- Indexed search fields
- Efficient prepared statements
- Bootstrap CDN for faster loading

## 🛡️ Production Tips
- Change default admin password
- Enable HTTPS
- Regular database backups
- Implement stronger password hashing
- Add rate limiting for login

## 📝 Default Credentials
- **Email**: admin@library.com
- **Password**: admin123

## ❓ Troubleshooting

**Database Connection Error?**
- Start MySQL in XAMPP
- Check database name is `library_system`

**Page Not Loading?**
- Check URL: `http://localhost/library_system/`
- Clear browser cache (Ctrl+F5)

**Login Issues?**
- Verify database import was successful
- Confirm admin email exists in database

## 📚 Code Quality
- Clean, well-commented code
- DRY principle (reusable templates)
- Bootstrap components for consistency
- Minimal but maximum functionality

## 🎓 Learning Resources
- Demonstrates PHP basics
- MySQL prepared statements
- Bootstrap 5 usage
- Session management
- CRUD operations

## 📞 Support
See **SETUP_INSTRUCTIONS.md** for detailed documentation and troubleshooting.

---

**Version**: 1.0  
**Last Updated**: May 31, 2026  
**License**: Free for educational and commercial use

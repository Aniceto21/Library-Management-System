# Quick Reference Guide

## Admin Panel Navigation

### Main Menu (Sidebar)
```
Dashboard          - Overview and statistics
Manage Books       - View, search, delete books
Add Book           - Add new book to library
Students           - View student list
Add Student        - Register new student
Issue Book         - Lend book to student
Return Book        - Accept returned book
Reports            - View all reports
```

## Common Tasks

### Adding a Book
1. **Sidebar**: Click "Add Book"
2. **Fill Form**:
   - Book Title: Title of the book
   - Author: Author name
   - Category: Fiction/Non-Fiction/Reference/etc
   - ISBN: Unique identifier (13-digit code)
   - Quantity: Number of copies
3. **Click**: "Add Book" button

### Registering a Student
1. **Sidebar**: Click "Add Student"
2. **Fill Form**:
   - Full Name: Student's complete name
   - Email Address: Student's email (must be unique)
   - Phone Number: Contact number
3. **Click**: "Add Student" button

### Issuing a Book to Student
1. **Sidebar**: Click "Issue Book"
2. **Select Student**: Choose from dropdown
3. **Select Book**: Choose from available books (shows availability count)
4. **Set Return Date**: Pick a due date
5. **Click**: "Issue Book" button
6. **Result**: Book count automatically updates

### Returning an Issued Book
1. **Sidebar**: Click "Return Book"
2. **Find Entry**: Look for the student and book in the table
3. **Check Status**: 
   - Green badge = Due soon
   - Red badge = Overdue
4. **Click**: "Return" button
5. **Confirm**: Click OK in confirmation dialog
6. **Result**: Book is marked returned and added back to available count

### Searching Books
1. **Sidebar**: Click "Manage Books"
2. **Search Box**: Enter search term (title, author, or ISBN)
3. **Click**: Search button or just press Enter
4. **Results**: Filtered table shows matching books
5. **Clear**: Click "Clear" button to reset search

### Editing Book Details
1. **Sidebar**: Click "Manage Books"
2. **Find Book**: Search or scroll through table
3. **Action**: Click pencil icon (✏️)
4. **Edit Form**:
   - Can change: Title, Author, Category, Quantity
   - Cannot change: ISBN (for data integrity)
   - Available Quantity auto-updates
5. **Save**: Click "Update Book" button

### Deleting a Book
1. **Sidebar**: Click "Manage Books"
2. **Find Book**: Search or scroll
3. **Click**: Trash icon (🗑️)
4. **Confirm**: Click OK in confirmation dialog
5. **Done**: Book is permanently deleted

### Viewing All Reports
1. **Sidebar**: Click "Reports"
2. **See Statistics**:
   - Total issued books count
   - Total returned books count
   - Total overdue books count
3. **Three Report Tables**:
   - **Currently Issued**: Books not yet returned
   - **Overdue Books**: Books past due date (highlighted red)
   - **Recently Returned**: Last 50 returned books

## Dashboard Overview

The Dashboard shows:
- **Total Books**: Count of all books in library
- **Available Books**: Books ready to be issued (green)
- **Total Students**: Registered students count
- **Books Issued**: Currently checked-out books (yellow)

Each card has an icon and can be clicked for more details.

## Logout

**Top Right Corner** → Click your name → Select "Logout"
- Ends your session
- Returns to login page
- Session data cleared

## Mobile Usage

### On Smartphone/Tablet:
- Sidebar automatically collapses
- Navigation available as menu buttons
- All tables are scrollable
- Forms are full-width and touch-friendly
- All features work normally

### Tips:
- Use landscape mode for better table view
- Tap buttons carefully
- Use search to find items quickly

## Keyboard Shortcuts

| Action | Shortcut |
|--------|----------|
| Hard Refresh | Ctrl+F5 |
| Clear Cache | Ctrl+Shift+Delete |
| Focus Search | Ctrl+F |
| Submit Form | Enter |
| Open Dev Tools | F12 |

## Common Error Messages

| Error | Solution |
|-------|----------|
| "Email already exists!" | Student/Admin email is not unique |
| "ISBN already exists!" | This ISBN is already in database |
| "Book is not available!" | No copies left to issue |
| "All fields are required!" | Missing required form field |
| "Invalid email or password!" | Login credentials incorrect |

## Data Validation Rules

### For Books:
- Title: Required, max 200 chars
- Author: Required, max 150 chars
- Category: Required, any text
- ISBN: Required, must be unique
- Quantity: Must be positive number

### For Students:
- Name: Required, max 150 chars
- Email: Required, must be unique
- Phone: Required, max 15 chars

### For Issue/Return:
- Student: Must select one
- Book: Must select one with available qty
- Return Date: Must be in future

## Database Info

**Connection Details**:
- Host: localhost
- User: root
- Password: (empty)
- Database: library_system

**Tables**:
- admins (Admin accounts)
- books (Book inventory)
- students (Student records)
- issued_books (Issue/return tracking)

## Account Management

### Default Admin Account:
- Email: admin@library.com
- Password: admin123

### Change Password:
⚠️ **Not available in current version**
Use phpMyAdmin to update password:
1. Open phpMyAdmin
2. Go to `library_system` database
3. Edit `admins` table
4. Update password field

## Tips & Tricks

### ✅ Best Practices:
- Search before adding to avoid duplicates
- Set realistic return dates (14-30 days)
- Check reports daily for overdue items
- Keep ISBN codes accurate for tracking

### ⚡ Speed Tips:
- Use search to find items quickly
- Multi-select and batch operations preferred
- Use filters on reports page
- Sort tables by clicking column headers

### 🔒 Security:
- Never share admin credentials
- Logout when leaving computer
- Clear browser history regularly
- Don't store passwords in browser

## Frequently Asked Questions

**Q: Can I issue multiple books to one student?**
A: Yes, repeat the issue process for each book.

**Q: Can I delete an issued book?**
A: No, first return the book, then delete.

**Q: What if a book is lost?**
A: Issue it as "returned" in the system, then delete the book entry.

**Q: Can students see their account?**
A: No, this is admin-only system.

**Q: How do I backup the database?**
A: Use phpMyAdmin's Export feature or MySQL dump command.

---

**Quick Support**: Check SETUP_INSTRUCTIONS.md for detailed help

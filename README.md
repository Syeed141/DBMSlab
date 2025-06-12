
# 🍽️ DBMS Lab Project – Online Canteen Management System

Welcome to the **Online Canteen Management System**, a PHP-MySQL-based web application designed to streamline meal ordering and student/admin interactions in a university canteen. This project was developed as part of a **Database Management Systems (DBMS)** lab.

---

## 📁 Project Structure

```
DBMSlab-main/
│
├── Adminloginfront.php       # Admin login interface
├── Adminloginback.php        # Admin login logic
├── connection.php            # Database connection script
├── home.php                  # Homepage after login
├── logininterface.php        # Student login interface
├── logout.php                # Logout functionality
├── sign.php                  # Student sign-up form
├── signinback.php            # Student sign-in logic
├── studentlogin.php          # Alternative student login
├── studlogin.php             # Student login backend
├── studnetpersonalinfo.php   # Display student personal info
│
├── logininterface.css        # Styles for login interfaces
├── student.css               # Styles for student pages
├── s.css                     # Miscellaneous CSS
│
├── b1.jpg, i4.jpg            # Images used in UI
│
├── d.sql                     # Database schema
├── meal.sql, meal69.sql      # Meal-related data inserts
│
├── My project.rar            # Additional project resources
├── meal_final.rar
├── meal_menu.rar
├── notice.rar
│
└── Admin/
    ├── Adminhome.php         # Admin dashboard
    ├── addadmin.php          # Admin creation UI
    ├── addadminback.php      # Logic to add admin
    ├── admininfofront.php    # Admin information viewer
    ├── connection.php        # DB connection for admin panel
    ├── shamscss.css          # Admin panel styling
    └── back.png              # Admin panel image
```

---

## 💡 Features

- 🔐 **Login System**  
  Admin and student login with backend validation.

- 🧾 **Meal Management**  
  Multiple SQL files to handle meal-related entries and schema setup.

- 👨‍🎓 **Student Portal**  
  - Personal info management
  - Canteen access interface

- 👨‍💼 **Admin Panel**  
  - Admin dashboard
  - Add/view admin accounts
  - Visual UI with dedicated CSS

---

## ⚙️ Technologies Used

- **Frontend**: HTML, CSS, PHP
- **Backend**: PHP
- **Database**: MySQL
- **Tools**: XAMPP / WAMP (recommended for testing locally)

---

## 🛠️ Setup Instructions

1. **Clone the Repository or Extract the ZIP**
   ```
   git clone <repo-url>
   ```

2. **Set Up Database**
   - Import `d.sql`, `meal.sql` into your MySQL server using phpMyAdmin or the MySQL CLI.

3. **Configure Connection**
   - Update `connection.php` files with your DB username, password, and host.

4. **Run the Project**
   - Place the files in your `htdocs/` directory (for XAMPP).
   - Navigate to `http://localhost/DBMSlab-main/logininterface.php`

---



## 📄 License

This project was developed for educational purposes. You are free to modify and adapt it for learning and academic submissions.

---

## 🙋‍♂️ Acknowledgements

Special thanks to our course instructor and lab assistants for their guidance and support throughout the DBMS lab sessions.

# Form-using-php

A Simple PHP application that allows users to register by providing their name, email, password, gender, phone code, and phone number. The data is stored in a MySQL database.

## Features

- User registration with validation
- Email uniqueness check
- Password hashing for security
- Simple error handling

## Installation

1. **Open XAMPP Control Panel**:
   - Launch the XAMPP Control Panel. You can find it in the directory where you installed XAMPP (e.g., `C:\xampp\xampp-control.exe` on Windows).
   - Start the **Apache** and **MySQL** services by clicking the "Start" buttons next to them.

2. **Create Your Project Directory**:
   - Navigate to the `htdocs` folder in your XAMPP installation directory (e.g., `C:\xampp\htdocs`).
   - Create a new folder for your project (e.g., `C:\xampp\htdocs\user_registration`).

3. **Add Your PHP Files**:
   - Place your PHP files (e.g., `insert.php`, any HTML files, etc.) into the newly created project folder.

4. **Set Up the Database**:
   - Open your web browser and go to `http://localhost/phpmyadmin`.
   - Click on the **Databases** tab and create a new database named `form`.
   - Click on the newly created database, then go to the **SQL** tab and run the following SQL command to create the `register` table:
    then add necessary rows to the table

5. **Access Your Project**:
   - In your web browser, navigate to `http://localhost/user_registration/insert.php` (or the name of your main PHP file) to access your registration form.


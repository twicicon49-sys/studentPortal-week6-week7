# Development Logbook: Advanced Web Design & Development

**Course:** BIT3208
**Project:** Student Portal & Management System

---

## Week 6: Database Integration and CRUD Operations

### Overview
This week focused on connecting our web application to a MySQL database to securely store, retrieve, update, and delete records—forming the foundation of our Student Portal.

### Activities & Implementation
1. **Database Connection & Initialization (`db.php`, `index.php`)**
   - Configured the MySQL connection parameters (`localhost`, `root`, `studentportal`).
   - Implemented an automated setup script in `index.php` that dynamically creates the database and the necessary tables (`users`, `students`, `units`, `student_units`) if they do not exist.
2. **Create (C) - Adding Records (`add_student.php`)**
   - Built a secure HTML form to capture student details (Full Name, Email, Course).
   - Used PHP to sanitize inputs using `mysqli_real_escape_string` and executed an `INSERT INTO` SQL query to save records into the `students` table.
3. **Read (R) - Displaying Records (`view_students.php`)**
   - Executed a `SELECT * FROM students` query.
   - Dynamically generated an HTML table using a `while` loop with `mysqli_fetch_assoc()` to display all registered students in a formatted, user-friendly view.
4. **Update (U) - Editing Records (`edit_student.php`)**
   - Allowed users to click "Edit" on a specific record, passing the student's ID via the URL (`GET` request).
   - Pre-filled a form with the existing data and utilized an `UPDATE` SQL statement to apply modifications.
5. **Delete (D) - Removing Records (`delete_student.php`)**
   - Created a backend script that takes a student ID and runs a `DELETE FROM students WHERE id = ?` query to remove the record permanently.

---

## Week 7: User Authentication and Session Management

### Overview
This week focused on securing the application. We implemented a comprehensive Multi-User Authentication System supporting Admin, Lecturer, and Student roles with strict access controls.

### Activities & Implementation
1. **Secure User Registration (`register.php`)**
   - Created a registration form allowing users to select their specific role (`Admin`, `Lecturer`, or `Student`).
   - **Security Practice:** Implemented `password_hash()` with `PASSWORD_DEFAULT` to ensure passwords are encrypted before being stored in the database.
2. **Login System (`login.php`)**
   - Built an authentication script that searches for a user's email.
   - Utilized `password_verify()` to cross-check the submitted plain-text password against the hashed password in the database.
3. **Session Management (`session_start()`)**
   - Upon successful login, the system securely stores the user's `user_id`, `fullname`, and `role` inside the `$_SESSION` superglobal to remember them across pages.
4. **Protected Pages & Role-Based Access Control (RBAC)**
   - **Dashboard Segregation (`dashboard.php`):** Conditionally rendered UI elements. Students see "Available Units" and "My Registered Units", while Admins/Lecturers see "Manage Students" and "Manage Units".
   - **Backend Lockdown:** Added strict session checks at the top of pages like `add_student.php` and `delete_student.php` to forcibly redirect any unauthorized users (like a Student trying to view the student list).
5. **Logout Functionality (`logout.php`)**
   - Created a secure exit point that uses `session_unset()` and `session_destroy()` to wipe the temporary user data and redirect back to the login screen.
6. **Advanced Feature Implementation: Unit Registration**
   - Applied week 6 & 7 knowledge to build a relational Unit Registration system (`available_units.php` and `my_units.php`) specifically tailored for the `Student` role.

---

## Weekly Reflection Summary
Through Weeks 6 and 7, the application evolved from a static interface into a highly dynamic, data-driven, and secure system. We successfully applied CRUD operations to manage records, and leveraged password hashing and sessions to ensure that sensitive operations remain exclusively in the hands of authorized administrators and lecturers.

<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Michael_Maguil_Logbook_Week6_Week7.doc");
header("Pragma: no-cache");
header("Expires: 0");
?>
<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'>
<head>
<meta charset="utf-8">
<!--[if gte mso 9]>
<xml>
<w:WordDocument>
<w:View>Print</w:View>
<w:Zoom>100</w:Zoom>
<w:DoNotOptimizeForBrowser/>
</w:WordDocument>
</xml>
<![endif]-->
<style>
    @page {
        size: A4;
        margin: 1in 1in 1in 1in;
    }
    body {
        font-family: 'Times New Roman', serif;
        font-size: 12pt;
        line-height: 1.8;
        text-align: justify;
        color: #000;
    }
    .cover-page {
        text-align: center;
        page-break-after: always;
    }
    .page-break {
        page-break-before: always;
    }
    .week-title {
        text-align: center;
        font-size: 18pt;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .week-subtitle {
        text-align: center;
        font-size: 14pt;
        font-weight: bold;
        margin-top: 0;
        margin-bottom: 5px;
    }
    .week-subtitle2 {
        text-align: center;
        font-size: 12pt;
        font-style: italic;
        margin-top: 0;
        margin-bottom: 30px;
    }
    .section-heading {
        font-size: 13pt;
        font-weight: bold;
        text-decoration: underline;
        margin-top: 25px;
        margin-bottom: 10px;
    }
    .screenshot-box {
        border: 2px dashed #aaa;
        min-height: 220px;
        margin: 10px auto 25px auto;
        padding: 80px 15px;
        text-align: center;
        color: #888;
        font-style: italic;
        font-size: 11pt;
        background-color: #fafafa;
        width: 90%;
    }
    .fig-caption {
        font-weight: bold;
        font-size: 11pt;
        margin-top: 20px;
        margin-bottom: 5px;
        text-align: center;
    }
    .toc-table {
        width: 80%;
        margin: 20px auto;
        border: none;
        font-size: 12pt;
    }
    .toc-table td {
        padding: 4px 0;
        border: none;
    }
    .toc-week {
        font-weight: bold;
        font-size: 13pt;
        padding-top: 12px !important;
    }
    .toc-dots {
        border-bottom: 1px dotted #000;
    }
    .reflection-text {
        text-indent: 40px;
        margin-top: 10px;
    }
    .activity-list {
        margin-left: 20px;
        margin-bottom: 15px;
    }
    .activity-list li {
        margin-bottom: 8px;
    }
</style>
</head>
<body>

<!-- ===================== COVER PAGE ===================== -->
<div class="cover-page">
    <br><br><br><br><br>

    <p style="font-size: 28pt; font-weight: bold; letter-spacing: 2px;">MOUNT KENYA UNIVERSITY</p>

    <br><br>

    <p style="font-size: 16pt; font-weight: bold;">SCHOOL OF COMPUTING AND INFORMATICS</p>
    <p style="font-size: 16pt; font-weight: bold;">DEPARTMENT OF COMPUTER SCIENCE</p>

    <br><br><br><br>

    <p style="font-size: 18pt; font-weight: bold; text-decoration: underline;">MICHAEL MAGUIL</p>

    <br>

    <table style="margin: 0 auto; border: none; font-size: 12pt; text-align: left;">
        <tr><td style="padding: 3px 10px; border: none;"><strong>Registration Number:</strong></td><td style="padding: 3px 10px; border: none;">BSCCS/2024/37519</td></tr>
        <tr><td style="padding: 3px 10px; border: none;"><strong>Course:</strong></td><td style="padding: 3px 10px; border: none;">Bachelor of Science in Computer Science</td></tr>
        <tr><td style="padding: 3px 10px; border: none;"><strong>Academic Year:</strong></td><td style="padding: 3px 10px; border: none;">Year Four</td></tr>
        <tr><td style="padding: 3px 10px; border: none;"><strong>Unit Code:</strong></td><td style="padding: 3px 10px; border: none;">BIT3208</td></tr>
        <tr><td style="padding: 3px 10px; border: none;"><strong>Unit Name:</strong></td><td style="padding: 3px 10px; border: none;">Advanced Web Design and Development</td></tr>
        <tr><td style="padding: 3px 10px; border: none;"><strong>Lecturer:</strong></td><td style="padding: 3px 10px; border: none;">Michael Nyoro</td></tr>
    </table>

    <br><br><br>

    <p style="font-size: 13pt; font-weight: bold; text-decoration: underline;">TECHNOLOGIES USED</p>
    <p style="font-size: 12pt;">PHP &bull; MySQL &bull; XAMPP &bull; Apache &bull; Visual Studio Code (VS Code)</p>

    <br>

    <p style="font-size: 11pt;"><strong>GITHUB:</strong> https://github.com/twicicon49-sys/smart_ecommerce.git</p>
</div>

<!-- ===================== TABLE OF CONTENTS ===================== -->

<p style="text-align: center; font-size: 20pt; font-weight: bold; margin-bottom: 30px;">Table of Contents</p>

<table class="toc-table">
    <tr>
        <td class="toc-week">Week 6</td>
        <td class="toc-dots" width="60%"></td>
        <td style="text-align: right; font-weight: bold;">2</td>
    </tr>
    <tr>
        <td style="padding-left: 25px;">Database Integration and CRUD Operations</td>
        <td class="toc-dots"></td>
        <td style="text-align: right;">2</td>
    </tr>
    <tr>
        <td style="padding-left: 25px;">Implementing Multi-Table Relationships and Advanced CRUD</td>
        <td class="toc-dots"></td>
        <td style="text-align: right;">2</td>
    </tr>

    <tr><td colspan="3">&nbsp;</td></tr>

    <tr>
        <td class="toc-week">Week 7</td>
        <td class="toc-dots"></td>
        <td style="text-align: right; font-weight: bold;">6</td>
    </tr>
    <tr>
        <td style="padding-left: 25px;">User Authentication and Session Management</td>
        <td class="toc-dots"></td>
        <td style="text-align: right;">6</td>
    </tr>
    <tr>
        <td style="padding-left: 25px;">Role-Based Access Control, Protected Pages, and Unit Registration</td>
        <td class="toc-dots"></td>
        <td style="text-align: right;">6</td>
    </tr>
</table>


<!-- ===================== WEEK 6 ===================== -->
<div class="page-break"></div>

<p class="week-title">Week 6</p>
<p class="week-subtitle">Database Integration and CRUD Operations</p>
<p class="week-subtitle2">Implementing Multi-Table Relationships and Advanced CRUD</p>

<hr style="border: 1px solid #000; margin-bottom: 20px;">

<p class="section-heading">Overview</p>

<p>This week focused on connecting the Student Portal web application to a MySQL database. The objective was to securely store, retrieve, update, and delete records using PHP and MySQL &mdash; forming the complete CRUD foundation of the system. Additionally, relational tables were introduced for managing academic units.</p>

<p class="section-heading">Activities Performed</p>

<ol class="activity-list">
    <li><strong>Database Connection and Initialization</strong> &mdash; Configured connection parameters in <b>db.php</b> (localhost, root, studentportal). Built an automated setup script in <b>index.php</b> that dynamically creates the database and all required tables (<b>users</b>, <b>students</b>, <b>units</b>, <b>student_units</b>) on first visit.</li>

    <li><strong>Create Operation (INSERT)</strong> &mdash; Designed a secure HTML form in <b>add_student.php</b> to capture student details (Full Name, Email, Course). Used <b>mysqli_real_escape_string()</b> to sanitize inputs and executed an <b>INSERT INTO</b> SQL query to store records.</li>

    <li><strong>Read Operation (SELECT)</strong> &mdash; Executed a <b>SELECT * FROM students</b> query in <b>view_students.php</b>. Dynamically rendered records in a styled HTML table using a <b>while</b> loop with <b>mysqli_fetch_assoc()</b>.</li>

    <li><strong>Update Operation (UPDATE)</strong> &mdash; Built <b>edit_student.php</b> to allow editing of existing records. The student&rsquo;s ID is passed via a GET request, the form is pre-filled with current data, and an <b>UPDATE</b> SQL statement applies the changes.</li>

    <li><strong>Delete Operation (DELETE)</strong> &mdash; Created <b>delete_student.php</b>, a backend script that accepts a student ID and executes a <b>DELETE FROM students WHERE id = ?</b> query to permanently remove the record.</li>

    <li><strong>Multi-Table Management</strong> &mdash; Created the <b>units</b> and <b>student_units</b> tables with foreign key relationships. Built <b>manage_units.php</b> for administrators to add and delete academic units.</li>
</ol>

<p class="section-heading">Screenshots</p>

<p class="fig-caption">Fig 1: Database Connection Script &ndash; db.php connecting PHP to MySQL</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 2: Automated Database Initialization &ndash; index.php creating all tables dynamically</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 3: Add Student Form &ndash; HTML form with PHP INSERT query</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 4: View Students Table &ndash; displaying all student records from the database</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 5: Edit Student Operation &ndash; pre-filled form and UPDATE query execution</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 6: Delete Student Operation &ndash; removing a record from the database</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 7: Manage Units Interface &ndash; Admin adding new units into the system</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 8: Units Table in MySQL &ndash; stored unit records in phpMyAdmin</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="section-heading">Reflection</p>

<p class="reflection-text">In week six, I focused on Database Integration by connecting the Student Portal web application to a MySQL database using PHP and performing complete CRUD operations. I configured the database connection parameters in <b>db.php</b> and built an automated initialization script in <b>index.php</b> that dynamically creates the database and all necessary tables if they do not already exist.</p>

<p class="reflection-text">I successfully implemented the Create operation through <b>add_student.php</b> using sanitized HTML forms and INSERT queries, the Read operation in <b>view_students.php</b> by fetching records with SELECT queries and rendering them in a styled HTML table, the Update operation in <b>edit_student.php</b> by pre-filling forms and executing UPDATE statements, and the Delete operation in <b>delete_student.php</b> using DELETE queries.</p>

<p class="reflection-text">I also expanded beyond simple single-table CRUD by creating relational tables for unit management. A major challenge was ensuring that the SQL queries correctly handled foreign key relationships between the users and units tables. The screenshots demonstrate successful multi-table creation, the enhanced CRUD interfaces, and proper handling of relational data via PHP.</p>


<!-- ===================== WEEK 7 ===================== -->
<div class="page-break"></div>

<p class="week-title">Week 7</p>
<p class="week-subtitle">User Authentication and Session Management</p>
<p class="week-subtitle2">Role-Based Access Control, Protected Pages, and Unit Registration</p>

<hr style="border: 1px solid #000; margin-bottom: 20px;">

<p class="section-heading">Overview</p>

<p>This week focused on securing the application by implementing a comprehensive Multi-User Authentication System. The system supports three distinct roles &mdash; Admin, Lecturer, and Student &mdash; each with different levels of access and permissions. Session management and password hashing were applied to protect user data.</p>

<p class="section-heading">Activities Performed</p>

<ol class="activity-list">
    <li><strong>Secure User Registration</strong> &mdash; Created a registration form in <b>register.php</b> that allows users to enter their Full Name, Email, Password, and select their role (Student, Lecturer, or Admin). Passwords are securely encrypted using <b>password_hash()</b> with <b>PASSWORD_DEFAULT</b> before storing in the database.</li>

    <li><strong>Login System</strong> &mdash; Built an authentication script in <b>login.php</b> that queries the database for the user&rsquo;s email and verifies the submitted password against the stored hash using <b>password_verify()</b>.</li>

    <li><strong>Session Management</strong> &mdash; Upon successful login, the system stores the user&rsquo;s <b>user_id</b>, <b>fullname</b>, and <b>role</b> inside the <b>$_SESSION</b> superglobal using <b>session_start()</b>, allowing persistent identification across all pages.</li>

    <li><strong>Dashboard Segregation (RBAC)</strong> &mdash; Implemented conditional rendering in <b>dashboard.php</b>. Admin and Lecturer roles see &ldquo;Add Student&rdquo;, &ldquo;View Students&rdquo;, and &ldquo;Manage Units&rdquo;. Student role sees only &ldquo;Available Units&rdquo; and &ldquo;My Registered Units&rdquo;.</li>

    <li><strong>Backend Access Restrictions</strong> &mdash; Added strict session-based security checks at the top of <b>add_student.php</b>, <b>edit_student.php</b>, <b>delete_student.php</b>, and <b>view_students.php</b> to redirect unauthorized users back to the dashboard.</li>

    <li><strong>Unit Registration for Students</strong> &mdash; Built <b>available_units.php</b> where students can browse offered units and click &ldquo;Register&rdquo; to enroll. Built <b>my_units.php</b> where students view their enrolled units and can &ldquo;Drop Unit&rdquo; if needed.</li>

    <li><strong>Logout Functionality</strong> &mdash; Created <b>logout.php</b> using <b>session_unset()</b> and <b>session_destroy()</b> to securely end the user session and redirect back to the login page.</li>
</ol>

<p class="section-heading">Screenshots</p>

<p class="fig-caption">Fig 1: Registration Form with Role Selection &ndash; dropdown for Student, Lecturer, and Admin</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 2: Password Hashing &ndash; users table showing securely hashed passwords in phpMyAdmin</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 3: Login System &ndash; authentication form using password_verify()</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 4: Admin Dashboard &ndash; showing &ldquo;Add Student&rdquo;, &ldquo;View Students&rdquo;, and &ldquo;Manage Units&rdquo;</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 5: Student Dashboard &ndash; showing only &ldquo;Available Units&rdquo; and &ldquo;My Registered Units&rdquo;</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 6: Available Units Page &ndash; student viewing offered units and registering</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 7: My Registered Units &ndash; student viewing enrolled units with &ldquo;Drop Unit&rdquo; option</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 8: Access Denied &ndash; student redirected when accessing restricted pages via URL</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="fig-caption">Fig 9: Logout Functionality &ndash; session destroyed and user redirected to login</p>
<div class="screenshot-box">[Insert Screenshot Here]</div>

<p class="section-heading">Reflection</p>

<p class="reflection-text">In week seven, I focused on securing the Student Portal by implementing a comprehensive Multi-User Authentication System with Role-Based Access Control (RBAC). I built a secure registration system in <b>register.php</b> that allows users to select their role and stores passwords securely using PHP&rsquo;s <b>password_hash()</b> function.</p>

<p class="reflection-text">The login system in <b>login.php</b> authenticates users by verifying credentials with <b>password_verify()</b> and establishes sessions to track the user&rsquo;s identity and role across pages. I successfully implemented dashboard segregation in <b>dashboard.php</b> where Admin and Lecturer users see student management and unit management features, while Students only see academic features such as &ldquo;Available Units&rdquo; and &ldquo;My Registered Units&rdquo;.</p>

<p class="reflection-text">I enforced strict backend security by adding session checks at the top of sensitive pages to forcibly redirect unauthorized users. I also built a complete Unit Registration system where students can browse available units, register for them, and view their enrolled units.</p>

<p class="reflection-text">The main challenge was preventing unauthorized access through direct URL manipulation and ensuring sessions correctly persisted user roles. The screenshots demonstrate the multi-role registration, protected dashboards, unit registration workflow, access restrictions, and secure logout functionality.</p>

</body>
</html>

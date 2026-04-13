<b> Attendance System </b>

A simple and efficient web-based attendance management system developed using PHP and MySQL.


 Project Overview

This application helps manage student attendance with basic functionalities such as adding students, marking attendance, and viewing records in a structured format.

Features

* Add student details
* Mark daily attendance
* View attendance records

Technology Stack

* HTML
* PHP
* MySQL
* XAMPP / WAMP

 Project Files

| File Name   | Description     |
| ----------- | --------------- |
| attend1.php | Home Page       |
| attend2.php | Add Student     |
| attend3.php | Mark Attendance |
| attend4.php | View Attendance |

Database Setup

```sql id="dbsetup01"
CREATE DATABASE college_attendance;

CREATE TABLE students (
    roll_no INT PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    att_date DATE,
    status VARCHAR(10)
);
```

 How to Run

1. Install XAMPP or WAMP
2. Place the project folder inside `htdocs`
3. Start Apache and MySQL
4. Open your browser and run:

```id="run01"
http://localhost/your-folder-name/attend1.php
```

Output

* Home page with navigation options
* Add student form
* Attendance marking interface
* Attendance report display

 Notes

* Use `college_attendance` as the database name
* Avoid spaces in the database name
* Ensure MySQL server is running

Future Enhancements

* Add login system
* Export reports to Excel or PDF
* Add search and filter functionality
* Improve UI design

 Author

Developed for academic purposes.


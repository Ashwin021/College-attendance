 𝓐𝓽𝓽𝓮𝓷𝓭𝓪𝓷𝓬𝓮 𝓢𝔂𝓼𝓽𝓮𝓶

<p align="center">
  <b>✨ A Simple & Elegant PHP + MySQL Attendance Management System ✨</b>
</p>

🌟 𝓟𝓻𝓸𝓳𝓮𝓬𝓽 𝓞𝓿𝓮𝓻𝓿𝓲𝓮𝔀

This project is a **web-based attendance system** developed using **PHP & MySQL**.
It helps manage student attendance in a simple and efficient way.

 𝓕𝓮𝓪𝓽𝓾𝓻𝓮𝓼

✨ Add Student
✨ Mark Daily Attendance
✨ View Attendance Records

 𝓣𝓮𝓬𝓱 𝓢𝓽𝓪𝓬𝓴

* 💻 HTML
* ⚙️ PHP
* 🗄️ MySQL
* 🖥️ XAMPP / WAMP

 𝓟𝓻𝓸𝓳𝓮𝓬𝓽 𝓕𝓲𝓵𝓮𝓼

| File Name   | Description     |
| ----------- | --------------- |
| attend1.php | Home Page       |
| attend2.php | Add Student     |
| attend3.php | Mark Attendance |
| attend4.php | View Attendance |

---
 𝓓𝓪𝓽𝓪𝓫𝓪𝓼𝓮 𝓢𝓮𝓽𝓾𝓹

```sql
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

𝓗𝓸𝔀 𝓽𝓸 𝓡𝓾𝓷

1. Install XAMPP/WAMP
2. Move project to `htdocs`
3. Start Apache & MySQL
4. Open browser:

```
http://localhost/your-folder-name/attend1.php
```

𝓞𝓾𝓽𝓹𝓾𝓽

✔️ Home Page
✔️ Add Student Form
✔️ Attendance Marking
✔️ Attendance Report

 𝓝𝓸𝓽𝓮

❗ Avoid spaces in DB name → use `college_attendance`
❗ Ensure MySQL is running

 𝓕𝓾𝓽𝓾𝓻𝓮 𝓔𝓷𝓱𝓪𝓷𝓬𝓮𝓶𝓮𝓷𝓽𝓼

🔐 Login System
📊 Export to Excel
🔍 Search Feature
🎨 Better UI Design

𝓐𝓾𝓽𝓱𝓸𝓻

✨ Developed for learning purposes

<p align="center">
💙 𝑻𝒉𝒂𝒏𝒌 𝒀𝒐𝒖 𝒇𝒐𝒓 𝑽𝒊𝒔𝒊𝒕𝒊𝒏𝒈 💙
</p>

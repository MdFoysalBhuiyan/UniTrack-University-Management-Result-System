# UniTrack — University Management & Result System

A simple and practical **University Result Management System** built with PHP and MySQL. The system provides an organized platform for managing students, classes, subjects, academic results, and university notices through an administrator dashboard.

## Overview

The University Management System is designed to simplify common academic management tasks. Administrators can manage student information, create and update classes and subjects, configure subject combinations, publish notices, and maintain student results from a centralized web interface.

The project uses **PHP** for server-side processing and **MySQL/MariaDB** for data storage. The frontend is built with HTML, CSS, JavaScript, Bootstrap-based styling, and supporting UI libraries.

![image_alt](https://github.com/MdFoysalBhuiyan/University-management-system/blob/df411b0ce3f731381615ed81b4cbf0aa074dbee7/images/Screenshot%202026-08-25%20160441.png)
![image_alt](https://github.com/MdFoysalBhuiyan/University-management-system/blob/df411b0ce3f731381615ed81b4cbf0aa074dbee7/images/Screenshot%202026-08-25%20173350.png)
![image_alt](https://github.com/MdFoysalBhuiyan/University-management-system/blob/df411b0ce3f731381615ed81b4cbf0aa074dbee7/images/Screenshot%202026-08-25%20162150.png)
![image_alt](https://github.com/MdFoysalBhuiyan/University-management-system/blob/df411b0ce3f731381615ed81b4cbf0aa074dbee7/images/Screenshot%202026-08-25%20160347.png)

## Key Features

* **Admin Authentication**

  * Secure administrator login
  * Password management
  * Logout functionality

* **Student Management**

  * Add new students
  * View student records
  * Edit student information
  * Manage student status

* **Class Management**

  * Create classes
  * Edit existing classes
  * Manage sections and class information

* **Subject Management**

  * Create and update subjects
  * Assign subject codes
  * Manage subjects according to classes

* **Subject Combination Management**

  * Assign subjects to specific classes
  * Enable or disable subject combinations

* **Result Management**

  * Add student results
  * Edit results
  * Search and view results
  * Display marks based on student and class information

* **Notice Management**

  * Publish academic notices
  * Edit and manage notices
  * Display notice details to users

* **Responsive Interface**

  * Clean and modern user interface
  * Responsive layout
  * Bootstrap-based styling
  * Font Awesome icons

## Technology Stack

| Technology      | Purpose                       |
| --------------- | ----------------------------- |
| PHP             | Backend development           |
| MySQL / MariaDB | Database management           |
| HTML5           | Page structure                |
| CSS3 / SCSS     | Styling                       |
| JavaScript      | Client-side functionality     |
| Bootstrap       | Responsive UI                 |
| Font Awesome    | Icons                         |
| Gulp            | Frontend development workflow |

The repository contains PHP application files, frontend assets, SCSS, JavaScript, fonts, images, and a complete SQL database dump.

## Project Structure

```text
University-management-system/
│
├── css/                       # Stylesheets
├── fonts/                     # Font resources
├── images/                    # Images and visual assets
├── includes/                  # Configuration and shared files
├── js/                        # JavaScript files
├── sass/                      # SCSS source files
│
├── index.php                  # Main website page
├── admin-login.php            # Administrator login
├── dashboard.php              # Admin dashboard
│
├── add-students.php           # Add students
├── manage-students.php        # Manage students
├── edit-student.php           # Edit student information
│
├── create-class.php           # Create classes
├── manage-classes.php         # Manage classes
├── edit-class.php             # Edit classes
│
├── create-subject.php         # Create subjects
├── manage-subjects.php        # Manage subjects
├── edit-subject.php           # Edit subjects
│
├── add-subjectcombination.php # Configure subject combinations
├── manage-subjectcombination.php
│
├── add-result.php             # Add student results
├── manage-results.php         # Manage results
├── edit-result.php            # Edit results
├── find-result.php            # Find results
├── result.php                 # Display results
│
├── add-notice.php             # Publish notices
├── manage-notices.php         # Manage notices
├── notice-details.php         # View notice details
│
├── srms.sql                   # Database schema and sample data
├── package.json               # Frontend build dependencies
└── README.md                  # Project documentation
```

## Database

The project uses a MySQL/MariaDB database named:

```text
srms
```

The included `srms.sql` file contains the database structure and sample records. The database includes tables for administrators, classes, notices, results, students, subjects, and subject combinations.

## Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/MdFoysalBhuiyan/University-management-system.git
cd University-management-system
```

### 2. Set Up a Local PHP Server

You can use any compatible local development environment, such as:

* XAMPP
* WAMP
* Laragon
* LAMP

Make sure PHP, Apache, and MySQL/MariaDB are running.

### 3. Create the Database

Open **phpMyAdmin** or your preferred MySQL client and create a database named:

```text
srms
```

Then import:

```text
srms.sql
```

The supplied database configuration also expects the database name `srms`.

### 4. Configure Database Connection

Open:

```text
includes/config.php
```

Update the database credentials according to your local environment.

Example:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'srms');
```

The repository currently uses `localhost`, `root`, an empty password, and the `srms` database by default. Change these values if your local MySQL configuration is different.

### 5. Run the Application

Start Apache and MySQL, then open the project in your browser.

For example:

```text
http://localhost/University-management-system/
```

## Admin Access

The SQL dump contains a default administrator account for the included sample database.

> **Important:** Change the default administrator credentials before using the application in a real or production environment.

## Main Modules

### Dashboard

Provides an administrative overview of the system and quick access to major management functions.

### Students

Administrators can create, update, view, and manage student records, including student name, roll number, email, gender, date of birth, class, and status.

### Classes

Classes can be created and managed with class names, numeric identifiers, and sections.

### Subjects

The system supports creating subjects with subject names and subject codes.

### Results

Student marks are associated with students, classes, and subjects, allowing administrators to add, update, and retrieve academic results.

### Notices

Administrators can publish and manage university notices, including notice titles, details, and posting dates.

## Frontend

The application includes a responsive and modern interface with a customized visual theme. The main interface uses **Plus Jakarta Sans**, Font Awesome icons, Bootstrap-based styling, and a modern indigo/purple color scheme.

## Development

The repository also includes a frontend development workflow based on **Gulp**, with packages for Sass compilation, CSS optimization, JavaScript processing, image optimization, linting, and browser synchronization.

## Security Notes

This project is intended primarily for learning and development purposes.

Before deploying it publicly, consider:

* Changing all default credentials
* Using strong administrator passwords
* Moving database credentials to secure environment configuration
* Improving password storage and authentication security
* Validating and sanitizing all user input
* Using prepared statements consistently
* Disabling detailed database errors in production
* Enabling HTTPS
* Reviewing authorization and session management

## Future Improvements

Possible improvements include:

* Role-based access control
* Student and teacher portals
* Attendance management
* Course registration
* Automated GPA/CGPA calculation
* PDF result generation
* Email notifications
* Improved authentication and password security
* REST API integration
* Deployment configuration for production environments
* Automated testing

## Contributing

Contributions are welcome.

1. Fork the repository
2. Create a new branch
3. Make your changes
4. Test the application
5. Commit your changes
6. Push the branch
7. Open a Pull Request

Please keep contributions focused, clean, and consistent with the existing project structure.

## License

This project does not currently specify a license. If you intend to distribute or reuse the project, consider adding an appropriate open-source license.

## Author

**MdFoysalBhuiyan**

GitHub:
https://github.com/MdFoysalBhuiyan

## Project Repository

[University Management System on GitHub](https://github.com/MdFoysalBhuiyan/University-management-system?utm_source=chatgpt.com)

---

**University Management System** — A simple solution for organized academic and result management.

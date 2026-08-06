# DDAS — CodeIgniter Web Application with CRUD Generator

> A web application built with CodeIgniter 3, featuring the Harviacode CRUD Generator for rapid development of CRUD operations. Includes Bootstrap 3 styling, DataTables for server-side processing, and a landing page dashboard.

<div align="center">

<img src="https://img.shields.io/badge/PHP-5.6+-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP" />
<img src="https://img.shields.io/badge/CodeIgniter-3-DD4814?style=flat-square&logo=codeigniter&logoColor=white" alt="CodeIgniter" />
<img src="https://img.shields.io/badge/Bootstrap-3-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap" />
<img src="https://img.shields.io/badge/Database-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL" />
<img src="https://img.shields.io/badge/DataTables-Server--side-FF6B6B?style=flat-square&logo=datatables&logoColor=white" alt="DataTables" />
<img src="https://img.shields.io/badge/License-MIT-22B14C?style=flat-square&logo=opensourceinitiative&logoColor=white" alt="License" />

</div>

---

## Features

| Feature | Description |
|---------|-------------|
| **CRUD Generator** | Auto-generate models, controllers, and views from database tables via Harviacode |
| **Server-side DataTables** | Efficient data rendering with pagination and search |
| **Bootstrap 3 UI** | Responsive design with dashboard and landing page templates |
| **Export Functionality** | Export data to Excel and Word |
| **Form Validation** | Built-in form validation and search capabilities |

---

## Tech Stack

| Category | Technology |
|----------|-----------|
| Backend | PHP (CodeIgniter 3) |
| Database | MySQL |
| Styling | Bootstrap 3 |
| JavaScript | jQuery + DataTables |
| Tooling | Harviacode CRUD Generator 1.4 |

---

## Installation

### Prerequisites

- PHP 5.6+
- MySQL/MariaDB
- Apache/Nginx with mod_rewrite enabled

### Setup

1. Clone the repository to your web server directory:
```bash
git clone https://github.com/rifqimulyawan/ddas.git
```

2. Configure the database in `application/config/database.php`

3. Configure the base URL in `application/config/config.php`

4. Ensure `mod_rewrite` is enabled (for clean URLs without `index.php`)

5. Visit `http://localhost/ddas` in your browser

### Using the CRUD Generator

1. Navigate to `http://localhost/ddas/harviacode`
2. Select a database table
3. Click "Generate" to create model, controller, and view files
4. Generated files are placed in `harviacode/output/`

---

## Project Structure

```
ddas/
├── application/
│   ├── config/          # Database and app configuration
│   ├── controllers/     # Application controllers
│   ├── models/          # Data models
│   ├── views/           # HTML templates
│   └── libraries/       # Custom libraries
├── assets/
│   ├── bootstrap/       # Bootstrap 3 CSS/JS
│   ├── datatables/      # DataTables plugin
│   ├── dashboard/       # Dashboard styles
│   ├── js/              # Custom JavaScript
│   └── landing/         # Landing page styles
├── harviacode/          # CRUD Generator tool
│   ├── core/            # Generator engine
│   ├── output/          # Generated files
│   └── index.php        # Generator UI
├── system/              # CodeIgniter framework
├── uploads/             # User uploaded files
├── .htaccess
└── index.php            # Application entry point
```

---

## License

This project uses CodeIgniter (MIT License) and Harviacode CRUD Generator. The application code is open source.

## Developer

**Rifqi Mulyawan** — [rifqimulyawan.com](https://rifqimulyawan.com)

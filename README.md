<div align="center">

# 🎓 Lumina University Management System

![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpinelinux&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)

</div>

A production-grade, full-stack Laravel web application engineered to demonstrate complex relational database modeling, strict Role-Based Access Control (RBAC), robust MVC architecture, decoupled RESTful API endpoints, elite dark-mode glassmorphism UI/UX design, and resilient zero-config cloud deployment architecture.

![Lumina University](https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=1200)

---

## 🔴 Live Demo
* **Web Portal:** [https://school-management-1-hqy0.onrender.com](https://school-management-1-hqy0.onrender.com)
* **API Endpoints:** `/api/students`, `/api/courses`, `/api/departments`

### 🔑 Permanent Demo Credentials for Recruiters
To evaluate the **Role-Based Access Control (RBAC)** features and highly interactive tabbed dashboard portals, please use the following permanently seeded accounts:

| Portal Role | Email | Password | Dedicated Portal Features |
| :--- | :--- | :--- | :--- |
| 🎓 **Personal Student Account** | `upv5603@gmail.com` | `password123` | Active courses, schedule timetable, digital library, clubs, financial aid |
| 🎓 **Demo Student** | `student@demo.com` | `student123` | Enrolled course schedule, academic profile card, real-time grades |
| 👨‍🏫 **Faculty Teacher** | `teacher1@demo.com` | `teacher123` | Assigned classes, attendance tracker, office hours, research grants |
| 🛡️ **System Administrator** | `admin@demo.com` | `admin123` | System metrics, user governance, curriculum orchestration, audit logs |

*(Note: There are 10 permanently seeded faculty accounts `teacher1@demo.com` through `teacher10@demo.com` and over 50 seeded students in the live directory).*

---

## 🏗️ Architectural Highlights & System Features

### 1. Normalized Relational Database Schema
Migrated from a flat legacy structure into a highly normalized, relational schema utilizing Laravel Eloquent ORM with strict foreign key constraints and cascade rules across 6 core entities:
* **Users:** Master account table extended with custom enum role identification.
* **Departments:** Academic faculties (e.g., Engineering, Computer Science, Business).
* **Courses:** Programs of study containing credit hour structures and department ownership.
* **CourseClasses:** Scheduled academic instances linking a Course, a Faculty Teacher, and a specific academic semester.
* **Enrollments:** Many-to-many pivot mapping Students to CourseClasses with active enrollment states.
* **Grades:** Final academic records tied directly to confirmed student enrollments.

### 2. Strict Role-Based Access Control (RBAC)
Engineered custom HTTP middleware (`RoleMiddleware`) that acts as an authorization fence around protected route groups. 
* **Dynamic Navigation:** Users visiting `/dashboard` are seamlessly routed to their dedicated role portals (`/admin/dashboard`, `/teacher/dashboard`, `/student/dashboard`).
* **Privilege Fencing:** Prevents horizontal and vertical privilege escalation (e.g., a student or teacher attempting to access `/add-student` is instantly rejected with an HTTP `403 Forbidden` response).

### 3. Premium Tailwind CSS & Alpine.js UI/UX
Designed a stunning, dark-themed glassmorphism landing page reflecting a modern, elite university aesthetic.
* **Live Student Directory:** Implemented a real-time, searchable, and dynamically paginated student library grid directly on the root index (`withQueryString()`).
* **Interactive Feature-Rich Portals:** Immersive tabbed portals powered by Alpine.js allowing instant switching between interactive management interfaces without page reloads.
* **Refined Micro-interactions:** Features smooth CSS hover transformations (`-translate-y-1`), backdrop blur navigation bars, single-layer glassmorphism dropdown menus, and curated dark color palettes (`bg-gray-950 text-gray-100`).

### 4. Decoupled RESTful JSON API
Equipped with clean, public RESTful API endpoints in `routes/api.php` to demonstrate backend decoupling capabilities for mobile app consumers or separate React/Vue frontends:
* `GET /api/departments` — Returns all academic departments with nested course structures.
* `GET /api/courses` — Returns all courses loaded with parent department relationships.
* `GET /api/students` — Returns paginated student directory profiles with optional query parameter filtering (`?course=CS` or `?search=Alice`).

### 5. Resilient Cloud Container Architecture
Optimized for zero-config deployment in ephemeral cloud container environments like Render, Fly.io, and Railway:
* **Automated Database Seeding:** Startup script (`start.sh`) automatically migrates and executes `db:seed --force`, ensuring default user accounts and personal profiles instantly exist upon container boot or after sleep/restart cycles.
* **Robust Registration Flow:** Custom `RegisteredUserController` instantly binds fully populated Eloquent `Student` profiles upon new signup to satisfy strict database integrity constraints.
* **SSL Load Balancer Proxying:** Fully configured `TrustProxies.php` (`$proxies = '*'`) and `config/session.php` (`SESSION_DRIVER=cookie`) to completely eliminate `419 Page Expired` CSRF errors behind SSL-terminating reverse proxies.

---

## 🧪 Automated Feature Testing
To guarantee production stability and demonstrate professional software validation best practices, the codebase includes an automated testing suite (`Tests\Feature\RoleAccessTest`).

**Test Coverage Includes:**
* `test_public_welcome_page_displays_student_directory`: Asserts public directory bindings and view rendering.
* `test_admin_can_access_admin_dashboard`: Validates authorized access to system analytics.
* `test_student_cannot_access_admin_dashboard`: Asserts that `RoleMiddleware` properly rejects unauthorized access with a `403` status.
* `test_teacher_can_access_teacher_dashboard`: Validates teacher dashboard routing.

**Run Tests via Docker:**
```bash
docker run --rm lumina-university php artisan test
```

---

## 🚀 Local Development & Setup

This repository is optimized for **Zero-Config Docker Deployment**. You do not need PHP, Composer, or web servers installed locally on your host machine.

### 1. Build the Docker Image
```bash
docker build -t lumina-university .
```

### 2. Start the Container
```bash
docker run -p 8000:80 lumina-university
```

### 3. Open in Browser
Visit **[http://localhost:8000](http://localhost:8000)** to view the application. The container automatically creates the SQLite database, generates Laravel application keys, and runs migrations and seeders on boot.

---

## ☁️ Cloud Deployment (Render / Fly.io / Railway)
The included `Dockerfile` and `start.sh` startup script are fully optimized for seamless, zero-config cloud deployments on platforms like **Render**:
1. Connect your GitHub repository as a **New Web Service**.
2. Select the **Docker** runtime environment.
3. Click **Deploy**. The container will automatically self-configure, migrate, and seed in the cloud!

---

## 📄 License

© 2026 [Utsav Vasava](https://festverse.in). All Rights Reserved.

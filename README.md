# 🎓 Lumina University Management System

A production-grade, full-stack Laravel web application engineered to demonstrate complex relational database modeling, strict Role-Based Access Control (RBAC), robust MVC architecture, decoupled RESTful API endpoints, and a premium modern UI/UX design.

![Lumina University](https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=1200)

---

## 🔴 Live Demo
* **Web Portal:** [Deploying via Render](#) *(Insert your Render URL here once live)*
* **API Endpoints:** `/api/students`, `/api/courses`, `/api/departments`

### 🔑 Quick Demo Credentials for Recruiters
To evaluate the **Role-Based Access Control (RBAC)** features and dedicated dashboard portals, please use the following seeded accounts:

| Role | Email | Password | Dashboard Features |
| :--- | :--- | :--- | :--- |
| **System Admin** | `admin@demo.com` | `admin123` | High-level analytics, User & Student CRUD, Course & Dept management |
| **Faculty Teacher** | `teacher1@demo.com` | `teacher123` | Assigned classes, student course rosters, schedule tracking |
| **Student** | `student@demo.com` | `password` | Academic profile card, enrolled course schedule, final grades |

*(Note: There are 10 seeded teachers `teacher1` through `teacher10` and over 50 seeded students in the live directory).*

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
* **Live Student Directory:** Implemented a real-time, searchable, and dynamically paginated student library grid directly on the root index.
* **Refined Micro-interactions:** Features smooth CSS hover transformations (`-translate-y-1`), backdrop blur navigation bars, and curated color palettes.

### 4. Decoupled RESTful JSON API
Equipped with clean, public RESTful API endpoints in `routes/api.php` to demonstrate backend decoupling capabilities for mobile app consumers or separate React/Vue frontends:
* `GET /api/departments` — Returns all academic departments with nested course structures.
* `GET /api/courses` — Returns all courses loaded with parent department relationships.
* `GET /api/students` — Returns paginated student directory profiles with optional query parameter filtering (`?course=CS` or `?search=Alice`).

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

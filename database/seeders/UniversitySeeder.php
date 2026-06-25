<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\Enrollment;
use App\Models\Grade;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UniversitySeeder extends Seeder
{
    public function run(): void
    {
        // Check if database is already seeded to prevent duplicate key errors
        if (User::where('email', 'admin@demo.com')->exists()) {
            return;
        }

        $faker = Faker::create();

        // 1. Create Admin
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // 2. Create Departments & Courses
        $departmentsData = [
            'Engineering' => ['Computer Science', 'Civil Engineering', 'Mechanical Engineering', 'Software Engineering'],
            'Science' => ['Physics', 'Chemistry', 'Biology', 'Mathematics'],
            'Business' => ['Accounting', 'Business Administration', 'Marketing', 'Finance'],
            'Arts' => ['History', 'Literature', 'Philosophy', 'Fine Arts'],
        ];

        $departments = [];
        $allCourses = [];

        foreach ($departmentsData as $deptName => $courseNames) {
            $dept = Department::create([
                'name' => $deptName,
                'code' => strtoupper(substr($deptName, 0, 3)) . rand(10, 99),
                'description' => $faker->paragraph,
            ]);
            $departments[] = $dept;

            foreach ($courseNames as $courseName) {
                $course = Course::create([
                    'department_id' => $dept->id,
                    'name' => $courseName,
                    'code' => strtoupper(substr(str_replace(' ', '', $courseName), 0, 4)) . rand(100, 499),
                    'credits' => rand(3, 4),
                ]);
                $allCourses[] = $course;
            }
        }

        // 3. Create Teachers
        $teachers = [];
        for ($i = 1; $i <= 10; $i++) {
            $teachers[] = User::create([
                'name' => $faker->name,
                'email' => "teacher{$i}@demo.com",
                'password' => Hash::make('teacher123'),
                'role' => 'teacher',
            ]);
        }

        // 4. Create Classes
        $classes = [];
        $semesters = ['Fall 2026', 'Spring 2027'];
        foreach ($allCourses as $course) {
            // Each course has 1-2 classes
            for ($i = 0; $i < rand(1, 2); $i++) {
                $classes[] = CourseClass::create([
                    'course_id' => $course->id,
                    'teacher_id' => $teachers[array_rand($teachers)]->id,
                    'semester' => $semesters[array_rand($semesters)],
                    'year' => 2026,
                    'schedule' => $faker->dayOfWeek . ' ' . rand(8, 15) . ':00 - ' . rand(10, 17) . ':00',
                ]);
            }
        }

        // 5. Create Students & Enrollments & Grades
        $coursesList = ['BS Computer Science', 'BS Civil Engineering', 'BS Business', 'BA Arts'];
        $statuses = ['Enrolled', 'Not Enrolled', 'Pending'];
        $genders = ['Male', 'Female'];
        
        // User's personal account (Utsav Vasava)
        $utsavUser = User::create([
            'name' => 'Utsav Vasava',
            'email' => 'utsavvasava9@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);
        
        $utsavProfile = Student::create([
            'user_id' => $utsavUser->id,
            'studentImage' => 'default.png',
            'fName' => 'Utsav',
            'mName' => 'P',
            'lName' => 'Vasava',
            'studentId' => 'LUMINA-88392',
            'email' => 'utsavvasava9@gmail.com',
            'pNumber' => '+1 (555) 382-9921',
            'course' => 'BSc in Advanced Technologies',
            'age' => 21,
            'gender' => 'Male',
            'brgy' => 'Cybernetics Quarter',
            'city' => 'Tech City',
            'province' => 'Innovation State',
            'enrolled' => 'Enrolled',
        ]);

        // Enroll Utsav in 4 random classes with stellar grades
        $utsavClasses = array_rand($classes, 4);
        foreach ($utsavClasses as $classIdx) {
            $enrollment = Enrollment::create([
                'student_id' => $utsavUser->id,
                'course_class_id' => $classes[$classIdx]->id,
                'status' => 'enrolled',
            ]);
            Grade::create([
                'enrollment_id' => $enrollment->id,
                'grade' => rand(88, 98) + (rand(0, 99) / 100),
                'remarks' => 'Dean\'s List Quality',
            ]);
        }

        // Ensure there is at least one known student account for demo
        $demoStudentUser = User::create([
            'name' => 'Demo Student',
            'email' => 'student@demo.com',
            'password' => Hash::make('student123'),
            'role' => 'student',
        ]);
        
        $demoStudentProfile = Student::create([
            'user_id' => $demoStudentUser->id,
            'studentImage' => 'default.png',
            'fName' => 'Demo',
            'mName' => 'T',
            'lName' => 'Student',
            'studentId' => 'STU-' . rand(10000, 99999),
            'email' => 'student@demo.com',
            'pNumber' => $faker->phoneNumber,
            'course' => 'BS Software Engineering',
            'age' => rand(18, 25),
            'gender' => 'Male',
            'brgy' => $faker->streetName,
            'city' => $faker->city,
            'province' => $faker->state,
            'enrolled' => 'Enrolled',
        ]);

        // Enroll demo student in 3 random classes
        $demoClasses = array_rand($classes, 3);
        foreach ($demoClasses as $classIdx) {
            Enrollment::create([
                'student_id' => $demoStudentUser->id,
                'course_class_id' => $classes[$classIdx]->id,
                'status' => 'enrolled',
            ]);
        }

        // Create 50 random students
        for ($i = 1; $i <= 50; $i++) {
            $studentUser = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'role' => 'student',
            ]);

            $gender = $genders[array_rand($genders)];
            $nameParts = explode(' ', $studentUser->name);
            $fName = $nameParts[0];
            $lName = isset($nameParts[1]) ? $nameParts[1] : 'Doe';

            Student::create([
                'user_id' => $studentUser->id,
                'studentImage' => 'default.png', // Fallback to a default
                'fName' => $fName,
                'mName' => strtoupper(substr($faker->word, 0, 1)),
                'lName' => $lName,
                'studentId' => 'STU-' . rand(10000, 99999),
                'email' => $studentUser->email,
                'pNumber' => $faker->phoneNumber,
                'course' => $coursesList[array_rand($coursesList)],
                'age' => rand(18, 25),
                'gender' => $gender,
                'brgy' => $faker->streetName,
                'city' => $faker->city,
                'province' => $faker->state,
                'enrolled' => $statuses[array_rand($statuses)],
            ]);

            // Enroll in 1-4 random classes
            $numClasses = rand(1, 4);
            $enrolledClasses = (array) array_rand($classes, $numClasses);
            
            foreach ($enrolledClasses as $classIdx) {
                $enrollment = Enrollment::create([
                    'student_id' => $studentUser->id,
                    'course_class_id' => $classes[$classIdx]->id,
                    'status' => 'enrolled',
                ]);

                // 70% chance to have a grade
                if (rand(1, 100) <= 70) {
                    Grade::create([
                        'enrollment_id' => $enrollment->id,
                        'grade' => rand(60, 100) + (rand(0, 99) / 100), // Random float between 60-100
                        'remarks' => rand(1, 100) > 80 ? 'Excellent performance' : 'Passed',
                    ]);
                }
            }
        }
    }
}

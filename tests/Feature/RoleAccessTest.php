<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;

class RoleAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_welcome_page_displays_student_directory(): void
    {
        $user = User::factory()->create(['role' => 'student']);
        Student::create([
            'user_id' => $user->id,
            'studentImage' => 'default.png',
            'fName' => 'Alice',
            'mName' => 'M',
            'lName' => 'Smith',
            'studentId' => 'STU-12345',
            'email' => 'alice@demo.com',
            'pNumber' => '1234567890',
            'course' => 'BS Computer Science',
            'age' => 20,
            'gender' => 'Female',
            'brgy' => 'Downtown',
            'city' => 'Metropolis',
            'province' => 'New York',
            'enrolled' => 'Enrolled',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Alice');
        $response->assertSee('Lumina University');
    }

    public function test_admin_can_access_admin_dashboard(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $response = $this->actingAs($admin)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Admin Dashboard');
    }

    public function test_student_cannot_access_admin_dashboard(): void
    {
        $student = User::factory()->create([
            'role' => 'student',
        ]);

        $response = $this->actingAs($student)->get('/admin/dashboard');

        $response->assertStatus(403);
    }

    public function test_teacher_can_access_teacher_dashboard(): void
    {
        $teacher = User::factory()->create([
            'role' => 'teacher',
        ]);

        $response = $this->actingAs($teacher)->get('/teacher/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Teacher Dashboard');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Level;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Course;
use App\Models\Registration;
use App\Models\ContactMessage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

       Level::factory(6)->create();

        
        $teachers = Teacher::factory(5)->create();

        
        $subjects = Subject::factory(10)->create();

        
        $students = Student::factory(20)->create();


        $courses = Course::factory(10)->create();

        Registration::factory(30)->create();

        
        ContactMessage::factory(10)->create();
    }
}

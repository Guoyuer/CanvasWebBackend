<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StuCourse;
use App\Models\Course;



class AdminController extends Controller
{
    public function addCourse()
    {
        return Course::create([
            'name' => request('name'),
            'description' => request('description'),
            'capacity' => request('capacity'),
            'teacher_id' => request('teacher_id'),
        ]);
    }
//ORM: object relation mapping
    public function updateCourse()
    {
        $course = Course::find(request('course_id'));
        $course->teacher_id = request('teacher_id');
        $course->save();
    }

    public function addStudentToCourse(){
        return StuCourse::create([
            'student_id' => request('student_id'),
            'course_id' => request('course_id'),
        ]);
    }


}

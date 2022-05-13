<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Announcement;
use App\Models\Assignments;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getAllCourse()
    {
        return Course::all();
    }
    public function getOneCourse($id)
    {
        return Course::find($id);
    }

    public function getAnnouncements($id)
    {
        return Announcement::where('course_id', $id)->get();
    }


    public function addAnnouncement()
    {
        return Announcement::create([
            'title' => request('title'),
            'content' => request('content'),
            'course_id' => request('course_id'),
        ]);
    }

    public function getAssignments($course_id)
    {
        return Assignments::where('course_id', $course_id)->get();
    }

    public function addAssignments()
    {
        return Assignments::create([
            'course_id' => request('course_id'),
            'title' => request('title'),
            'description' => request('description'),
            'due_date' => request('due_date'),
            'max_points' => request('max_points'),
        ]);
    }

}

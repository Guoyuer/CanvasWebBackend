<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Models\Announcement;
use App\Models\Assignments;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/course', [CourseController::class, 'getAllCourse']);

Route::get('/course/{id}',[CourseController::class, 'getOneCourse']);


Route::post('/course', [CourseController::class, 'addCourse']);


Route::get('/course/{id}/assignments', [CourseController::class, 'getAssignments']);

Route::get('/course/{id}/announcements', [CourseController::class, 'getAnnouncements']);

Route::post('/course/{id}/announcements', [CourseController::class, 'addAnnouncement']);



// admin
Route::post('/admin/course',[AdminController::class, 'addCourse']);
Route::put('/admin/course', [AdminController::class, 'updateCourse']);
Route::post('/admin/stu2course',[AdminController::class, 'addStudentToCourse']);

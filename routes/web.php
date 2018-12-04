<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'uses' => 'UniversityController@index',
    'as' => '/',
]);

Route::get('/about', [
    'uses' => 'UniversityController@about',
    'as' => 'about',
]);

Route::get('/courses', [
    'uses' => 'UniversityController@courses',
    'as' => 'courses',
]);

Route::get('/contract', [
    'uses' => 'UniversityController@Contract',
    'as' => 'contract',
]);

Route::get('/teacher', [
    'uses' => 'UniversityController@Contract',
    'as' => 'teacher',
]);

Auth::routes();

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],

    function () {

        Route::get('dashboard', [
            'uses' => 'DashboardController@index',
            'as' => 'dashboard',
        ]);

        Route::get('teacher/view', [
            'uses' => 'TeacherController@index',
            'as' => 'add',
        ]);

        Route::post('teacher/save', [
            'uses' => 'TeacherController@create',
            'as' => 'submitTeacher',
        ]);

        Route::get('course/view', [
            'uses' => 'CourseRelatedController@index',
            'as' => 'viewCourse',
        ]);

        Route::post('course/save', [
            'uses' => 'CourseRelatedController@store',
            'as' => 'submitCourse',
        ]);

        Route::post('Section/save', [
            'uses' => 'CourseRelatedController@sectionStore',
            'as' => 'submitSection',
        ]);

        Route::get('student/view', [
            'uses' => 'StudentController@index',
            'as' => 'viewStudent',
        ]);

        Route::post('student/save', [
            'uses' => 'StudentController@create',
            'as' => 'submitStudent',
        ]);
        Route::post('student/courseSave', [
            'uses' => 'CourseRelatedController@addCourseStudent',
            'as' => 'submitStudentCourse',
        ]);

        Route::post('teacher/teacherCourseAdd', [
            'uses' => 'CourseRelatedController@addCourseTeacher',
            'as' => 'addTeacherCourse',
        ]);
    });

Route::group(['as' => 'student.', 'prefix' => 'student', 'namespace' => 'Student', 'middleware' => ['auth', 'student']],
    function () {
        Route::get('dashboard', [
            'uses' => 'DashboardController@index',
            'as' => 'dashboard',
        ]);
        Route::get('course', [
            'uses' => 'ManagementController@index',
            'as' => 'manage',
        ]);

    });





Route::group(['as' => 'teacher.', 'prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware' => ['auth', 'teacher']],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('course',[
            'uses'=> 'ManagementController@index',
            'as'=>'manage'
        ]);

    });

<?php

namespace App\Http\Controllers\Admin;

use App\AddCourseTeacher;
use App\Course;
use App\Http\Controllers\Controller;
use App\Section;
use App\Takes;
use App\Teaches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseRelatedController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $course = Course::all();
        $section = DB::table('sections')->join('courses', 'course_id', '=', 'courses.id')->select('sections.section_name', 'courses.course_name', 'sections.semester', 'sections.year')->get();
        return view('backend.admin.teacher.course', [
            'courses' => $course,
            'sections' => $section,
        ]);

    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
//
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        $course = new Course();
        $course['course_code'] = $request['courseCode'];
        $course['course_name'] = $request['courseName'];
        $course['course_credit'] = $request['courseCredit'];
        $course->save();
        return redirect('admin/course/view')->with('message', 'course add successfully');

    }

    public function sectionStore(Request $request)
    {

        $section = new Section();
        $section['section_name'] = $request['sectionName'];
        $section['course_id'] = $request['course_id'];
        $section['semester'] = $request['semesterName'];
        $section['year'] = $request['semesterYear'];
        $section->save();

        return redirect('admin/course/view')->with('messa', 'Section add successfully');

    }

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function show($id)
    {
//
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
//
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, $id)
    {
//
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
//
    }

    public function addCourseTeacher(Request $request)
    {
        $teaches = new Teaches();
        $teaches['user_id'] = $request['user_id'];
        $teaches['course_id'] = $request['course_id'];
        $teaches['sec_id'] = $request['sec_id'];
        $teaches['year'] = $request['sec_year'];
        $teaches['semester'] = $request['sec_semester'];
        $teaches->save();
        return redirect('admin/teacher/view')->with('mess', 'Teacher course added successfully');

    }
    public function addCourseStudent(Request $request)
    {
        $takes = new Takes();
        $takes['user_id'] = $request['user_id'];
        $takes['course_id'] = $request['course_id'];
        $takes['sec_id'] = $request['sec_id'];
        $takes['year'] = $request['sec_year'];
        $takes['semester'] = $request['sec_semester'];
        $takes->save();
        return redirect('admin/student/view')->with('mess', 'Student course added successfully');
    }

}

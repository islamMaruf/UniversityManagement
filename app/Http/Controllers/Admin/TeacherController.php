<?php

namespace App\Http\Controllers\Admin;

use App\AddCourseTeacher;
use App\Course;
use App\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $section = Section::all();

        $course = DB::table('sections')
        ->join('courses','course_id','=','courses.id')
        ->select('sections.course_id','courses.course_name')->get();

        $unique_year = DB::table('sections')->distinct()->pluck('year');
        $unique_semester = DB::table('sections')->distinct()->pluck('semester');
        $user = User::all()->where("role_id",2);

        $tableView = DB::table('teaches')
        ->join('users','user_id','=','users.id')
        ->join('courses','course_id','=','courses.id')
        ->join('sections','sec_id','=','sections.id')
        ->select('users.name','users.email','sections.section_name','courses.course_name','sections.year','sections.semester')
        ->get();



         return view('backend.admin.teacher.home',[
            'users' => $user,
            'sections'=> $section,
            'courses'=> $course,
            'years' => $unique_year,
            'semesters'=> $unique_semester,
            'courseDetails' =>$tableView

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User();
        $user['name'] = $request['name'];
        $user['email'] = $request['email'];
        $user['password'] =bcrypt( $request['password']);
        $user['role_id'] = 2;
        $user->save();

        return redirect('admin/teacher/view')->with('message','teacher add successfully');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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
}

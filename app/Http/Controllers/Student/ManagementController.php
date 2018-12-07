<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $viewCourse = DB::table('takes')
            ->join('teaches', 'takes.sec_id', '=', 'teaches.sec_id')
            ->join('sections', 'takes.sec_id', '=', 'sections.id')
            ->join('courses', 'takes.course_id', '=', 'courses.id')
            ->join('users', 'takes.user_id', '=', 'users.id')
            ->select('teaches.user_id as teacher', 'sections.section_name as sectionName','sections.year','sections.semester', 'courses.course_name as courseName', 'users.name as userName', 'users.email as userEmail')->where('users.id', '=', Auth::user()->id)
            ->get();



            return view('backend.student.courses',[
            'viewCourses'=> $viewCourse]);




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
        //

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

    public function predictResult(){
        $studentMark = DB::table('students_mark')->where('student_id','=',Auth::user()->id)->get();


        return view('backend.student.predictedResult')->with('studentMark',$studentMark);

    }

}

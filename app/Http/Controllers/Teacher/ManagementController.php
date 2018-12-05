<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewCourse = DB::table('teaches')
            ->join('takes', 'teaches.sec_id', '=', 'takes.sec_id')
            ->join('sections', 'teaches.sec_id', '=', 'sections.id')
            ->join('courses', 'teaches.course_id', '=', 'courses.id')
            ->join('users', 'teaches.user_id', '=', 'users.id')
            ->select('takes.user_id as student', 'sections.section_name as sectionName', 'sections.year', 'sections.semester', 'courses.course_name as courseName', 'users.name as userName', 'users.email as userEmail')->where('users.id', '=', Auth::user()->id)
            ->get();

        return view('backend.teacher.courses', [
            'viewCourses' => $viewCourse]);

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

    public function addMark(){
        return view('backend.teacher.addCourse');
    }
}

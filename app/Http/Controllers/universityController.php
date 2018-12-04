<?php

namespace App\Http\Controllers;


class universityController extends  Controller
{



    public function index(){
        return view('front.Main.home');
    }

    public function about(){
        return view('front.About.about');
    }

    public function courses(){
        return view('front.Course.courses');
    }

    public function contract(){
        return view('front.Contract.Contract');
    }
    public function teacher(){
        return view('front.Teacher.teacher');
    }






}
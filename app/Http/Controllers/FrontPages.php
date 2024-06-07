<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        $title = "Nursery Website";
        return view('home', compact('title'));
    }

    public function about(){
        $title = "About Us";
        return view('about', compact('title'));
    }

    public function classes(){
        $title = "Classes";
        return view('classes', compact('title'));
    }

    public function contact(){
        $title = "Contact Us";
        return view('contact', compact('title'));
    }

    public function facility(){
        $title = "Facilities";
        return view('facility', compact('title'));
    }

    public function error(){
        $title = "404 Error";
        return view('error', compact('title'));
    }

    public function appointment(){
        $title = "Appointment";
        return view('appointment', compact('title'));
    }

    public function callToAction(){
        $title = "Become A Teachers";
        return view('callToAction', compact('title'));
    }

    public function team(){
        $title = "Teachers";
        return view('team', compact('title'));
    }

    public function testimonial(){
        $title = "Testimonial";
        return view('testimonial', compact('title'));
    }
}

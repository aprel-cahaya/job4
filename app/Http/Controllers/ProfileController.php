<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile =[
            'name' => 'Aprilia Cahaya',
            'email'  => 'apreliacahaya@gmail.com',
            'bio'  => 'Backburner',
            'profile_picture'  => 'pp.jpg',
            'skills'  => ['mukbang', 'masak', 'healing']
        ];
        return view ('profile', compact('profile'));
    }
}

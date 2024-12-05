<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    // Маршрут з параметром
    public function show($name)
    {
        return view('user.welcome', ['name' => $name]);
    }
    // Перша захищена сторінка
    public function page1()
    {
        return view('protected.page1');
    }

    // Друга захищена сторінка
    public function page2()
    {
        return view('protected.page2');
    }
}

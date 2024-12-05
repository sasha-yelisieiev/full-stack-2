<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class RedirectController extends Controller
{

    public function __invoke(): RedirectResponse
    {
        // Виконання редіректу на сайт YouTube
        return redirect('https://www.youtube.com');
    }
}

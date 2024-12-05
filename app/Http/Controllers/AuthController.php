<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Показуємо форму логіну
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Логін користувача
    public function login(Request $request)
    {
        // Валідація даних
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Спроба авторизації
        if (Auth::attempt($credentials)) {
            // Перенаправлення на захищену сторінку
            return redirect()->intended('/page1');  // Захищена сторінка
        }

        // Якщо логін не вдався
        return back()->withErrors([
            'email' => 'Невірний email або пароль.',
        ]);
    }

    // Вихід користувача
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

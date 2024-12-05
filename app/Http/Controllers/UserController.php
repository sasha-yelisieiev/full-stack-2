<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Додати нового користувача
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    // Отримати всіх користувачів
    public function index()
    {
        $users = User::all();

        // Приклад використання методів колекцій
        // Отримати лише унікальні email
        $uniqueEmails = $users->pluck('email')->unique();

        // Вибрати лише ім'я та email
        $usersWithOnlyNameAndEmail = $users->map(function ($user) {
            return $user->only(['name', 'email']);
        });

        return view('user.index', compact('users', 'uniqueEmails', 'usersWithOnlyNameAndEmail')); // зміна на правильний шлях
    }

    // Оновити користувача
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->update(['name' => $request->name]);

        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    // Видалити користувача
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        
        $email = $data['email'];
        $password = $data['password'];

        // Buscar el usuario por email en la base de datos
        $user = User::where('email', $email)->first();

        // Verificar si el usuario existe y la contraseña coincide
        if ($user && $password === $user->password) {
            return response()->json([
                'user' => $user,
                'token' => $user->createToken('token')->plainTextToken,
            ]);
        } else {
            return response()->json(['error' => 'El email o la contraseña son incorrectos'], 401);
        }
    }
    public function logout(Request $request)
    {
        //Auth::logout();
        //return response()->json(['message' => 'Sesión cerrada correctamente']);
        
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return [
            'user' => null
        ];
    }
}

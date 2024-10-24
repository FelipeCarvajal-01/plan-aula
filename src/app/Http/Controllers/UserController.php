<?php

namespace App\Http\Controllers;

use App;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\models\rol;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Rol::orderBy('id')->get();
        return view('user.user', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|max:255',
            'phone' => 'required|string|max:10',
            'id_rol' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'phone' => $request->input('phone'),
            'id_rol' => $request->input('id_rol'),
        ]);
        return response()->json(['success' => true, 'message' => 'Usuario creado'], 200);
    }
}

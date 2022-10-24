<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'surname' => $fields['surname'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return ['message' => 'Logged out'];
    }


    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();


        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Incorrect credentials'
            ], 401);    
        }

        $token = $user->createToken('apiToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


    // Admin options
    public function user(Request $request){
        return $request->user();
    }

    public function getUsers(){
        return response()->json(User::all(), 200);
    }

    public function getUser($id){
        $user = User::findOrFail($id);
        if (is_null($user)) { return response()->json(['message' => 'User not found'], 404); }
        $user->password = '';
        return response()->json($user, 200);
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        if (is_null($user)) { return response()->json(['message' => 'User not found'], 404); }
        
        $user->delete();
        return response()->json(['message' => 'User deleted'], 204);
    }

    public function addUser(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'surname' => $fields['surname'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $user->createToken('apiToken')->plainTextToken;

        return response()->json(['message' => 'User added'], 200);
    }

    public function editUser(Request $request, $id){
        $user = User::findOrFail($id);
        if (is_null($user)) { return response()->json(['message' => 'User not found'], 404); }
        
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        if (($request->password != $user->password) && ($request->password != null)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return response()->json($user, 200);
    }

}

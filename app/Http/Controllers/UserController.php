<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index() {
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        // UserModel::insert($data);
        UserModel::where('username', 'customer-1')->update($data);
        $user = UserModel::all();
        return view ('user', ['data' => $user]);
    }
}

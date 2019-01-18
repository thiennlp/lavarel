<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {

    public function index() {
        $user  = new User();
        $users = $user->get();
        return view('admin.user', ['users' => $users]);
    }

    public function save(Request $request) {
        $user             = new User();
        $user->user_id    = time();
        $user->type       = 1;
        $user->name       = $request->input('name');
        $user->user       = $request->input('user');
        $user->password   = $request->input('password');
        $user->email      = $request->input('email');
        $user->created_by = '333';
        $user->updated_by = '333';
        $user->save();
        return redirect('/admin/user');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class UserController extends Controller {

    public function index() {
        $user  = new User();
        $users = $user->get();
        return view('admin.user', ['users' => $users]);
    }

    public function getForm($id = "") {
        if (!empty($id)) {
            $userModel = new User();
            $user      = $userModel->where('user_id', $id)->get()->first();
            return view('admin.user.edit', ['user' => $user]);
        }
        return view('admin.user.new');
    }

    public function save(Request $request, $id = "") {
        $validator = Validator::make($request->all(), [
                    'type'     => 'required',
                    'name'     => 'required|unique:user|max:300',
                    'user'     => 'required|unique:user',
                    'password' => 'required',
                    'email'    => 'required|unique:user',
        ]);


        $user = new User();
        if (!empty($id)) {
            if ($validator->fails()) {
                return redirect('admin/user/edit' . '/' . $id)->withErrors($validator)->withInput();
            }
            $user->where('user_id', $id)->update([
                'type'     => $request->input('type'),
                'name'     => $request->input('name'),
                'user'     => $request->input('user'),
                'password' => $request->input('password'),
                'email'    => $request->input('email'),
            ]);
        } else {
            if ($validator->fails()) {
//                return redirect('admin/user/new')->withErrors($validator)->withInput();
                return back()->withErrors($validator)->withInput();
            }
            $user->user_id    = time();
            $user->type       = $request->input('type');
            $user->name       = $request->input('name');
            $user->user       = $request->input('user');
            $user->password   = $request->input('password');
            $user->email      = $request->input('email');
            $user->created_by = '333';
            $user->updated_by = '333';
            $user->save();
        }
        return redirect('/admin/user');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get()->keyBy('id');

        $result = [];
        foreach ($users as $user) {
            $result[] = [
                'id' => $user->id,
                'type' => $user->type,
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email,
                'updated_by' => isset($users[$user->updated_by]->name) ? $users[$user->updated_by]->name : '', 
                'created_by' => isset($users[$user->created_by]->name) ? $users[$user->created_by]->name : '',
                'updated_at' => $user->updated_at,
                'created_at' => $user->created_at,
                'status' => $user->status, 
            ];
        }

        return view('user.index', ['users' => $result]);
    }

    /**
     * Get form new/edit for user
     *
     * @return view
     */
    public function getForm($id = "") {
        if (!empty($id)) {
            $user = User::where('id', $id)->get()->first();
            return view('user.edit', ['user' => $user]);
        }
    }

    /**
     * Save data form new/edit for user
     *
     * @return view
     */
    public function save(Request $request , $id = "") {
        if (!empty($id)) {
            User::where('id', $id)->update([
                'type' => $request->type,
                'name' => $request->name,
                'status' => $request->status,
            ]);
            return redirect()->route('user');
        }

    }


}

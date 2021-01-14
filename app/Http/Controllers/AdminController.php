<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use PhpOption\None;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{

    public function admin()
    {
    	$admins = User::where('role',1)->get();

        return view('admin/admin', compact('admins'));
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'=> ['required', 'string', 'max:255','regex:/^[a-zA-Z ]+$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'min:10', 'string'],
            'birth_date' => ['required', 'date', 'max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function add_admin(Request $request ){
            $this->validator($request->all())->validate();
            $admin = new User();
            $admin->name = $request->get('name');
            $admin->email = $request->get('email');
            $admin->phone = $request->get('phone');
            $admin->birth_date = $request->get('birth_date');
            $admin->role = 1;
            $admin->password =Hash::make($request->get('password'));
            $admin->save();
            return back();

    }
    protected function update_validator(array $data,  $id)
    {
        return Validator::make($data, [
            'name'=> ['required', 'string', 'max:255','regex:/^[a-zA-Z ]+$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. $id .',id'],
            'phone' => ['required', 'min:10', 'string'],
            'birth_date' => ['required', 'date', 'max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function edit_admin($admin_id){

        $admins = User::where('role',1)->get();
        $admin = User::find($admin_id);
        return view('admin/admin',compact('admins','admin'));
    }
    public function update_admin(Request $request,$admin_id){

        $this->update_validator($request->all(), $admin_id)->validate();

        $admin = User::find($admin_id);
        $admin->name = $request->get('name');
        $admin->email = $request->get('email');
        $admin->phone = $request->get('phone');
        $admin->birth_date = $request->get('birth_date');
        $admin->role = 1;
        $admin->password =Hash::make($request->get('password'));
        $admin->save();
        return redirect()->route('admin');
    }
    public function delet_admin($admin_id){
        $admin = User::find($admin_id);
        $admin->delete();
        return back();
    }

}

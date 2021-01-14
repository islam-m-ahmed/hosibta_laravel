<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function user()
    {
    	$users = User::where('role',0)->get();

        return view('admin/user', compact('users'));
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
    public function add_user(Request $request){
        $this->validator($request->all())->validate();

        $doctor = new User();
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->birth_date = $request->get('birth_date');
        // $doctor->depart = $request->get('select');
        $doctor->role = 0;
        $doctor->password =Hash::make($request->get('password'));

        $doctor->save();
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
    public function edit_user($user_id){

        $users = User::where('role',0)->get();
        $doctor = User::find($user_id);
        return view('admin/user',compact('users','doctor'));
    }
    public function update_user(Request $request,$user_id){

        $this->update_validator($request->all(), $user_id)->validate();

        $doctor = User::find($user_id);
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->birth_date = $request->get('birth_date');
        // $doctor->depart = $request->get('select');
        $doctor->role = 0;
        $doctor->password =Hash::make($request->get('password'));

        $doctor->save();
        return redirect()->route('user');
    }
    public function delet_user($user_id){
        $doctor = User::find($user_id);
        $doctor->delete();
        return back();
    }
}

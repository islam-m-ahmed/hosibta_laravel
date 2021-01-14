<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function doctor()
    {
    	$doctors = User::where('role',2)->get();

        return view('admin/doctor', compact('doctors'));
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
    public function add_doctor(Request $request){
        $this->validator($request->all())->validate();
        $doctor = new User();
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->birth_date = $request->get('birth_date');
        $doctor->depart = $request->get('select');
        $doctor->role = 2;
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

    public function edit_doctor($doctor_id){

        $doctors = User::where('role',2)->get();
        $doctor = User::find($doctor_id);
        return view('admin/doctor',compact('doctors','doctor'));
    }
    public function update_doctor(Request $request,$doctor_id){

        $this->update_validator($request->all(), $doctor_id)->validate();

        $doctor = User::find($doctor_id);
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->birth_date = $request->get('birth_date');
        $doctor->depart = $request->get('select');
        $doctor->role = 2;
        $doctor->password =Hash::make($request->get('password'));
        $doctor->save();
        return redirect()->route('doctor');
    }
    public function delet_doctor($doctor_id){
        $doctor = User::find($doctor_id);
        $doctor->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class BooksController extends Controller
{
    public function books($depart)
    {
        $books =book::all();
        //doctor
        $doctors = User::where('role',2)->where('depart',$depart)->get();
        return view('admin/books', compact('books', 'doctors', 'depart'));
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'=> ['required', 'string', 'max:255','regex:/^[a-zA-Z ]+$/u'],
            'phone' => ['required', 'min:10', 'string'],
            'birth_date' => ['required', 'date', 'max:10'],
            'date' => ['required', 'date', 'max:10'],
            'address'=> ['required', 'string', 'max:255'],

        ]);
    }
    public function add_book(Request $request){
        $this->validator($request->all())->validate();

        $book = new book();
        $book->name = $request->get('name');
        $book->phone = $request->get('phone');
        $book->birth_date = $request->get('birth_date');
        $book->date = $request->get('date');
        $book->address = $request->get('address');
        $book->doctor_id = $request->get('select');
        $book->users_id = Auth::id();
        $book->save();
        return back();

    }
    public function edit_book($book_id , $depart){

        $books =book::all();
        $book = book::find($book_id );
        $doctors = User::where('role',2)->where('depart',$depart)->get();
        return view('admin/books', compact('books', 'book', 'doctors','depart'));
    }
    public function update_book(Request $request,$book_id ,$depart){

        $this->validator($request->all())->validate();

        $book = book::find($book_id);
        $book->name = $request->get('name');
        $book->phone = $request->get('phone');
        $book->birth_date = $request->get('birth_date');
        $book->date = $request->get('date');
        $book->address = $request->get('address');
        $book->doctor_id = $request->get('select');
        $book->users_id = Auth::id();
        $book->save();
        return redirect()->route('books' , $depart);
    }
    public function delet_book($book_id){
        $book = book::find($book_id);
        $book->delete();
        return back();
    }
}

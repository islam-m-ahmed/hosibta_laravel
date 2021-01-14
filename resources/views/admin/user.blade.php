

@extends('layout.all_admin')

@section('content')

			<!-- Page Content  -->
	<div id="content" class="p-4 p-md-5">
        @if (isset($doctor))
        <h2>update user</h2>
        @else
        <h2>users</h2>
        @endif


    <div class="container">
         @if (isset($doctor))
        <form class="name1 pb-5" id="doctor" action="{{route('update_user', $doctor->id)}}" method="post" >
        @else
        <form class="name1 pb-5" id="doctor" action="{{route('add_user')}}" method="post" >
        @endif
         @csrf
                        <div> <label >name</label >

                            <input type="text" required name="name" autocomplete="off"
                            @error('name')  value="{{ old('name') }}" @elseif(isset($doctor)) value="{{$doctor->name}}"   @enderror>

                        @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <label>email</label>
                            <input type="email" name='email'required autocomplete="off"
                            @error('email')  value="{{ old('email') }}" @elseif(isset($doctor)) value="{{$doctor->email}}"   @enderror>
                            @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            <label>phone</label>
                            <input type="number" name='phone' required autocomplete="off"
                            @error('phone')  value="{{ old('phone') }}" @elseif(isset($doctor)) value="{{$doctor->phone}}"   @enderror>
                            @error('phone')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label>birth date</label>
                            <input type="date" name="birth_date" required
                            @error('birth_date')  value="{{ old('birth_date') }}" @elseif(isset($doctor)) value="{{$doctor->birth_date}}"   @enderror>
                            @error('birth_date')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        {{-- <label>depart</label>
                         <select name="select">
                        <option value="0">child</option>
                        <option value="1">men</option>
                        <option value="2">woman</option>

                        </select> --}}
                    {{-- <select name="select" id="select" class="form-control">
                                                                <option value="0">user</option>
                                                                <option value="1">Admin</option>
                                                        </select> --}}
                        <label>password</label>
                        <input type="password" required name='password'>
                        @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                        <label>confirm password</label>
                        <input type="password" required  name="password_confirmation">


        @if (isset($doctor))
        <input type="submit" value="update">
        @else
         <input type="submit" value="submit">
        @endif
                    </div>
                    </form>
    <div class="table-responsive">
	<table class="table table-dark table-hover">

	  <thead>
		<tr>
		  <th>number</th>
		  <th>name </th>
          <th> email</th>
          <th> phone</th>
          <th> birth</th>
          {{-- <th> depart</th> --}}
		  <th>edit</th>
		  <th>delete</th>

		</tr>
	  </thead>
	  <tbody>
          @foreach ($users as $user)
		<tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->birth_date}}</td>
            {{-- <td>
                        @if($user->depart == 0)
                           <h6>child</h6>
                       @elseif($user->depart == 1)
                           <h6>men</h6>
                           @elseif($user->depart == 2)
                           <h6>woman</h6>
                       @endif
          </td> --}}


          <td><a href="{{route('edit_user',$user->id)}}"><div class="bg-primary p-1 btn"value="edit">edit</div></a></td>
          <td><a href="{{route('delet_user',$user->id)}}"><div class="bg-danger p-1 btn"value="remove">remove</div></a></td>

        </tr>
        @endforeach
		{{-- @foreach($product->product_colors as $color)
            {{$color->color->name_en}}
            @endforeach --}}
            {{--  <td>
                    <div class="table-data__info">
                            @if($user->role == 0)
                                <h6>user</h6>
                            @elseif($user->role == 1)
                                <h6>admin</h6>
                            @endif
                    </div>
            </td> --}}
	  </tbody>

    </table>
</div>


  </div>
		</div>
    </div>

    @endsection

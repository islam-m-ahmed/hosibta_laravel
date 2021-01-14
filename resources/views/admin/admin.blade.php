
@extends('layout.all_admin')

@section('content')

			<!-- Page Content  -->
	<div id="content" class="p-4 p-md-5">

        @if (isset($admin))
        <h2>update admin</h2>
        @else
        <h2>admin</h2>
        @endif


    <div class="container">
        @if (isset($admin))
        <form class="name1 pb-5" id="doctor" action="{{route('update_admin', $admin->id)}}" method="post" >
        @else
        <form class="name1 pb-5" id="doctor" action="{{route('add_admin')}}" method="post" >
        @endif
        @csrf
        <div>
        <label >name</label >

        <input type="text" required name="name" autocomplete="off"
        @error('name')  value="{{ old('name') }}" @elseif(isset($admin)) value="{{$admin->name}}"   @enderror>

        @error('name')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror

        <label>email</label>
        <input type="email" name='email'required autocomplete="off"
        @error('email')  value="{{ old('email') }}" @elseif(isset($admin)) value="{{$admin->email}}"   @enderror>
        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
        <label>phone</label>
        <input type="number" name='phone' required autocomplete="off"
        @error('phone')  value="{{ old('phone') }}" @elseif(isset($admin)) value="{{$admin->phone}}"   @enderror>
        @error('phone')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label>birth date</label>
        <input type="date" name="birth_date" required
        @error('birth_date')  value="{{ old('birth_date') }}" @elseif(isset($admin)) value="{{$admin->birth_date}}"   @enderror>
        @error('birth_date')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label>password</label>
        <input type="password" required name='password'>
        @error('password')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
     @enderror
        <label>confirm password</label>
        <input type="password" required  name="password_confirmation" >

        @if (isset($admin))
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
		  <th>edit</th>
		  <th>delete</th>

		</tr>
	  </thead>
	  <tbody>

    @foreach($admins as $admin)
		<tr>
		  <td>{{$loop->iteration}}</td>
		  <td>{{$admin->name}}</td>
          <td>{{$admin->email}}</td>
          <td>{{$admin->phone}}</td>
          <td>{{$admin->birth_date}}</td>
          {{-- <button class="bg-primary p-1 "href="{{route('edit_admin',$admin->id)}}" value="edit">edit</button> --}}
		  <td><a href="{{route('edit_admin',$admin->id)}}"><div class="bg-primary p-1 btn"value="edit">edit</div></a></td>
          <td><a href="{{route('delet_admin',$admin->id)}}"><div class="bg-danger p-1 btn"value="remove">remove</div></a></td>
        </tr>
        @endforeach
	  </tbody>

  </table>
</div>


  </div>
		</div>
	</div>
    @endsection


@extends('layout.all_admin')

@section('content')

			<!-- Page Content  -->
	<div id="content" class="p-4 p-md-5">

        @if (isset($book))
        <h2>update book</h2>
        @else
        <h2>book now</h2>
        @endif


    <div class="container"> @if (isset($book))
        <form class="name1 pb-5" id="doctor" action="{{route('update_book', ['id'=>$book->id,'depart'=>$depart])}}" method="post" >
        @else
        <form class="name1 pb-5" id="doctor" action="{{route('add_book')}}" method="post" >
        @endif
         @csrf
        <div>
        <label >name</label >
        <input type="text" name="name" required autocomplete="off"
        @error('name')  value="{{ old('name') }}" @elseif(isset($book)) value="{{$book->name}}"   @enderror>
        @error('name')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
        <label>phone</label>
        <input type="number" name="phone" required autocomplete="off"
        @error('phone')  value="{{ old('phone') }}" @elseif(isset($book)) value="{{$book->phone}}"   @enderror>
        @error('phone')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label>birth date</label>
        <input type="date" name="birth_date" required autocomplete="off"
        @error('birth_date')  value="{{ old('birth_date') }}" @elseif(isset($book)) value="{{$book->birth_date}}"   @enderror>
        @error('birth_date')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label>date</label>
        <input type="date" name="date" required
        @error('date')  value="{{ old('date') }}" @elseif(isset($book)) value="{{$book->date}}"   @enderror>
        @error('date')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label>address</label>
        <input type="text" name="address" required
        @error('address')  value="{{ old('address') }}" @elseif(isset($book)) value="{{$book->address}}"   @enderror>
        @error('address')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label>doctor</label>
        <select name="select">
            @foreach ($doctors as $doctor)
            @if(isset($book))
                @if ($doctor->id == $book->doctor_id)
                <option  selected value="{{$doctor->id}}">{{$doctor->name}} </option>
                @else
                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                @endif
            @else
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endif
            @endforeach

        </select>

        @if (isset($book))
        <input type="submit" value="update">
        @else
         <input type="submit" value="submit">
        @endif
    </div>
    </form>
    @if(Auth::check() && Auth::user()->role >= 1)
     <div class="table-responsive">
	<table class="table table-dark table-hover">

	  <thead>
		<tr>
		  <th>number</th>
          <th> name</th>
          <th> phone</th>
          <th>birth date</th>
          <th> date</th>
          <th> adress</th>
          <th> doctor</th>
		  <th>edit</th>
		  <th>delete</th>

		</tr>
	  </thead>
	  <tbody>

        @foreach ($books as $book)


		<tr>
		  <td>{{$loop->iteration}}</td>
		  <td>{{$book->name}}</td>
          <td>{{$book->phone}}</td>
		  <td>{{$book->birth_date}}</td>
          <td>{{$book->date}}</td>
          <td>{{$book->address}}</td>

            {{-- @foreach ($doctors as $doctor) --}}
            <td>    {{$book->doctor->name}}</td>
            {{-- @endforeach --}}

{{-- ['event'=>$eventId,'user'=>$userId] --}}
        <td><a href="{{route('edit_book',['id'=>$book->id,'depart'=>$depart])}}"><div class="bg-primary p-1 btn"value="edit">edit</div></a></td>
        <td><a href="{{route('delet_book',$book->id)}}"><div class="bg-danger p-1 btn"value="remove">remove</div></a></td>
       </tr>
        @endforeach
	  </tbody>

	</table>
    </div>
    @endif


  </div>
		</div>
    </div>

    @endsection

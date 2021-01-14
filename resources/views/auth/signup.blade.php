
@extends('layout.all_user')

@section('content')

        <!-- Sign In & Sign Up -->

        <div class="sign-in-up sign-up mt-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex">
                        <a href="{{route('login')}}" class="text-decoration-none">
                            <div class="tab-1 tab  pb-2 mb-5 ml-4"> Sign in</div>
                        </a>

                        <a href="{{route('register')}}" class="text-decoration-none">
                            <div class="tab-2 tab active-tab pb-2 mb-5">sign up</div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <!-- انشاء حساب جديد -->
                        <form class="form-1 relative-form d-block" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div>
                            <div class="box-input w-100 mb-3">

                                <div class="line"></div>
                                <input type="text" placeholder="name" name="name" value="{{ old('name') }}"  required>

                            </div>

                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror

                            <div class="box-input w-100 mb-3">

                                <div class="line"></div>
                                <input type="email" placeholder=" email"value="{{ old('email') }}" name="email"  required>

                            </div>

                            @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="box-input w-100 mb-3">

                                <div class="line"></div>
                                <input type="tel" placeholder=" phone"value="{{ old('phone') }}" name="phone"  required>

                            </div>
                            @error('phone')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                            <div class="box-input w-100 mb-3">

                                <div class="line"></div>
                                <input type="date"  placeholder=" date" value="{{ old('birth_date') }}" name="birth_date">


                            </div>
                            @error('birth_date')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                            <div class="box-input box-input-2 w-100 mb-3">

                                <div class="line"></div>
                                <input class="change" type="password"  name="password" placeholder="password " maxlength="30" required>



                            </div>
                            @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                             <div class="box-input box-input-2 w-100 mb-3">

                                <div class="line"></div>
                                <input class="change" type="password" name="password_confirmation" placeholder="confirm password " maxlength="30" required>

                            </div>

                            <input class="submit mb-4" type="submit" value=" sign in">

                            <div class="text text-center">
                                  do you have anthor account <a class="mr-2" href="{{route('login')}}"> sign in</a>
                            </div>
                        </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>

        <!-- Sign In & Sign Up -->
        @endsection

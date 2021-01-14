
@extends('layout.all_user')

@section('content')


        <!-- ======================================================================= -->

        <!-- Sign In & Sign Up -->

        <div class="sign-in-up mt-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex">
                        <a href="{{route('login')}}" class="text-decoration-none">
                            <div class="tab-1 tab active-tab pb-2 mb-5 ml-4"> Sign in</div>
                        </a>

                        <a href="{{route('register')}}" class="text-decoration-none">
                            <div class="tab-2 tab pb-2 mb-5">sign up</div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <!-- تسجيل الدخول -->
                        <form class="form-1 relative-form d-block" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                            <label class="pr-3" for="">email </label>
                            <div class="box-input w-100">

                                <div class="line"></div>
                                <input type="email" required name="email"value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="pr-3" for="">password </label>
                            <div class="box-input box-input-2 w-100">

                                <div class="line"></div>
                                <input class="change" type="password" maxlength="30" required  name="password">
                                <i class="bx bx-hide hide active-i"></i>
                                <i class='bx bx-show-alt visible'></i>
                            </div>
                            @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input class="pl-3 mb-5  mr-2 text-left" type="checkbox"{{ old('remember') ? 'checked' : '' }} name="remember">
                            <label  class="pr-3" for="">remmber me</label>
                            <input class="submit mb-4" type="submit" value="sign in">
                            <div class="text text-center">
                                do you have anthor account <a class="mr-2" href="{{route('register')}}"> sign up</a>
                          </div>
                        </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <!-- Sign In & Sign Up -->
        @endsection

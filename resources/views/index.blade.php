

@extends('layout.all_user')

@section('content')


    <!-- start cover -->

            <div class="section">



                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                        <img src=" {{ asset('assets/gallery/img (4).jpg') }}" alt="Los Angeles" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                        <img src=" {{ asset('assets/gallery/img (5).jpg') }}" alt="Chicago" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                        <img src=" {{ asset('assets/gallery/img (6).jpg') }}" alt="New York" width="1100" height="500">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <div class="container">
                    <div class="header_content">
                        <h2>A free hospital page </h2>
                        <br>
                        <p>lorem ipsum dolor sit amet,
                        consectetur adipisicing elite lorem ipsum dolor sit ametlorem ipsum dolor sit amet,consectetur adipisicing elitelorem ipsum dolor sit amet
                        </p>


                        <br>
                        <button><a href="#about-us" class="text-decoration-none">Learn More</a> </button>
                        <button><a href="#" class="text-decoration-none" >Reqest Invite</a> </button>

                    </div>
                    <div class="header_footer">
                        <div class="scroll">

                        </div>

                    </div>
                </div>

                </div>

            <!-- nav tab pills -->
            <!-- about us -->
            <section class="about-us" id="about-us">
                <div class="container">

                    <h1 class="display-2 ">About Us</h1>
                    <span>
                         Lorem ipsum dolor, sit amet consectetur adipisicing elit.<span class="samll"> Autem a et eaque, sapiente laudantium doloremque
                        nisi repudiandae accusantium, eum quam laboriosam iste soluta veritatis non blanditiis deserunt, fugiat voluptates odit.</span>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem a et eaque, sapiente laudantium doloremque
                       </span>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-thumbnail" src="{{ asset('assets/img/item1.jpg') }}"alt="image">
                           <div class="info">
                            <h2>children</h2>
                            <p>
                                 Lorem ipsum dolor, sapiente laudantium doloremque<span class="prag">
                                nisi repudiandae accusantium, eum quam laboriosam iste soluta veritatis non blanditiis deserunt, </span>fugiat voluptates odit.
                            </p>

                            {{-- <a href="{{route('details',$product->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="{{asset($product->main_image)}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a> --}}
                            {{-- @if(Auth::check()) --}}
                           <a href="{{route('books', '0')}}" class="text-decoration-none"><span class="btn-primary d-block p-1">Book now</span></a>
                            {{-- @else
                           <a href="{{route('login')}}" class="text-decoration-none"><span class="btn-primary d-block p-1">Book now</span></a>
                            @endif --}}
                        </div>



                        </div>
                        <div class="col-sm-4">
                            <img class="img-thumbnail" src="{{ asset('assets/img/item2.jpg') }}"alt="image">
                            <div class="info">
                                <h2>women</h2>
                                <p>
                                    Lorem ipsum dolor, sapiente laudantium doloremque<span class="prag">
                                   nisi repudiandae accusantium, eum quam laboriosam iste soluta veritatis non blanditiis deserunt, </span>fugiat voluptates odit.
                               </p>
                               {{-- @if(Auth::check()) --}}
                               <a href="{{route('books', '2')}}" class="text-decoration-none"><span class="btn-primary d-block p-1">Book now</span></a>
                                {{-- @else
                               <a href="{{route('login')}}" class="text-decoration-none"><span class="btn-primary d-block p-1">Book now</span></a>
                                @endif --}}
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <img class="img-thumbnail"src="{{ asset('assets/img/item3.jpg') }}" alt="image">
                            <div class="info">
                                <h2>men</h2>
                                <p>
                                    Lorem ipsum dolor, sapiente laudantium doloremque<span class="prag">
                                   nisi repudiandae accusantium, eum quam laboriosam iste soluta veritatis non blanditiis deserunt, </span>fugiat voluptates odit.
                               </p>
                               {{-- @if(Auth::check()) --}}
                               <a href="{{route('books', '1')}}" class="text-decoration-none"><span class="btn-primary d-block p-1">Book now</span></a>
                                {{-- @else
                               <a href="{{route('login')}}" class="text-decoration-none"><span class="btn-primary d-block p-1">Book now</span></a>
                                @endif --}}
                            </div>
                        </div>

                    </div>
                </section>
                </div>
            <!-- about us -->
            <!-- our team -->

        <!--start testmenia -->
        <div class="testimonials block" id="testimonials">

            <div class="container">
                    <h2>testim<span>onials</span></h2>
                <div class="ts-box">
                <p>we are professional devolopment, and i am software engineering
                    we are  devolopment, and i am software engineering
                </p>
                        <div class="person-info">
                        <img src="{{ asset('assets/icon/icon(13).jpg') }}">
                        <h3>ahmed gomma</h3>
                        <p>CEO At company</p>
                        </div>

                </div>
                <div class="ts-box">
                    <p>we are professional devolopment, and i am software engineering
                        we are  devolpment, and i am software endineering
                    </p>
                        <div class="person-info">
                                <img src="{{ asset('assets/icon/icon(13).jpg') }}">
                                <h3>abdo ahmed</h3>
                                <p>CEO At company</p>

                        </div>

                </div>
                <div class="ts-box">
                    <p>we are professional devolopment, and i am software engineering
                        we are  devolpment, and i am software endineering
                    </p>
                    <div class="person-info">
                        <img src="{{ asset('assets/icon/icon(13).jpg') }}">
                        <h3>youssef khaled</h3>
                        <p>CEO At company</p>
                        </div>

                </div>

            </div>
            <div class="clear-fix"></div>
        </div>


            <!--start contact -->
        <div class="contact" id="contact-us">


            <div class="overlay"></div>
            <div class="container">

                <h2>Contact Us</h2>
                <form action="">
                    <div class="left">
                        <input type="text" placeholder="Your Name" name="username" autocomplete="off" required>
                        <input type="text" placeholder="Your Phone" name="phone" autocomplete="off" required>
                        <input type="email" placeholder="Your Email" name="email" autocomplete="off" required>
                        <input type="text" placeholder="Subject" name="subject">
                    </div>
                    <div class="right">
                        <textarea name="message" placeholder="Message"></textarea>
                        <input type="submit" value="send">


                    </div>
                </form>



            </div>
        </div>

        <!--end contact -->
        @endsection

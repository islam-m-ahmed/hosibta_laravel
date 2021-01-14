 <!--footer section-->
 <section class="footer">
    <div class="container">
        <div class="left">
            <span>Connect with us on</span>
            <img src="{{ asset('assets/icon/facebook.png') }}">
            <img src="{{ asset('assets/icon/twitter.png') }}">
            <img src="{{ asset('assets/icon/Yahoo.png') }}">
            <img src="{{ asset('assets/icon/Instagram.png') }}">

        </div>
         <div class="intro">


            <ul id="time">
                      <li id="h"></li>
                <li id="m"></li>
                <li id="s"></li>
                <li id="t"></li>
            </ul>


        </div>
        <div class="right">
            <span>copyright &copy; 2020 all rights </span>
            <span>created by Eng islam m ahmed </span>

        </div>
    </div>

</section>



    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}" ></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" ></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" ></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/js/script.js') }}" ></script>
    {{-- @yield('js'); --}}
</body>
</html>

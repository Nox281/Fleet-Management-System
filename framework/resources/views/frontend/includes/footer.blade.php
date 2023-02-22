    <footer>
        <div class="container mt-0 mt-lg-3 text-white">
            <div class="row w-100 m-0 p-0">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 pb-2 pb-lg-0">
                    <div class="footer-logo">
                        <a href="{{ route('frontend.home') }}"><img src="{{ url('assets/images/' . ayoubgr::get('logo_img')) }}" alt="" class="d-block mx-auto" height="100px"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 footer-col flex-col-center">
                    <p> {{ ayoubgr::get('badd1') . ", " . ayoubgr::get('badd2') . ", " . ayoubgr::get('city') . ", " . ayoubgr::get('state') . ", " . ayoubgr::get('country') . "." }}
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 footer-col flex-col-center">
                    <p> {{ ayoubgr::frontend('contact_email') }}<br> {{ ayoubgr::frontend('contact_phone') }} </p>
                </div>
                <div class="col-lg-2 col-md-4 flex-row-center footer-col footer-social">
                    <a href="{{ ayoubgr::frontend('facebook') }}" class="mx-3"> <i class="fab fa-facebook-f"></i> </a>
                    <a href="{{ ayoubgr::frontend('twitter') }}" class="mx-3"> <i class="fab fa-twitter"></i> </a>
                    <a href="{{ ayoubgr::frontend('instagram') }}" class="mx-3"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 pt-2 pt-sm-5">
                    <p class="text-center mb-0">
                        <center>{!! ayoubgr::get('web_footer') !!}</center>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
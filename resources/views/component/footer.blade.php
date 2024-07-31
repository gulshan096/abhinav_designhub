@php
    use Illuminate\Support\Facades\DB;

    $subcat = DB::table('subcategory')->get();

@endphp

<div class="mini-ft-b">
    <div class="container mini-ft">
        <p>I&apos;m available for freelance work</p>
        <button><a href="{{ url('contact') }}">contact me</a></button>
    </div>
</div>

<footer class="footer-04">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-md-0 mb-4">
                <h2 class="footer-heading contact"><a href="#" class="logo">Contact</a></h2>
                <div class="ft-left">
                    <div class="div-1">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <div class="ft-add">
                            <span class="fw-bold">Contact</span>
                            <span>+1 416-731-7960</span>
                        </div>
                    </div>
                    <div class="br-line"></div>
                    <div class="div-1">
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <div class="ft-add">
                            <span class="fw-bold">Email</span>
                            <span>abhinavdesignhub@gmail.com</span>
                        </div>
                    </div>
                    <div class="br-line"></div>
                    <div class="div-1">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <div class="ft-add">
                            <span class="fw-bold">Location</span>
                            <span>Brampton, ON Canada</span>
                        </div>
                    </div>
                </div>
                <!-- <p>Pradarshniya Nagar petrol pump</p>
                    <p>pin - <span>492001</span></p>
                    <p>Raipur Chhattisgarh</p> -->
            </div>
            <div class="col-md-6 col-lg-2 mb-md-0 mb-4">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="/" class="py-1 d-block">Home</a></li>
                    <li><a href="/about" class="py-1 d-block">About</a></li>
                    <li><a href="/contact" class="py-1 d-block">contact</a></li>
                    <li><a href="#home-portfolio" class="py-1 d-block">Portfolio</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Services</h2>
                <div class="tagcloud">
                    @if (!empty($subcat))
                        @foreach ($subcat as $item)
                            @if ($item->cid == 1)
                                <a href="{{ url('portfolio/' . $item->slug) }}"
                                    class="tag-cloud-link">{{ $item->sub_cat_name }}</a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">

                <h2 class="footer-heading">Follow us</h2>
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate border-none"><a href="https://www.behance.net/abhinavdesignhub"
                            target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                class="fa-brands fa-behance"></i>
                    <li class="ftco-animate border-none"><a href="https://www.facebook.com/abhinavdesignhub/"
                            target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                class="fa-brands fa-facebook"></i></a></li>
                    <li class="ftco-animate border-none"><a href="https://www.linkedin.com/in/abhinavkapila/"
                            target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                class="fa-brands fa-linkedin"></i></a></li>
                    <li class="ftco-animate border-none"><a href="https://www.instagram.com/abhinavdesignhub/"
                            target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                class="fa-brands fa-instagram"></i></a></li>
                </ul>

                <div class="w-50 mt-5 pt-2">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 border-tops py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <p class="copyright text-white">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>2024. Designed by Abhinav Design Hub. All right reserved.
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 text-md-right">
                    <p class="mb-0 list-unstyled">
                        <a class="mr-md-3 ft-links" href="{{ url('terms') }}">Terms</a>
                        <a class="mr-md-3 ft-links" href="{{ url('privacy') }}">Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

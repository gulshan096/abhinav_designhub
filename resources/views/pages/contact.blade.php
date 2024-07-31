@extends('component.master')
@section('content')
    <div id="content-wrap">
        <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
            <div class="page-header-inner tt-wrap">
                <div class="ph-image">
                    <div class="ph-image-inner">
                        <img src="{{ asset('uploads/About.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Contact</h1>
                    <div class="ph-caption-title-ghost ph-appear">Contact</div>
                </div>
            </div>
            <a href="#page-content" class="scroll-down-circle" data-offset="30">
                <div class="sdc-inner ph-appear">
                    <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                    <svg viewBox="0 0 500 500">
                        <defs>
                            <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                id="textcircle"></path>
                        </defs>
                        <text dy="30">
                            <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                        </text>
                    </svg>
                </div>
            </a>
            <div class="made-with-love ph-appear">
                <div class="mwl-inner">
                    <div class="mwl-text">Made with</div>
                    <div class="mwl-icon"><i class="far fa-heart"></i></div>
                </div>
            </div>
        </div>
    </div>
    <section id="contact" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">CONTACT ME</h4>
                <h2 class="st-section-heading-subtitle">CONTACT ME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <h3 class="st-contact-title">Get in touch with us!</h3>

                    <div id="st-alert"></div>
                    <form method="post" action="{{ url('submit_enquire') }}" class="st-contact-form">
                        @csrf
                        <div class="st-form-field">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="st-form-field">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" name="subject" placeholder="Your Subject" required>
                        </div>
                        <div class="st-form-field">
                            <textarea cols="30" rows="10" name="description" placeholder="Your Message" required></textarea>
                        </div>
                        <button class="st-btn st-style1 st-color1" type="submit">Send
                            message</button>
                    </form>
                </div>
                <div class="st-height-b0 st-height-lg-b30"></div>

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b40"></div>
                    <h3 class="st-contact-title">Contact Info</h3>
                    <div class="st-contact-text">
                        Fill out the form below, and we'll respond as soon as possible. We look forward to hearing from you!
                    </div>
                    <div class="st-contact-info-wrap">
                        <div class="st-single-contact-info">
                            <i class="fas fa-envelope"></i>
                            <div class="st-single-info-details">
                                <h4>Email</h4>
                                <a href="#">abhinavdesignhub@gmail.com</a>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="st-single-info-details">
                                <h4>Phone</h4>
                                <span>+1 416-731-7960</span>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="st-single-info-details">
                                <h4>Address</h4>
                                <span>Brampton, ON Canada</span>
                            </div>
                        </div>
                        <div class="st-social-info">
                            <div class="st-social-text">Visite my social profile and get connected</div>
                            <div class="st-social-link">
                                <a href="https://www.instagram.com/abhinavdesignhub/" target="_blank"
                                    class="st-social-btn active">
                                    <span class="st-social-icon"><i class="fa-brands fa-instagram"></i></span>
                                    <span class="st-icon-name">Instagram</span>
                                </a>
                                <a href="https://www.behance.net/abhinavdesignhub" target="_blank" class="st-social-btn">
                                    <span class="st-social-icon"><i class="fab fa-behance"></i></span>
                                    <span class="st-icon-name">Behance</span>
                                </a>
                                <a href="https://www.facebook.com/abhinavdesignhub/" target="_blank" class="st-social-btn">
                                    <span class="st-social-icon"><i class="fab fa-facebook-square"></i></span>
                                    <span class="st-icon-name">Facebook</span>
                                </a>
                                <a href="https://www.linkedin.com/in/abhinavkapila/" target="_blank" class="st-social-btn">
                                    <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                                    <span class="st-icon-name">LinkedIn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>

        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184531.2943246057!2d-79.92435511480664!3d43.725063729390264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b15eaa5d05abf%3A0x352d31667cc38677!2sBrampton%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1722447021127!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                swal("Thanks, you are showing interest ! ", "{{ Session::get('success') }}", "success");
            });
        </script>
    @endif
@endsection

<x-layout title="YIOGS 2026 | Contacts">

    <!--==================================================-->
    <!-- Breadcumb / Page Title -->
    <!--==================================================-->
    <section class="breadcumb-area" style="background-color:#fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <h4 style="color:#66461D;">Contact Us</h4>
                        <ul>
                            <li><a href="{{ url('/') }}" style="color:#AA8F00;">Home</a></li>
                            <li style="color:#AA8F00;">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================================================-->
    <!-- Contact Info Boxes -->
    <!--==================================================-->
    <section class="contact-info-area section-padding" style="background-color:#f9f9f9;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info-box text-center p-4 bg-white shadow-sm rounded">
                        <div class="contact-info-icon mb-3">
                            <i class="bi bi-geo-alt fs-2" style="color:#AA8F00;"></i>
                        </div>
                        <h5 style="color:#222;">Headquarters</h5>
                        <p style="color:#AA8F00;">Erf 702, Nossob Street<br>Meersig, Walvis Bay</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info-box text-center p-4 bg-white shadow-sm rounded">
                        <div class="contact-info-icon mb-3">
                            <i class="bi bi-envelope fs-2" style="color:#AA8F00;"></i>
                        </div>
                        <h5 style="color:#222;">Email</h5>
                        <p><a href="mailto:info@yiogs.com.na" style="color:#AA8F00;">info@yiogs.com.na</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info-box text-center p-4 bg-white shadow-sm rounded">
                        <div class="contact-info-icon mb-3">
                            <i class="bi bi-telephone fs-2" style="color:#AA8F00;"></i>
                        </div>
                        <h5 style="color:#222;">Phone</h5>
                        <p style="color:#AA8F00;">+264 81 216 5752</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==================================================-->
    <!-- Contact Form + Google Map -->
    <!--==================================================-->
    <section class="contact-form-map section-padding" style="background-color:#fff;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Google Map -->
                <div class="col-lg-6 mb-4">
                    <div class="google-map rounded shadow-sm overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.6038306944663!2d15.047814276028536!3d-22.944114798215417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ba3d8c48e5f9f1d%3A0x1234567890abcdef!2sErf%20702%2C%20Nossob%20Street%2C%20Walvis%20Bay%2C%20Namibia!5e0!3m2!1sen!2sna!4v1680000000000!5m2!1sen!2sna"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <h4 style="color:#A97735;">Get In Touch</h4>
                        <h2 style="color:#222;">Write Us Something</h2>
                        <p style="color:#555;">Whether you are a delegate, a potential speaker, or a prospective partner, we want to hear from you.</p>
                    </div>
                    <form action="#" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control" placeholder="Enter Your Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" class="form-control" placeholder="Subject*" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" rows="5" placeholder="Write Message"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree with the Terms & Conditions
                                </label>
                            </div>
                        </div>
                       <div class="col-12">
                            <div class="echofy-button">
                                <button type="submit">Submit Message</button>
                                <img class="two" src="{{ asset('assets/images/home1/button-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</x-layout>

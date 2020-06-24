@extends('layouts.main')
@section('title', 'Contact')
@section('content')

    <div class="container">
        <section>
            <div class="container col-md-3">
                <div class="contactinfo mt-3">
                    <br><br><br><br><br>
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <span>Mollardgasse, 1060<br>
                                    Wien, Österreich</span>
                            </li>
                            <li>
                                <span><i class="fas fa-mail-bulk"></i></span>
                                <span>mostafa_alfalahi@yahoo.com</span>
                            </li>
                            <li>
                                <span><i class="fas fa-mobile-alt"></i></span>
                                <span>068120215259</span>
                            </li>
                        </ul>
                    </div>
                    <ul class="sm">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <br><br><br><br><br>

                @if( session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="contactForm mt-3">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                            <div class="inputBox w50">
                                <input type="text" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <span>Name</span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="subject" value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <span>Subject</span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <span>Email Address</span>
                            </div>
                            <div class="inputBox w100">
                                <textarea type="text" name="message" value="{{ old('message') }}"></textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <span>Write your message here...</span>
                            </div>
                            <div class="inputBox w100">
                                <button class="btn btn-dark btn-block">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="container my-5">

        <!--Section: Content-->
        <section class="contact-section dark-grey-text mb-5">
        
        <style>
            .contact-section .form .btn-floating {
            left: 3px;
            }
        </style>

        <!-- Form with header -->
        <div class="card">

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-lg-8">

                <div class="card-body form">

                <!-- Header -->
                <h3 class="font-weight-bold dark-grey-text mt-4"><i class="fas fa-envelope pr-2 mr-1"></i>Write to us:</h3>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="form-contact-name" class="form-control">
                        <label for="form-contact-name" class="">Your name</label>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="form-contact-email" class="form-control">
                        <label for="form-contact-email" class="">Your email</label>
                    </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="form-contact-phone" class="form-control">
                        <label for="form-contact-phone" class="">Your phone</label>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="form-contact-company" class="form-control">
                        <label for="form-contact-company" class="">Your company</label>
                    </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12">
                    <div class="md-form mb-0">
                        <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form-contact-message">Your message</label>
                        <a class="btn-floating btn-lg blue">
                        <i class="far fa-paper-plane"></i>
                        </a>
                    </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4">

                <div class="card-body contact text-center h-100 white-text">

                <h3 class="font-weight-bold my-4 pb-2">Contact information</h3>
                <ul class="text-lg-left list-unstyled ml-4">
                    <li>
                    <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
                    </li>
                    <li>
                    <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
                    </li>
                    <li>
                    <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                    </li>
                </ul>
                <hr class="hr-light my-4">
                <ul class="list-inline text-center list-unstyled">
                    <li class="list-inline-item">
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="p-2 fa-lg li-ic">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram"> </i>
                    </a>
                    </li>
                </ul>

                </div>

            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Form with header -->

        </section>
        <!--Section: Content-->


    </div>
    
@endsection
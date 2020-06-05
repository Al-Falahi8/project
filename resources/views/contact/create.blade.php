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

@endsection
@extends('weblayouts.app')

@section('content_box')

   {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>--}}

    <section class="ftco-section bg-light">
        <div id="hero" class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    {{--<h3 class="mb-4">Get in touch</h3>--}}
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <form method="POST" id="contactForm"  action="{{route('basic_email')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="phone">Contact</label>
                                                    <input type="tel" class="form-control" name="contact" id="email" placeholder="Contact Number">
                                                    @error('contact')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                    @error('message')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input style="background: #ffa500; color: white" type="submit" value="Send Message" class="btn ">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4"><br></p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> {{ $siteSetting['office_address'] ?? '' }}</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://{{ $siteSetting['phone'] ?? '' }}">{{ $siteSetting['phone'] ?? '' }}</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="mailto:{{ $siteSetting['email'] ?? '' }}">{{ $siteSetting['email'] ?? '' }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <script>
                $(document).ready(function() {
                    // Show the dialog when the page loads
                    alert("{{ session('success') }}"); // You can use any dialog library here

                    // Clear the session data for 'success'
                    @php session()->forget('success'); @endphp
                });
            </script>
        @endif


    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.0651204009623!2d149.23140567577323!3d-35.35403017269462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164ee6f19aaaab%3A0x19a44e81fbfff18d!2s8%2F72%20Monaro%20St%2C%20Queanbeyan%20NSW%202620!5e0!3m2!1sen!2sau!4v1702989069150!5m2!1sen!2sau" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection



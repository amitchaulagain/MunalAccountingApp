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
                                    <div>

                                        <p class="mb-0 phone pl-md-2">
                                            <a  style="font-weight: bold; color: orange" href="tel://{{ $siteSetting['site_contact'] ?? '' }}" class="mr-4"> <span
                                                    class=".phone-icon">
                                                                            <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                                                 fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>



                                                </span> {{ $siteSetting['site_contact'] ?? '' }}</a>
                                            <br>
                                            <hr>
                                            <a style="cursor: pointer; font-weight: bold; color: orange" class="book-icon"><span  >
                                                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>

                                                </span> Book an appointment
                                            </a>
                                        </p>
                                        <br>


                                    </div>
                                    <form method="POST" id="contactForm" action="{{route('basic_email')}}">
                                        @csrf
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Name">
                                                </div>
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email">
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="phone">Contact</label>
                                                    <input type="tel" class="form-control" name="contact" id="email"
                                                           placeholder="Contact Number">
                                                    @error('contact')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Subject">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                              rows="4" placeholder="Message"></textarea>
                                                    @error('message')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input style="background: #ffa500; color: white" type="submit"
                                                           value="Send Message" class="btn ">
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
                                            <p><span>Phone:</span> <a
                                                    href="tel://{{ $siteSetting['phone'] ?? '' }}">{{ $siteSetting['phone'] ?? '' }}</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a
                                                    href="mailto:{{ $siteSetting['email'] ?? '' }}">{{ $siteSetting['email'] ?? '' }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="container mt-5">
                      <!-- Phone icon -->
                      <span class="text-primary mr-3 phone-icon" style="cursor: pointer;"><i class="fas fa-phone"></i></span>
                      <!-- Book an appointment icon -->
                      <span class="text-primary book-icon" style="cursor: pointer;"><i class="fas fa-calendar-alt"></i></span>

                      <!-- Contact Form -->
                      <div class="contact-form mt-3">
                          <h3>Contact Form</h3>
                          <form>
                              <div class="form-group">
                                  <label for="name">Name:</label>
                                  <input type="text" class="form-control" id="name" required>
                              </div>
                              <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" id="email" required>
                              </div>
                              <div class="form-group">
                                  <label for="message">Message:</label>
                                  <textarea class="form-control" id="message" rows="3" required></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>--}}

                <!-- Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                    // When phone icon is clicked
                    $('#contactForm').hide();

                    // When book icon is clicked
                    $('.book-icon').click(function () {
                        $('#contactForm').toggle(); // Toggle visibility of contact form
                    });
                </script>
            </div>
        </div>

        @if(session('success'))
            <script>
                $(document).ready(function () {

                    // Show the dialog when the page loads
                    alert("{{ session('success') }}"); // You can use any dialog library here

                    // Clear the session data for 'success'
                    @php session()->forget('success'); @endphp
                });
            </script>
        @endif


    </section>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.0651204009623!2d149.23140567577323!3d-35.35403017269462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164ee6f19aaaab%3A0x19a44e81fbfff18d!2s8%2F72%20Monaro%20St%2C%20Queanbeyan%20NSW%202620!5e0!3m2!1sen!2sau!4v1702989069150!5m2!1sen!2sau"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection



<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-7 py-5">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">About us</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Twitter"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Facebook"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Instagram"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-6">
                                        <h2 class="footer-heading">Services</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-1 d-block">Market Analysis</a></li>
                                            <li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
                                            <li><a href="#" class="py-1 d-block">General Consultancy</a></li>
                                            <li><a href="#" class="py-1 d-block">Structured Assestment</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-6">
                                        <h2 class="footer-heading">Discover</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-1 d-block">About us</a></li>
                                            <li><a href="#" class="py-1 d-block">Contact us</a></li>
                                            <li><a href="#" class="py-1 d-block">Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-5 ">
                <br><br>
                <h2 class="footer-heading">Free consultation</h2>
                <form method="post" class="form-consultation" action="{{route('basic_email')}}">
                    @csrf

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Contact Number"
                                           name="contact">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" cols="50" rows="3" class="form-control" placeholder="Subject"
                                           name="subject">
                                </div>
                                <div class="form-group">
                                        <textarea cols="50" rows="3" class="form-control" placeholder="Message"
                                                  name="message"></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="form-control submit px-3">Send A Message</button>
                                </div>
                            </div>
                    </div>
                </form>


                {{--  <form  method="post" class="form-consultation"  action="{{route('basic_email')}}">
                      @csrf
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Name" name="name">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Email" name="email">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Contact Number" name="contact">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Subject" name="subject">
                      </div>
                      <div class="form-group">
                          <textarea  cols="30" rows="3" class="form-control" placeholder="Message" name="message"></textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="form-control submit px-3">Send A Message</button>
                      </div>
                  </form>--}}
            </div>
        </div>
    </div>
</footer>

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

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>

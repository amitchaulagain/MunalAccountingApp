<style>
    #popup {
        position: fixed;
        bottom: -200px; /* Initially positioned below the viewport */
        color: #fff;
        transition: transform 1s ease-in-out; /* Add transition for smooth sliding */
    }

    .visible {
        transform: translateY(-100%) translateX(0); /* Slide from bottom to top */

    }


    .hidden {
        transform: translateY(100%) translateX(0); /* Slide from bottom to top */
        /*opacity: 0;*/
        pointer-events: none;
    }
</style>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        setInterval(showPopup, 8000); // Show popup every 5 seconds
    });

    function showPopup() {
        const popup = document.getElementById('popup');
        popup.classList.remove('hidden'); // Remove the 'hidden' class to make the popup visible
        popup.classList.add('visible'); // Add the 'visible' class to trigger the sliding animation

        // Schedule the popup to be hidden after 3 seconds
        setTimeout(hidePopup, 3000);
    }

    function hidePopup() {
        const popup = document.getElementById('popup');
        popup.classList.remove('visible'); // Remove the 'visible' class to trigger the reverse animation

        // Wait for the animation to complete before hiding the popup completely
        setTimeout(function () {
            popup.classList.add('hidden'); // Add the 'hidden' class to hide the popup
        }, 1); // Assuming the animation duration is 0.5s (500ms)
    }
</script>

<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-6 py-5">
                <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                        <h2 class="footer-heading">Connect with us</h2>
                        <p style="color: #e7e1e1">Reach out to us via phone, email, or visit our office. Our friendly team is ready to assist you with any questions or service inquiries.</p>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate">
                                <a href="{{ $siteSetting['facebook_url'] ?? '' }}" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Twitter">
                                    <span class="fa fa-twitter" target="_blank"></span>
                                </a>
                            </li>
                            <li class="ftco-animate"><a href="{{ $siteSetting['facebook_url'] ?? '' }}"
                                                        data-toggle="tooltip"
                                                        data-placement="top" title="Facebook">
                                    <span class="fa fa-facebook" target="_blank"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="{{ $siteSetting['instagram_url'] ?? '' }}" target="_blank"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Instagram"><span class="fa fa-instagram">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                   {{-- <div id="popup" class="hidden col-md-3">
                        <div class="testimony-wrap py-4  ">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <span style="width: 200px;" class="mb-4"> {{ $siteSetting['popup_content'] ?? '' }}
                                </span>
                            </div>
                        </div>
                    </div>--}}
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-6">
                                        <h2 class="footer-heading">Discover</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="/tax-return" class="py-1 d-block">Tax Services</a></li>
                                            <li><a href="/business-services" class="py-1 d-block">Business Services</a></li>
                                            <li><a href="/financial-services" class="py-1 d-block">Financial Services</a></li>
                                            <li><a href="/tax-calculator" class="py-1 d-block">Calculator</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 ">
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
                                <button type="submit" class="header-button">Send A Message</button>
                            </div>
                        </div>
                    </div>
                </form>
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

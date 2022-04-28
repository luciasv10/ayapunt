		<section class="widget_section padding">
            <!-- <img src="img/shapes/pespunte1.png" class="footer-shape"> -->
			<div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="footer_widget">
                            <img class="mb-15 img-fluid w-75" src="img/logo.png" alt="Brand">
                            <!-- <p>Ayapunt, S.A. es una empresa dedicada a la fabricación de uniformidades colegiales.</p> -->
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="footer_widget">
                            <!-- <h3>Opening Hours</h3> -->
                            <ul class="opening_time address">
                                <li><i class="icon_pin"></i> C/ Punta Umbría,10 APDO. 56 21400 Ayamonte (Huelva)</li>
                                <li><i class="icon_mail_alt"></i> info@ayapunt.com</li>
                                <li><i class="icon_mail_alt"></i> +34 959 470 018 <br>
                                    +34 959 470 002</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer_widget">
                            <h3>Quick Links</h3>
                            <ul>
                                <li> <a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6  sm-padding">
                        <div class="footer_widget">
                            <!-- <h3>Subscribe to our contents</h3> -->
                            <div class="subscribe_form">
                                <form action="#" class="subscribe_form">
                                    <input type="email" name="email" id="subs-email" class="form_input" placeholder="Email Address...">
                                    <button type="submit" class="submit">SUBSCRIBE</button>
                                    <div class="clearfix"></div>
                                    <div id="subscribe-result">
                                        <p class="subscription-success"></p>
                                        <p class="subscription-error"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section><!-- /.widget_section -->

        <footer class="footer_section">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="copyright">Derechos de autor &copy; <script type="text/javascript"> document.write(new Date().getFullYear())</script>  Reservados todos los derechos.</div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <ul class="footer_social">
                            <li><a href="https://twitter.com/AyapuntSA" target="_blank"><i class="social_twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100005212337205" target="_blank"><i class="social_facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCU78g2EJrDfgjnkAYtbFQew" target="_blank"><i class="social_youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</footer><!-- /.footer_section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

		<!-- jQuery Lib -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/vendor/bootstrap.min.js"></script>
        <!-- Imagesloaded JS -->
        <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="js/vendor/owl.carousel.min.js"></script>
		<!-- isotope JS -->
		<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="js/vendor/venobox.min.js"></script>
        <!-- ajaxchimp JS -->
        <script src="js/vendor/jquery.ajaxchimp.min.js"></script>
        <!--Slicknav-->
		<script src="js/vendor/jquery.slicknav.min.js"></script>
		<!--Nice Select-->
		<script src="js/vendor/jquery.nice-select.min.js"></script>
        <!-- YTPlayer JS -->
	    <script src="js/vendor/jquery.mb.YTPlayer.min.js"></script>
	    <!-- Wow JS -->
	    <script src="js/vendor/wow.min.js"></script>
		<!-- Contact JS -->
		<script src="js/contact.js"></script>
		<!-- Appointment JS -->
		<script src="js/appointment.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

        <script type="text/javascript">
            <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
          
          $(document).on('change', '#language_dropdown', function() {

            if($(this).val() == 'en') {
                window.location.href = "<?php echo $actual_link; ?>/en";
            } else {
                window.location.href = "<?php echo $actual_link; ?>/";
            }
            
          });

        </script>

    </body>
</html>

<section id="contact">
    <div><!-- Container class Missing -->
        <div class="well well-sm">
            <h2><i class="fas fa-check-circle" style="color:#5fa703"></i>&nbsp;<strong>Contact Us</strong></h2>
        </div>
        <div class="container"> 
            <div class="row">
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14002.728781992351!2d77.3790747!3d28.669233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb1a47372d8663a!2sJavatportal+Corporation+-+Website%2FSoftware+Development+and+Training+Center!5e0!3m2!1sen!2sin!4v1528625979417" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                <div class="col-md-5">
                    <h4><strong>Get in Touch</strong></h4>
                    <form action="thank-you" method="post" id="contact" name="contact">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Name" onfocusout="validate_value(1)">
                            <small  class="form-text text-danger font-weight-bold" id="sname"></small>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" value="" placeholder="E-mail" onfocusout="validate_value(2)">
                            <small  class="form-text text-danger font-weight-bold" id="semail"></small>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="mobile" id="mobile" value="" placeholder="Phone" onfocusout="validate_value(3)">
                            <small  class="form-text text-danger font-weight-bold" id="smobile"></small>
                        </div>
                        <input name="website" type="text" class="website" style="display: none;"/>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-default" name="submit" onclick="return validate_value('submit')">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="intro-header"> 
<div class="container"  align="center">

<div class="tab-content custom-tab-content" align="center">
<div class="subscribe-panel">
<h1><i class="fas fa-check-circle" style="color:#5fa703"></i>&nbsp;Newsletter!!!</h1>
<h3>Subscribe to our weekly Newsletter and stay tuned.</h3>
                
                <form action="enews-subscription" method="post">
                    	
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
									<input type="text" class="form-control input-lg" name="subscriber_email" id="email"  placeholder="Enter your Email"/>
           <input name="website" type="text" class="website" style="display: none;"/>
								</div>
							</div>
							<div class="col-md-4"></div>
                    <br/>
                    <button class="btn btn-warning btn-lg" name="subscribe" onclick="this.form.submit()">Subscribe Now!</button>
                    <br/><br/>
              </form>

</div>
</div>
</div>
</div>
<footer>
    <div class="container"> <!-- Container Class Missing  -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <ul class="contact">
                    <span style="border-bottom: solid 2px;">Top Courses</span>    
                    <ul>
                        <li><a  href="<?php echo HOME; ?>/training/best-java-training-institute-in-noida"><i class="fa fa-angle-double-right"></i> Core Java/J2SE</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-java-training-institute-in-ghaziabad"><i class="fa fa-angle-double-right"></i> Advance Java/J2EE</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-java-training-institute-in-noida"><i class="fa fa-angle-double-right"></i> Java Frameworks</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-angularjs-training-institute-in-noida"><i class="fa fa-angle-double-right"></i> Angular Js</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-python-training-institute-in-noida"><i class="fa fa-angle-double-right"></i>  Python</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-noida"><i class="fa fa-angle-double-right"></i>  Selenium</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-android-training-institute-in-noida"><i class="fa fa-angle-double-right"></i>  Android</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/big-data-hadoop-online-training-institute-in-india"><i class="fa fa-angle-double-right"></i>  Big Data Hadoop</a></li>
                    </ul>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <ul class="contact">
                    <span></span>    
                    <ul>
                        <li><a  href="<?php echo HOME; ?>"> &zwnj;</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-data-science-with-r-training-in-noida"><i class="fa fa-angle-double-right"></i> Data Science(SAS)</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-data-science-with-r-training-in-noida"><i class="fa fa-angle-double-right"></i> Data Science(R)</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-data-science-with-r-training-in-noida"><i class="fa fa-angle-double-right"></i> Robotics Process Automation(RPA)</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-mis-training-institute-in-noida"><i class="fa fa-angle-double-right"></i> Advance Excel</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida"><i class="fa fa-angle-double-right"></i> Digital Marketing</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-android-training-institute-in-noida"><i class="fa fa-angle-double-right"></i>  PhoneGap</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-php-training-institute-in-noida"><i class="fa fa-angle-double-right"></i>  PHP Frameworks</a></li>
                        <li><a  href="<?php echo HOME; ?>/training/best-mis-training-institute-in-ghaziabad"><i class="fa fa-angle-double-right"></i>  MIS & Analytics</a></li>
                    </ul>

                </ul>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <ul class="contact">
                    <span></span>    
                    <li><a  href="<?php echo HOME; ?>/contact-us"> &zwnj;</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i>  Admission Form</a></li>
                    <li><a href="<?php echo HOME; ?>/contact-us"><i class="fa fa-angle-double-right"></i>  Computer Live Test</a></li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <ul class="contact">
                    <span></span>    
                    <li><a  href="<?php echo HOME; ?>contact-us"> &zwnj;</a></li>
                    <li>
                        <a href="<?php echo HOME; ?>contact-us">Terms of Use</a>
                    </li>

                    <li>
                        <a href="<?php echo HOME; ?>contact-us">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="<?php echo HOME; ?>/contact-us">Contact</a>
                    </li>

                    <li>
                        <a href="<?php echo HOME; ?>/contact-us">Make Payment</a>
                    </li>

                    <li>
                        <a href="http://www.facebook.com/javatportalcorporations"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="https://twitter.com/JavaTportalCorp"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://plus.google.com/+javatportalcorporationsgkp/about"><i class="fab fa-google fa-2x"></i></a>
                        <a href="http://feedburner.google.com/fb/a/mailverify?uri=javatportalcorporationsBlog&loc=en_US"><i class="fas fa-rss fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/javatportalcorporations"><i class="fab fa-linkedin-in fa-2x"></i></a>
                        <a href="https://www.youtube.com/c/javatportalcorporations"><i class="fab fa-youtube fa-2x"></i></a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="col-md-12"><div class="container bottom-nav"><span><a href="aboutus.php">About Us </a></span><span><a href="contactus.php">Contact Us </a></span><span><a href="career.php">Career </a></span><span><a href="request_certificate.php">Apply Training Certificate </a></span><span><a href="feedback.php">Feedback</a></span></div></div>
    </div>
    <!--     <div class="container">
             <center><img src="http://localhost/javatportal.org/assets/img/jtp_logo.png" class="img-responsive">
             <p style="color:white; text-align: center">All Rights Reserved at Javatprotal Corporation</p>
             </center>
           
         </div> -->

</footer>

<div class="fixed-bottom mobile-only">
    <div class="row">
        <div class="col">
            <a href="tel:09711195889"><img src="<?php echo HOME?>/assets/img/icon/call.png"></a>
        </div>
        <div class="col">
            <a href="https://api.whatsapp.com/send?phone=9711195889&text=I'm%20interested%20in%20your%20web%20services"><img src="<?php echo HOME?>/assets/img/icon/whatsapp.png"></a>
        </div>
        <div class="col">
            <a href="mailto:info@javatportal.org?Subject=Enquiry%20Statement" target="_top"><img src="<?php echo HOME?>/assets/img/icon/gmail.png"></a>

        </div>
    </div>
</div>
<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/contact-form.js"></script>

</body>


<?php
  $pages =$current_page="active";
 $current_page = 'contact';
  include('assets/header.php');
  ?>

  <section id="hero" class="contact_banner">
    <div class="banner-conatiner">
      <div class="container">
      <div class="row">
        <div class="col-md-7">
                      <div class="section-title">
              <h1>Conatct Us</h1> </div>
<!--            <h1 class="animated fadeInDown">About Us</h1> -->
         <p class="animated fadeInUp f22">At Kvista we believe that the most valuable resource we possess is our staff.</p>
        </div>
      <div class="col-md-5">
      </div>
      </div>
      </div>
    </div>
  </section>

<!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>10469 Red Rose Ln, San Diego, CA 92127</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>hr@Kvista.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 860 869 4192</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3043.173769916513!2d-74.48988708547013!3d40.29410047101403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3d94601f97301%3A0x8cb9fad15ce6a829!2s57%20Morgan%20Way%2C%20Monroe%20Township%2C%20NJ%2008831%2C%20USA!5e0!3m2!1sen!2sin!4v1637245452534!5m2!1sen!2sin" width="100%" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30483.484758820283!2d80.17319485887452!3d17.246148498705114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3459db56b7cf33%3A0x77eebb22ae0701dc!2sLakaram%20Park%2F%20Tank%20Bund%2C%20Lakaram%20Park%20Road%2C%20Kaviraj%20Nagar%2C%20Khammam%2C%20Telangana%20507001!5e0!3m2!1sen!2sin!4v1637231280065!5m2!1sen!2sin" width="100%" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
          </div>
        </div>

      </div>
    </section><!-- End Contact Us Section -->

    
  </main><!-- End #main -->

      <?php include('assets/footer.php');?>
  
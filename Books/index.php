<?php 
include_once "actions.php";
include "header.php"; ?>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Welcome to the BOOKLand!</h1>

                                   <a href="contact.php" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Sign in</a>

                                   <!-- <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +99 080 070 4224</strong> -->
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="images/working-girl.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">The best <strong>Book store</strong> in Rio de Janeiro</h2>

                              <p class="mb-0" data-aos="fade-up">Welcome to our bookstore. You can find the best books according to the author. 
                              <br><br>You can <a href="books.php"><strong>buy</strong></a>  any book you want. You can <a href="search.php"><strong>search</strong></a>  something.</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="images/office.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through our
                            <a href="books.php"><strong>Books</strong></a>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/project/project-detail//big_startfilmru1384154.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>David Yoon</small>

                                        <h3>
                                             <a href="everything.php">
                                                  <span>Everything, Everything</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-detail/rsz_atbp_unit_01724r_1506127-768x512.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Jennifer Niven</small>

                                        <h3>
                                             <a href="all_the_bright_places.php">
                                                  <span>All The Bright Places</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-detail/1_8lTisCNeUL1Uf7zalRDbew.jpeg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Nicola Yoon</small>

                                        <h3>
                                             <a href="sunisalsoastar.php">
                                                  <span>The Sun Is Also a Star</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                             
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL
     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="images/female-avatar.png" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                      <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Mary Zoe</strong>

                        <span class="mx-1">/</span>

                        <small>Digital Agency (CEO)</small>
                      </p>
                    </div>

               </div>
          </div>
     </section> -->


<?php include "footer.php"; ?>
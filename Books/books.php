<?php 
include_once "actions.php";
include "header.php"; ?>


     <!-- BLOG -->
     <section class="blog section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                      <h1 class="mb-4" data-aos="fade-up">Books</h1>
                    </div>
<!-- 
                    <div class="col-lg-7 col-md-7 col-12 mb-4">
                      <div class="blog-header" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/blog/blog-header-image.jpg" class="img-fluid" alt="blog header">

                        <div class="blog-header-info">
                          <h4 class="blog-category text-info">Creative</h4>

                          <h3><a href="blog-detail.php">The Key to Creative Work is Knowing When to Walk Away</a></h3>
                        </div>
                      </div>
                    </div> -->

                    <div class="col-lg-5 col-md-5 col-12 mb-4">
                      <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="images/project/project-detail/unnamed.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-danger">Jennifer Niven</h4>

                          <h3><a href="all_the_bright_places.php">All The Bright Places</a></h3>
                        </div>
                      </div>

                      <div class="blog-sidebar py-4 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <img src="images/project/project-detail/91y-JsiJk9L.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-success">Nicola Yoon</h4>

                          <h3><a href="sunisalsoastar.php">The Sun Is Also a Star</a></h3>
                        </div>
                      </div>

                      <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="images/project/project-detail/afc2d9c8aeb0ff631fae2605d5b70faa.png" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-primary">David Yoon</h4>

                          <h3><a href="everything.php">Everything, Everything</a></h3>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                      <img src="images/newsletter.png" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
                    </div>

                    <div class="col-lg-10 mr-auto mt-6 pt-5 col-md-6 col-12 newsletter-form" id="now">
                      <h4 data-aos="fade-up" data-aos-delay="200">All information</h4>

                      <!-- <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2> -->

                    <h3 data-aos='fade-up' data-aos-delay='200'>Sort by:</h3></br>
                    
                    
                    <form action="books.php#now
                    " name="myform" method="post" data-aos='fade-up' data-aos-delay='150'>
                        <select class="btn btn-secondary dropdown-toggle" name="sort" size="1">
                            <option value="title">Title</option>
                            <option value="author">Author</option>
                            <option value="year">Year</option>
                            <option value="genre">Genre</option>
                            <option value="price">Price</option>
                        </select>
                        <input name="Submit" type="submit" value="Confirm" class="btn btn-secondary">
                    </form></br> 
                    

                      <div id="table">
                      <?php 
                        if(isset($_POST['sort'])){
                            sorting($_POST['sort']);
                        }
                        $out = out_arr();
                        if(count($out)>0){
                            foreach($out as $row){
                            echo $row;
                        }
                        }
                      ?>
                      </div>

                      <!-- <form action="#" method="get" enctype="multipart/form-data">
                      <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                        <input name="email" type="email" class="form-control" 
                        		id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                        <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                      </div>

                      <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                        <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                        <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                      </div>

                        <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                      </form> -->
                    </div>

               </div>
          </div>
     </section>


     <?php include "footer.php"; ?>
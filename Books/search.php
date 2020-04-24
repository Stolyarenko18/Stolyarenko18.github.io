<?php 
include_once "actions.php";
include "header.php"; ?>


     <!-- BLOG DETAIL -->
     <section class="project-detail section-padding-half">
          <div class="container">
               <div class="row">

                    <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">
</br></br>
                      <h4 class="blog-category text-info">You can search something</h4></br></br>
                      
                      <form class="contact-form"  name='searchForm' action='search.php' method='post' onSubmit='return overify_login(this);' >
                         <div class="form-group has-search">
                              <span class="fa fa-search form-control-feedback"></span>
                              <input type='text' name='search' class="form-control" placeholder="Search">
                         </div>
                         <input type='submit' name='gosearch' value='Confirm' class="btn btn-secondary">
                         <input type='submit' name='clear' value='Reset'  class="btn btn-secondary">
                      </form></br></br>

                      <?php  
                      
                      if (isset($_POST['gosearch'])) {
                         $data = test_input($_POST['search']);
                         $out = out_search($data);
                         
                         // вызов функции out_arr() из action.php для получения массива
                         if (count($out) != 0) {
                         foreach ($out as $row) {//вывод массива построчно
                         echo $row;
                         }
                         } else// если нет данных
                         echo "Nothing found";
                         
                         //include "content.php"; // Можно вынести таблицу в отдельный файл
                         
                         }

                      ?>

                      <!-- <h1>Weekly report</h1> -->

                      <!-- <div class="client-info">
                          <div class="d-flex justify-content-center align-items-center mt-3">
                            <img src="images/project/project-detail/male-avatar.png" class="img-fluid" alt="male avatar">

                            <p>Admin</p>
                          </div>
                      </div> -->
                    </div>

               </div>
          </div>
     </section>


     <!-- <div class="full-image text-center" data-aos="zoom-in">
       <img src="images/blog/blog-header-image.jpg" class="img-fluid" alt="blog header">
     </div> -->


     <!-- BLOG DETAIL
     <section class="project-detail">
          <div class="container">
               <div class="row">

                  <div class="col-lg-9 mx-auto col-md-11 col-12 my-5 pt-3" data-aos="fade-up">

                    <h2 class="mb-3">Etiam quis metus elementum, tempor risus vel, condimentum orci.</h2>

                    <p>Mauris in convallis nunc, non facilisis arcu. Nunc sapien nulla, interdum at diam non, aliquam vestibulum leo. Fusce laoreet malesuada ante, consectetur consequat ante tempor et. Quisque ac risus ligula.</p>

                    <p>Suspendisse bibendum tortor at est placerat auctor. Phasellus tortor est, bibendum eu ex eu, tincidunt efficitur nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <ul class="list-detail py-3">
                      <li><span>Quisque at condimentum est. Duis sollicitudin urna id elit pulvinar placerat. Ut ac dui in ex vulputate dictum.</span></li>

                      <li><span>Mauris vitae tellus nisi. Morbi rutrum lacus sit amet volutpat viverra.</span></li>

                      <li><span> Integer maximus sem ut ipsum blandit elementum. Nullam sollicitudin accumsan commodo.</span></li>
                    </ul>

                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci.</p>

                    <h2 class="mt-5 mb-3">Curabitur tempus vel libero lobortis feugiat</h2>

                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris in convallis nunc, non facilisis arcu. Nunc sapien nulla, interdum at diam non, aliquam vestibulum leo.</p>

                    <blockquote>Phasellus dapibus ex sed dolor blandit, efficitur iaculis ipsum scelerisque. Cras elementum nibh id felis sagittis, sit amet pellentesque ligula porttitor. Fusce laoreet malesuada ante, consectetur consequat ante tempor et. Quisque ac risus ligula.</blockquote>
                    </div>
               </div>

              
          </div>
          
     </section> -->


     <?php include "footer.php"; ?>
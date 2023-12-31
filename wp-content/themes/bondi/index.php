<?php get_header();?>

 <!--features-->
 <div class="features text-center">
        <div class="container pt-5 pb-5">
          <div class="main-title mt-5 mp-5 position-relative">
            <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/yellow-1.png" alt="">
            <h2>We are Good at </h2>
            <p class="text-black-50  text-uppercase">some of thease stuff under</p>
          </div>
          <div class="row">
            <!-- section 1 in row -->  
            <div class="col-md-6 col-lg-4">
              <div class="feat ">
                <div class="icon-holder position-relative">
                  <i class="fa-solid fa-1 position-absolute bottom-0 number"></i>
                  <i class="fa fa-pencil  position-absolute bottom-0 icon fa-4x" aria-hidden="true"></i>

                
                </div>
                <h4 class="text-uppercase mb-3 mt-3">graphic design</h4>
                <p class="text-black-50 lh-lg">Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
              </div>
            </div>
               <!-- section 2 in row -->   
               <div class="col-md-6 col-lg-4">
              <div class="feat ">
                <div class="icon-holder position-relative">
                  <i class="fa-solid fa-2 position-absolute bottom-0 number"></i>
                  <i class="fa fa-tv position-absolute bottom-0 icon fa-4x" aria-hidden="true" "></i>
                
                </div>
                <h4 class="text-uppercase mb-3 mt-3">graphic design</h4>
                <p class="text-black-50 lh-lg">Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
            </div>
            </div>
             <!-- section 3 in row--> 
             <div class="col-md-6 col-lg-4">
              <div class="feat ">
                <div class="icon-holder position-relative">
                  <i class="fa-solid fa-3 position-absolute bottom-0 number"></i>
                  <i class="fa-solid fa-plug  position-absolute bottom-0 icon fa-4x" aria-hidden="true"></i>
                
                </div>
                <h4 class="text-uppercase mb-3 mt-3">graphic design</h4>
                <p class="text-black-50 lh-lg">Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!--our work-->
      <div class="our-work text-center pb-5 pt-5">
        <div class="container pt-5 pb-5 ">
          <div class="main-title mt-5 mp-5 position-relative">
            <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/yellow-1.png">
            <h2>We Make This </h2>
            <p class="text-black-50  text-uppercase">prepare to be amazed</p>
          </div>
          <ul class="list-unstyled d-flex justify-content-center mp-5 mt-5 ">
            <li class=" active rounded-pill">All</li>
            <li>Design</li>
            <li >Code</li>
            <li >Apps </li>
          </ul>
          <div class="row p-5 gap-5 justify-content-md-center text-center">
        <?PHP if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="col-md-6 col-lg-3 col-sm-6">
           <h3>
            <a href = '<?php the_permalink()?>'>
          <?php the_title()?>
          </a>
           </h3>
           <span class="post-author"><?php the_author_posts_link()?></span> <i class="fa fa-user fa-fw"></i>
           <span class="post-date"><?php the_time('j ,y')?></span><i class="fa fa-calendar fa-fw"></i>
           <hr>
<?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail']);?>
<?php the_excerpt();?>
<span class="post-comments"><i class="fas fa-comments"></i>

<?php comments_popup_link('0comment','1 comment','% comments','comments_css','disabled')?></span>
<p class="categories">
          <i class="fas fa-tags"></i>  
           <?php the_category(',')?></p>
           <p class="post-tags">
           <?php if(has_tag()){
              the_tags();
            }
            else {
              echo "tags: no tags";
            } ?>
          </p> </div>
         <?php }//end while
               }//end if    
             
       ?>
       

      <?php  /*  <!-- section 1 in row -->  
        <
            
            
            <img src="http://localhost/wordpress/wp-content/uploads/2023/07/3.jpg" alt="" class="img-responsive img-thumbnail" />
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                 the visual form of a document or a typeface without relying on meaningful
                 content. Lorem ipsum may be used as a placeholder before final copy is available. </p>
           
          </div> 
    
      
           */?>
        
        
         
           <!-- pagination--> 
        
      <div class="mp-5 mt-5  row  post-pagination  ">
      <div class='col-lg-6 col-sm-6'>
      <?php  if(get_previous_posts_link()){
          previous_posts_link('<span class="main-btn rounded-pill float-start ">prev</span>');
        }
        else {echo '<span class="prev-span main-btn rounded-pill float-start ">prev</span>';} ?>
      
   </div>
   <div class='col-lg-6 col-sm-6'>
     <?php  if(get_next_posts_link()){
          next_posts_link('<span class="main-btn rounded-pill float-end">next</span>');
        }
        else {echo '<span class="next-span main-btn rounded-pill float-end">next</span>';}
        ?>
           </div>
     
      </div>



<div class="numbering-pagination "> 
  <?php echo numbering_pagination()?>
</div>




   
   
     
     
    
    <!--some stuff about us-->
    <div class="stuff pt-5">
      <div class="container  ">
        <div class="main-title mt-5 mb-5 text-center  ">
          <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/yellow-1.png">
          <h2>some stuff about us</h2>
          <p class="text-black-50  text-uppercase">the great team</p>
        </div>
       
        <p class="description  text-center mb-5 m-auto text-black-50">
          Donec rutrum congue leo eget malesuada. 
          Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
          Pellentesque in ipsum id orci porta dapibus. 
          Proin eget tortor risus. Donec sollicitudin molestie malesuada.
        </p>
       
      </div>
      <div class="row align-items-center">
       
         <!-- section 1 in row -->  
         <div class="col-lg-4 mb-4 text-center text-md-start   ">
          <div class="text " >
           <h3>Retiana Design</h3>
             <p class="text-black-50 fs-6">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. 
            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. </p>
             <p class="text-black-50 fs-6">
            Donec rutrum congue leo eget malesuada. 
            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. 
            Donec sollicitudin molestie malesuada.</p>
          </div>
            <a class="btn rounded-pill main-btn " href="#">ORDER ME ONE</a> 
          
        </div>
 <!-- section 2 in row -->  
 <div class=" col-lg-8 ">
  <div class="box mt-3 " >
    <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/screen.png" alt="" class="img-fluid">
    
  </div>
</div>
      </div>
      </div>
      <!--meet the team-->
      <div class="team pt-5 pb-5 text-center">
        <div class="main-title">
          <h3 class="text-center">
            Meet the Team
          </h3>
          <p class="text-center text-black-50 m-auto">
            Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
             Pellentesque in ipsum id orci porta dapibus.
             Proin eget tortor risus. Donec sollicitudin molestie malesuada.
          </p>
        </div>
  <!--team row-->
      
  <div class="row pt-5">
    <!-- section 1 in row -->  
    <div class="col-md-6 col-lg-3 col-sm-6">
      <div class="box mb-3 bg-white"  >
        <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/white.png" alt="" class="img-fluid">
      
<h4 class="text-light">Luke Skywalker</h4>
  <blockquote class="  text-center text-black-50" >
    “I don't understand how we got by those troops. I thought we were dead.“
  </blockquote>

      
     
      </div>
    </div>
  
    <!-- section 2 in row -->   
    <div class="col-md-6 col-lg-3 col-sm-6 ">
      <div class="box mb-3 bg-white" >
        <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/white.png" alt="" class="img-fluid">
        <h4 class="text-light">bi-Wan Kenobi</h4>
  <blockquote class="  text-center text-black-50" >
    “Your clones are very impressive. You must be very proud”
  </blockquote>
    </div>
    </div>
     <!-- section 3 in row--> 
     <div class="col-md-6 col-lg-3 col-sm-6">
      <div class="box mb-3 bg-white" >
        <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/white.png" alt="" class="img-fluid">

        <h4 class="text-light">Princess Leia</h4>
        <blockquote class="  text-center text-black-50" >
          “I don't know who you are or where you came from, but from now on you'll do as I tell you, okay?” 
        </blockquote>
      </div>
     </div>
      <!-- section 4 in row--> 
      <div class="col-md-6 col-lg-3 col-sm-6">
        <div class="box mb-3 bg-white" >
          <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/white.png" alt="" class="img-fluid">
          
          <h4 class="text-light">Yoda</h4>
        <blockquote class="  text-center text-black-50 " >
          “Do not assume anything Obi-Wan.
          Clear your mind must be if you are to discover the real villains behind this plot.”  
        </blockquote>

        </div>
       </div>
  </div>
      </div>
      <!--tech-->
      <div class="tech pb-5 pt-5">
        <div class="row text-center align-items-center">
          <div class="col-md-4 col-lg-2 col-sm-4 mt-3 mb-3">
<img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/tech1-1.png">
          </div>
          <div class="col-md-4 col-lg-2 col-sm-4 mt-3 mb-3">
            <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/tech2-1.png" alt="" class="img-fluid">
                      </div>
                      <div class="col-md-4 col-lg-2 col-sm-4 mt-3 mb-3">
                        <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/tech3-1.png" alt="" class="img-fluid">
                                  </div>
                                  <div class="col-md-4 col-lg-2 col-sm-4 mt-3 mb-3">
                                    <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/tech4-1.png" alt="" class="img-fluid">
                                              </div>
                                              <div class="col-md-4 col-lg-2 col-sm-4 mt-3 mb-3" >
                                                <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/tech1-1.png" alt="" class="img-fluid">
                                                          </div>
                                                          <div class="col-md-4 col-lg-2 col-sm-4 mt-3 mb-3" >
                                                            <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/tech2-1.png" alt="" class="img-fluid">
                                                                      </div>

        </div>

      </div>
    <!--start your project-->
    <div class="project d-flex justify-content-center align-items-center">
      <div class=" text-center text-light pb-5 pt-5 ">
        <h1 class="fw-bold">Start Your Project Now</h1>
        <p class="fs-6 text-white-50 mb-4">Leave your description and we start the engine.Don't worry,you can cancel anytime</p>
        <a class="btn rounded-pill main-btn" href="#">START PROJECT</a>
      </div>
            </div>
            <!--blog-->
      <div class="blog text-center">
        <div class="container  pt-5 pb-5">
          <div class="main-title mt-5 mp-5 position-relative ">
            <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/yellow-1.png">
            <h2>Read Our Blog </h2>
            <p class="text-black-50  text-uppercase">new stories</p>
          </div>
          <div class="row ">
            <!-- section 1 in row -->  
            <div class="col-md-6 col-lg-4 pt-5 pb-5">
                <div class="card" style="width: 18rem;">
                  <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/blog-1.png" class="card-img-top" alt="...">
                  <div class="card-body ">
                    <p class="text-black-50 fs-0.25">January 17,2017</p>
                    <p class="card-text">Some Awesome Blog Title Here</p>
                  </div>
                </div>
              </div>
          
          
            <!-- section 2 in row -->   
            <div class="col-md-6 col-lg-4 pt-5 pb-5">
              <div class="card" style="width: 18rem;">
                <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/blog-1.png" class="card-img-top" alt="...">
                <div class="card-body ">
                  <p class="text-black-50 fs-0.25">January 17,2017</p>
                  <p class="card-text">Some Awesome Blog Title Here</p>
                </div>
              </div>
            </div>
             <!-- section 3 in row--> 
             <div class="col-md-6 col-lg-4 pt-5 pb-5">
              <div class="card" style="width: 18rem;">
                <img src="http://127.0.0.1:8000/testWordPress/wp-content/uploads/2023/12/blog-1.png" class="card-img-top" alt="...">
                <div class="card-body ">
                  <p class="text-black-50 fs-0.25">January 17,2017</p>
                  <p class="card-text">Some Awesome Blog Title Here</p>
                </div>
              </div>
            </div>
        </div>
        <a class="btn rounded-pill main-btn align-items-center" href="#">MORE STORIES</a>
      </div>
      <!--mail-->
      <div class="mail pt-5 pb-5 text-center text-md-start  ">
      <div class="container ">
        <form class="row align-items-center"  >
        <div class="col-lg-3 col-md-6  ">
          <p class="w-100 fw-bold">Subscribe to our Newsletter: </p> 
        </div>
          <div class="col-lg-7 col-md-6 pb-3  ">
          <input type="email" name="email" placeholder="Enter email Address" class="bg-transparent ">
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <input type="submit" name="submit" class="btn rounded-pill w-100" >
        </div> 

        </form>
      </div>
    </div>
   

    <?php get_footer();?>

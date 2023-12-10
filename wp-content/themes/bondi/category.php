<?php get_header();?>
<div class='category-page'>
    <div class='row cat-bg p-5 m-5 justify-content-md-center text-center '>
    <div class="col-md-4 col-lg-4 col-sm-4">
<h1 class='cat-name'>
    <?php single_cat_title()?>
    </h1>
</div>
    <div class="cat-des col-md-4 col-lg-4 col-sm-4">
    <?php echo category_description()?>
</div>
<div class="cat-stat col-md-4 col-lg-4 col-sm-4"> 
    <p> statics </p>
</div>
</div>
<div class="row p-5 gap-5 justify-content-md-center text-center">
<div class="col-md-4 col-lg-4 col-sm-4">
        <?PHP if(have_posts()){
          while(have_posts()){?>
              
                           
          <?php  the_post(); ?>
            
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
          </p> 
        
         <?php }//end while
               }//end if    
             
       ?>
                     </div>
    <!-- sidebar -->   
            
  <div class="col-md-4 col-lg-4 col-sm-4">
            
            <?php
            if (is_active_sidebar('main-sidebar')){
             dynamic_sidebar('main-sidebar');}
            
            ?>    
                          </div>  
                          </div>
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
      </div>
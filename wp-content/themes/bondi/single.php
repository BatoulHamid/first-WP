<?php get_header();?>

 
        
      <!--our work-->
      <div class="our-work text-center pb-5 pt-5">
        <div class="container position-relative pt-5 pb-5 ">
          <div class="main-title mt-5 mp-5 position-relative">
            <img src="http://localhost/wordpress/wp-content/uploads/2023/07/yellow.png">
            <h2>We Make This </h2>
            <p class="text-black-50  text-uppercase">prepare to be amazed</p>
          </div>
          <ul class="list-unstyled d-flex justify-content-center mp-5 mt-5 ">
            <li class=" active rounded-pill">All</li>
            <li>Design</li>
            <li >Code</li>
            <li >Apps </li>
          </ul>
          <!-- breadcrumb-->
         <?php 
         include(get_template_directory().'/includes/breadcumb.php')
         ?>
          
        <?PHP if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="single-content p-5 gap-5 text-center">
            <?php edit_post_link('Edit <i class="fa fa-pen fa-fw"></i>');?> 
           <h3>
            <a href = '<?php the_permalink()?>'>
          <?php the_title()?>
          </a>
           </h3>
           <div class="row pt-5">
           <div class=" float-start align-items-center col-lg-6 col-sm-6"><span class="post-author"><?php the_author_posts_link()?></span> <i class="fa fa-user fa-fw"></i>
           <span class="post-date"><?php the_time('j ,y')?></span><i class="fa fa-calendar fa-fw"></i>
        </div>
        <div class=" float-end align-items-center col-lg-6 col-sm-6 ">     
<p class="categories ">
          <i class="fas fa-tags"></i>  
           <?php the_category(',')?></p>
           <p class="post-tags">
           <?php if(has_tag()){
              the_tags();
            }
            else {
              echo "tags: no tags";
            } ?>
          </p> </div></div>

<div  class="p-5"> <?php the_content();?> </div>

         <?php }//end while
               }//end if     
       ?>
        </div>
     
       
      <!-- author avatar -->
      
       <div class="row author">
       <div class="col col-md-3">
       <?php $avatar_arguments = array (                       //avatar arguments
         'class' => 'img-responsive img-thumbnail'
        );
       //get_avatar($id,$size,$default,$alt,$avatar_args) 
      echo get_avatar(get_the_author_meta('ID'), 120, '' ,'avatar image', $avatar_arguments);
       
       ?>
       </div>
      
         <!-- author info -->
        
       <div class="col col-md-9 author-info">
       <h4>
        <?php the_author_meta('first_name');?>
        <?php the_author_meta('last_name');?>
       <span class='nickname'> <?php the_author_meta('nickname');?></span>
              </h4>
              <?php 
              if(get_the_author_meta('description')) {?>
           <p class="desc">  <?php the_author_meta('description');?></p>
              
             <?php 
            } else{
              echo'there is no biography' ;
              } ?>
      </div>
       </div> <!-- author row end-->
       <p class="author-posts">
       posts count :<?php echo count_user_posts(get_the_author_meta('ID'));?>,    
      show author posts:<?php the_author_posts_link()?> 
            </p>   
         <!-- pagination--> 
        
      <div class="mp-5 mt-5 row  post-pagination  ">
        <div class='col-lg-6 col-sm-6'>
      <?php  if(get_previous_post_link()){
          previous_post_link('%link','<span class="main-btn rounded-pill  bottom-3 end-100"><i class="fa fa-chevron-left fa-lg"></i> prev: %title </span>');
        }
        else {echo '<span class="prev-span main-btn rounded-pill  bottom-3  ">previous post:none</span>';}?>
   </div>
   <div class='col-lg-6 col-sm-6'>
      <?php if(get_next_post_link()){
          next_post_link('%link','<span class="main-btn rounded-pill  bottom-3 "> next: %title <i class="fa fa-chevron-right fa-lg"></i></span>');
        }
        else {echo '<span class="next-span main-btn rounded-pill   bottom-3 ">next post:none</span>';}
        ?>
           </div>
       </div>
           
          </div> 
 
          
          <?php comments_template()?>
    
      <!-- similar posts -->
      
          <?php
         // wp_get_post_categories()
      //$category__in = wp_get_post_categories();
// The Query.
//$the_query_similar
wp_reset_postdata();
$posts_in_page = 3;

$args_similar  = array(
 // 'category__in' =>  get_the_category() ,
 'posts_per_page ' => 3 ,
 'category__in'=> wp_get_post_categories(get_queried_object_id()),
 'orderby' => 'rand',
  'post__not_in' => array (get_queried_object_id()),
  );

  $the_query_similar= new WP_Query ( $args_similar  );
  
// The Loop.
 
if ( $the_query_similar -> have_posts()) {

	while ( $the_query_similar -> have_posts()  && $i< $posts_in_page ) {
    echo ' <div class="similar-post"><ul>'; 
		$the_query_similar -> the_post();
  
		echo '<li>' ?>
    <h3>
    <a href = '<?php the_permalink()?>'>
  <?php the_title()?>
  </a>
   </h3> </li>
   </div>
   <?php $i++ ; ?>
   <?php
    
	echo '</ul> ';}}
 else {
	esc_html_e( 'Sorry, no posts matched your criteria.' );
}
// Restore original Post Data.
wp_reset_postdata();
?>
          



<?php get_footer();?>

<?php get_header();?>

<div class="container author-page">
<h1 class="text-center"><? the_author_meta('nickname') ?> Page</h1>
<div class="author-main-info">  
<div class="row">
<div class="col col-md-6">
       <?php $avatar_arguments = array (                       //avatar arguments
         'class' => 'img-responsive img-thumbnail avatar-author'
        );
       //get_avatar($id,$size,$default,$alt,$avatar_args) 
      echo get_avatar(get_the_author_meta('ID'), 200, '' ,'avatar image', $avatar_arguments);
       
       ?>
       </div>
      
         <!-- author info -->
        
       <div class="col col-md-6 author-info">
      <ul class="list-unstyled">
       <li> first name:  <?php the_author_meta('first_name');?></li>
      <li> last name:  <?php the_author_meta('last_name');?> </li>
       <li> nickname:  <?php the_author_meta('nickname');?></li>
    </ul> 
    <hr>
              <?php 
              if(get_the_author_meta('description')) {?>
           <p class="desc">  <?php the_author_meta('description');?></p>
              
             <?php 
            } else{
              echo'there is no biography' ;
              } ?>
      </div>
       </div> <!-- author row end-->
           
<div class='author-elements'>
   <div class="row ">    
<div class="col col-md-3">
    <div class="author-posts">posts <span>
    <?php echo count_user_posts(get_the_author_meta('ID'));?>
    </span>        
</div></div>

<div class="col col-md-3">
<div>comments
    <span>
        <?php 
        $author_commants_args= array (
            'user_id' => get_the_author_meta('ID'),
            'count' => true
        );
        $comments_count = get_comments( $author_commants_args);
      echo   $comments_count;
        ?>
    </span>
</div>    
 </div>
<div class="col col-md-3"> element3 </div>
<div class="col col-md-3"> element4</div>
            </div>
      </div>

<!-- author posts -->

<?php 
//query for n.o.posts
$num_of_posts = 5;
$author_query_args= array (
  'author'         => get_the_author_meta('ID'),
  'posts_per_page' => $num_of_posts
);
$author_posts = new WP_Query($author_query_args);
$all_author_posts= count_user_posts(get_the_author_meta('ID'));
?>
<h2>Latest <? if($num_of_posts>$all_author_posts) {echo "";}
else {echo $num_of_posts;}?> of <?php  the_author_meta('nickname') ;?> posts</h2>
        <?PHP if($author_posts->have_posts()){
          while($author_posts->have_posts()){
            $author_posts->the_post(); ?>
             <div class="author-main-post">
            <div class="row ">
           
             <div class="col-md-3 ">
             <?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail']);?>
             </div>

            <div class="col-md-9">
              
           <h3>
            <a href = '<?php the_permalink()?>'>
          <?php the_title()?>
          </a>
           </h3>
          
           <span class="post-date"><?php the_time('j ,y')?></span><i class="fa fa-calendar fa-fw"></i>
          

<?php the_excerpt();?>
<span class="post-comments"><i class="fas fa-comments"></i>

<?php comments_popup_link('0comment','1 comment','% comments','comments_css','disabled')?></span>
<p class="categories">
          <i class="fas fa-tags"></i>  
           <?php the_category(',')?></p>
           </div>
           <hr>
         
          </div>
          </div>
         <?php }//end while
               }//end if  
        wp_reset_postdata();   
       ?>
      <!-- latest comments --> 
       <div>
   <?php 
$comments_per_page = 3 ;
$comments_arguments= array (
'user_id'      => get_the_author_meta('ID'),
'status'       => 'approve',
'number'       => $comments_per_page,
'post_type'    => 'post'
);
$comments= get_comments($comments_arguments);

if($comments){ ?>
 <!-- //print the h3 --> 
<h3>
<?php 
if ( $comments_count >= $comments_per_page){
  echo "the latest ".$comments_per_page ." comments"; //return to row 53
}
else{
  echo "the latest comments";
}
?>
 

</h3>
<?php
  foreach($comments as $comment){ 
    ?>
 <!-- get title with link -->     
 <div class="author-comments">
 <a href="<?php echo get_permalink($comment->comment_post_ID)?>">
 <div class="post-title-comments">
<?php echo get_the_title($comment-> comment_post_ID);?>
  </a>
  </div> 
<!-- get the date -->
<div class="date-comments"> 
<?php echo $comment->comment_date   ?>
  </div>
  
<!-- get the content --> 
<div class="content-comments"> 
<?php echo $comment->comment_content  ?>
  </div> </div><hr>
<?php
  }
}
else {
  echo 'this author has no comments';
}
?>
  </div>

<?php get_footer();?>
         
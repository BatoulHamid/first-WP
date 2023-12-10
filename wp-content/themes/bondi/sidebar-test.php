
<?php 
// comments count
$comments_args = array(
    'status'=> 'approve'
);                                              // only approved
$comments_count = 0 ;                            // start from zero
$all_comments = get_comments($comments_args);    //all comments count
foreach($all_comments as $comment) {
$post_id = $comment-> comment_post_ID ;     //get post id of comment
if(! in_category('test' , $post_id)){       //post is not in this category
    continue;
}
 $comments_count++   ;
}

// posts count
$cat = get_queried_object(); //get object
$posts_count = $cat ->count; //get posts count



?>



<div class="sider-category">
<div class="widget">
<h3 class="widget-title">statics</h3>  
<div class="widget-content">
    <ul>
        <li>
            <span> comments count <span> : <?php echo $comments_count?></li>
        <li>
        <span> posts count <span> : <?php echo $posts_count?>
        </li>
    </ul>
</div>
</div>
<div class="widget">
<h3 class="widget-title">Latest uncategorized posts</h3>  
<div class="widget-content">
    <ul>
        <?php 
        $posts_args = array (
            'posts_per_page' => 3,            //max posts
            'cat'            => 1             //category id
        );
        $query= new WP_Query($posts_args);
            if ($query -> have_posts()){
                while($query -> have_posts()){
                 $query -> the_post();
                 ?>
                 <li>
                    <a target="_blank" href="<?php the_permalink();?>">
                <?php the_title();?>
                </a>
                 </li>
                 <?php
                }//end while

            }//end if
        
        
        ?>


    </ul>



</div>
</div>
<div class="widget">
<h3 class="widget-title">hot posts by comments</h3>  
<div class="widget-content"> 
<ul>
        <?php 
        $posts_args = array (
            'posts_per_page' => 1,            //max posts
            'orderby'        => 'comment_count'             //category id
        );
        $query= new WP_Query($posts_args);
            if ($query -> have_posts()){
                while($query -> have_posts()){
                 $query -> the_post();
                 ?>
                 <li>
                    <a target="_blank" href="<?php the_permalink();?>">
                <?php the_title();?>
                </a>
                <hr>
                <span> comments count:
                <?php comments_popup_link('0comment','1 comment','% comments','comments_css','disabled')?>
                <span> </li>
                 <?php
                }//end while

            }//end if
        
        
        ?>

        </lu>
</div>       <!-- end content -->
</div>       <!-- end hot posts widget -->
</div>
<?php
if(comments_open()){
   echo('<h3 class="bondi-comments-h">');
    comments_number('no comments','1 comment','% comments');
   echo('</h3>');
    echo('<ul class="bondi-comments-list">');
    $comments_arguments=array(
        'max_depth'=>4,
        'style' => 'ul',
        'type'=>'comment',
        'per_page'=>7,
        'avatar_size'=>64,
        'reverse_top_level' => true
    );
    wp_list_comments($comments_arguments);
echo('</ul');
/*$commentform_args=array(
    'fields'=>array('author'=>'<div class="form-groub"><label>your name</label><input class="form-control" type="text"></div>',
    'email'=>'<div class="form-groub"><label>your mail</label><input class="form-control" type="text"></div>',
    'url'=>'<div class="form-groub"><label>your site</label><input class="form-control" type="text"></div>'),
    'comment_field'=>'<input class="form-control" type="textarea">');*/
    $commentform_args=array(
    'class_form'=>'form-control',
    'class_submit'=>'main-btn',
     'comment_notes_before' => '' ,
     'title_reply_to'=>' Reply to %s',
     'title_reply'=>'leave a comment'

    );

comment_form($commentform_args);
}
else {
    echo ('comments turned off');
}
?>
<?php $text = $di->get("commentsController")->get($_GET['id']); ?>

<h2 class="center">Edit Comment</h2>

    <form action="<?=$app->url->create('edit_comment')?>" method="post">

    <input type="hidden" name="id" value="<?=$_GET['id']?>">

    <div class="compose-comment">
        <textarea class="comment-text-large" name="comment" required="required"><?=$text?></textarea>
    </div>

    <input class="comment-post" name="submit" type="submit" value="Submit">

</form>

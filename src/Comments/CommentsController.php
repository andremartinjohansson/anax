<?php

namespace Anax\Comments;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

class CommentsController implements AppInjectableInterface
{
    use AppInjectableTrait;

    public function add($comment)
    {
        $this->app->comments->addComment($comment);
        $this->app->redirect("comments");
    }

    public function delete($id)
    {
        $this->app->comments->deleteComment($id);
        $this->app->redirect("comments");
    }

    public function edit($id, $text)
    {
        $this->app->comments->editComment($id, $text);
        $this->app->redirect("comments");
    }

    public function get($id)
    {
        return $this->app->comments->getComment($id);
    }

    public function addCommentSection()
    {
        $url = $this->app->url->create('post_comment');
        $del = $this->app->url->create('delete_comment');
        $edit = $this->app->url->create('preview');
        $this->app->comments->commentSection($url, $del, $edit);
    }
}

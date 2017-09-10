<?php

namespace Anax\Comments;

class Comments
{

    private $data = array();

    public function __construct()
    {
        session_start();

        if (isset($_SESSION['comments']) == true) {
            $this->data = $_SESSION['comments'];
        }
    }

    public function getComment($id)
    {
        foreach ($this->data as $comment) {
            if ($comment['id'] == $id) {
                $text = $comment['comment'];
            } else {
                $text = "";
            }
        }
        // var_dump($text);
        return $text;
    }

    public function getAllComments()
    {
        // var_dump($this->data);
        return $this->data;
    }

    public function addComment($vars)
    {
        $input = array(
            'id' => $vars['id'],
            'article_id' => $vars['article'],
            'comment_author' => $vars['comment_author'],
            'email' => $vars['email'],
            'comment' => $vars['comment']);

        $input['id'] = count($this->data);

        array_push($this->data, $input);
        $this->sync();
    }

    public function deleteComment($id)
    {
        foreach ($this->data as $comment) {
            if ($comment['id'] == $id) {
                unset($this->data[$id]);
                $this->sync();
            }
        }
    }

    public function editComment($id, $text)
    {
        $this->data[$id]['comment'] = $text;
        // var_dump($this->data[$id]);
        $this->sync();
    }

    public function commentSection($post, $del, $edt)
    {
        $comments = $this->getAllComments();

        $htmlSection = "";

        foreach ($comments as $comment) {
            $author = $comment['comment_author'];
            $content = $this->bbcode2html($comment['comment']);
            $delete = $del . "?id=" . $comment['id'];
            $edit = $edt . "?id=" . $comment['id'];
            $htmlSection .=
                <<<EOD
                <div class="comment">
                <address class="vcard author">
                Av <em>{$author}</em>
                </address>

                <div class="entry-content">
                {$content}
                </div>
                <div class="comment-actions">
                <p><a href="{$edit}">Redigera</a></p>
                <p><a href="{$delete}">Ta bort</a></p>
                </div>
                </article>
                </div>
EOD;
        }

        $htmlSection .=
            <<<EOD
            <div class="leave-comment">
            <h3>Skriv en kommentar</h3>
            <form action="{$post}" method="post">
            <input type="hidden" name="comment_author" value="Anonymous">
            <div class="compose-comment">
            <textarea class="comment-text" name="comment" required="required"></textarea>
            <input class="comment-email" type="email" name="email" value="" required="required" placeholder="Email">
            </div>
            <input class="comment-post" name="submit" type="submit" value="Posta">
            </form>
            </div>
EOD;
        echo $htmlSection;
    }

    private function sync()
    {
        $_SESSION['comments'] = $this->data;
    }

    private function bbcode2html($bbtext)
    {

        $bbtags = array(
            '[heading1]' => '<h1>','[/heading1]' => '</h1>',
            '[heading2]' => '<h2>','[/heading2]' => '</h2>',
            '[heading3]' => '<h3>','[/heading3]' => '</h3>',
            '[heading4]' => '<h4>','[/heading4]' => '</h4>',
            '[h1]' => '<h1>','[/h1]' => '</h1>',
            '[h2]' => '<h2>','[/h2]' => '</h2>',
            '[h3]' => '<h3>','[/h3]' => '</h3>',
            '[h4]' => '<h4>','[/h4]' => '</h4>',

            '[paragraph]' => '<p>','[/paragraph]' => '</p>',
            '[para]' => '<p>','[/para]' => '</p>',
            '[p]' => '<p>','[/p]' => '</p>',
            '[left]' => '<p style="text-align:left;">','[/left]' => '</p>',
            '[right]' => '<p style="text-align:right;">','[/right]' => '</p>',
            '[center]' => '<p style="text-align:center;">','[/center]' => '</p>',
            '[justify]' => '<p style="text-align:justify;">','[/justify]' => '</p>',

            '[bold]' => '<span style="font-weight:bold;">','[/bold]' => '</span>',
            '[italic]' => '<span style="font-weight:bold;">','[/italic]' => '</span>',
            '[underline]' => '<span style="text-decoration:underline;">','[/underline]' => '</span>',
            '[b]' => '<span style="font-weight:bold;">','[/b]' => '</span>',
            '[i]' => '<span style="font-style:italic;">','[/i]' => '</span>',
            '[u]' => '<span style="text-decoration:underline;">','[/u]' => '</span>',
            '[break]' => '<br>',
            '[br]' => '<br>',
            '[newline]' => '<br>',
            '[nl]' => '<br>',

            '[unordered_list]' => '<ul>','[/unordered_list]' => '</ul>',
            '[list]' => '<ul>','[/list]' => '</ul>',
            '[ul]' => '<ul>','[/ul]' => '</ul>',

            '[ordered_list]' => '<ol>','[/ordered_list]' => '</ol>',
            '[ol]' => '<ol>','[/ol]' => '</ol>',
            '[list_item]' => '<li>','[/list_item]' => '</li>',
            '[li]' => '<li>','[/li]' => '</li>',

            '[*]' => '<li>','[/*]' => '</li>',
            '[code]' => '<code>','[/code]' => '</code>',
            '[preformatted]' => '<pre>','[/preformatted]' => '</pre>',
            '[pre]' => '<pre>','[/pre]' => '</pre>',
        );

        $bbtext = str_ireplace(array_keys($bbtags), array_values($bbtags), $bbtext);

        $bbextended = array(
            "/\[url](.*?)\[\/url]/i" => "<a href=\"http://$1\" title=\"$1\">$1</a>",
            "/\[url=(.*?)\](.*?)\[\/url\]/i" => "<a href=\"$1\" title=\"$1\">$2</a>",
            "/\[email=(.*?)\](.*?)\[\/email\]/i" => "<a href=\"mailto:$1\">$2</a>",
            "/\[mail=(.*?)\](.*?)\[\/mail\]/i" => "<a href=\"mailto:$1\">$2</a>",
            "/\[img\]([^[]*)\[\/img\]/i" => "<img src=\"$1\" alt=\" \" />",
            "/\[image\]([^[]*)\[\/image\]/i" => "<img src=\"$1\" alt=\" \" />",
            "/\[image_left\]([^[]*)\[\/image_left\]/i" => "<img src=\"$1\" alt=\" \" class=\"img_left\" />",
            "/\[image_right\]([^[]*)\[\/image_right\]/i" => "<img src=\"$1\" alt=\" \" class=\"img_right\" />",
        );

        foreach ($bbextended as $match => $replacement) {
            $bbtext = preg_replace($match, $replacement, $bbtext);
        }

        return $bbtext;

    }
}

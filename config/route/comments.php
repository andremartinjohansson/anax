<?php
$app->router->add("comments", function () use ($app) {
    $app->view->add("comments");
    $app->renderPage([
        "title" => "Comments"
    ]);
});

$app->router->add("preview", function () use ($app) {
    $app->view->add("edit_comment");

    $app->renderPage([
        "title" => "Edit Comment"
    ]);
});

$app->router->add("post_comment", function () use ($app) {
    $app->commentsController->add($_POST);
});

$app->router->add("delete_comment", function () use ($app) {
    $app->commentsController->delete($_GET['id']);
});

$app->router->add("edit_comment", function () use ($app) {
    $app->commentsController->edit($_POST['id'], $_POST['comment']);
});

<?php
  class PostsController {
    public function show() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }
  }
?>
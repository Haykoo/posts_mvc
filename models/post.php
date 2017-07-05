<?php
  class Post {
    public $id;
    public $title;
    public $textarea;
    public $image;

    public function __construct($id, $title, $textarea, $image) {
      $this->id      = $id;
      $this->title  = $title;
      $this->textarea = $textarea;
      $this->image = $image;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM news');
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['ID'], $post['Title'], $post['Textarea'], $post['Image']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM news WHERE id = :id');
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['ID'], $post['Title'], $post['Textarea'], $post['Image']);
    }
  }
?>
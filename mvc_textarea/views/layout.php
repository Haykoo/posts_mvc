<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php require_once('routes.php'); ?>

    <header>
      <!-- <a href='mvc_textarea'>Home</a> -->
      <center><input type="text" id="title" name="title" placeholder="Enter Your title,,,"><br>
      <textarea name="textarea" id="textarea" cols="50" rows="20" placeholder="Write Your post here,,,"></textarea><br>
      <input type="file" name="image" id="image"><br>
      <a href='?controller=posts&action=show'>ADD</a></center>      
    </header>    
  <body>
<html>
<p>Here is a list of all posts:</p>

<?php foreach($posts as $value) { ?>
  <div id = "<?php .echo $value->id. ?>" style="width:800px;height:200px;background-color:black;margin:10px auto">
  <h1 style='color:white;font-size:25px;width:500px;float:left;margin-left:15px' contenteditable>"<?php .echo $value->title. ?>"</h1>
  <p style='color:white; width:500px;float:left;margin-left:15px'contenteditable>"<?php .echo $value->textarea]. ?>"</p>
  <input class='delete' value='Delete' type='button' style='margin-top:30px;margin-left:65px;width:50px;height:25px'>;
  <input class='edit' value='Edit' type='button' style='width:50px;height:25px;margin-left:120px'>
  <img style='width:220px;height:140px;float:right' src='images/"<?php .echo $value->image. ?>"'>    
  </div>
<?php } ?>
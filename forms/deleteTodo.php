<?php
  $text = $_POST['text'];
  DB::delete($id,$text);

  header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
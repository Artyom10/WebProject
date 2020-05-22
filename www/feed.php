<!DOCTYPE html>
<html>
 <head>
 <?php 
 $title = "Обратная связь";
 require_once "blocks/head.php";
 ?>
 </head>
 <body>
   <?php require_once "blocks/header.php" ?>

<div id="wrapper">
  <div id="leftCol">
    <input type="text" name="name" placeholder="Имя" id="name"><br>
    <input type="text" name="email" placeholder="Email" id="email"><br>
    <input type="text" name="subject" placeholder="Тема сообщения" id="subject"><br>
    <textarea name="message" id="message"></textarea><br>
    <input type="button" name="done" id="done" value="отправить">
  </div>
   <?php require_once "blocks/rightCol.php" ?>
</div>

 <?php require_once "blocks/footer.php" ?>
   
 </body>
 </html>

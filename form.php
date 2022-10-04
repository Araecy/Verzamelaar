<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/forms.css">
  <title>Document</title>
</head>

<body>

  <style>

  </style>

  <a href="javascript:history.back()">Go Back</a>
  <div id="formContainer">
    <form action="/*php file*/">
      <label for="auther" class="not"> auther : </label>
      <input type="text" name="auther" id="auther" class="not" value="user_name from db" disabled>

      <!-- image upload sys + database wait for kewin to make db -->
      <label for="fileUpload">upload file : </label>
      <input type="file" name="fileUpload" id="description">

      <label for="description">description : </label>
      <textarea rows="5" cols="30" name="description" id="description">Enter details here...</textarea>

      <label for="type">character : </label>
      <input type="text" name="character" id="character">

      <label for="type">series : </label>
      <input type="text" name="series" id="series">

      <label for="type">material : </label>
      <input type="text" name="material" id="material">

      <label for="type">size : </label>
      <input type="text" name="size" id="size">

      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>
</body>

</html>


<?php
?>
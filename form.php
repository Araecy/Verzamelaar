<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <style>
    #formContainer>form {
      display: flex;
      flex-direction: column;
      align-content: flex-start;
      align-items: flex-start;
      text-align: left;;
    }
    input[pain] {
      width: 150px;
    }
  </style>

  <a href="javascript:history.back()">Go Back</a>
  <div id="formContainer">
    <form action="/*php file*/">
      <input type="file" name="fileToUpload" id="fileToUpload">

      <label for="description">description : </label>
      <input type="paragaph" name="description" id="description">

      <label for="type">type : </label>
      <input type="text" name="type" id="type">

      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>
</body>

</html>


<?php
?>
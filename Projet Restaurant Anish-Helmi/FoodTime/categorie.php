<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="CSSfood.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>FoodTime</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
    <img width="100%" src="banniere.png">
   <?php
    require("navbar.php")
   ?>
    <br>
    <h1 align=center> Voici nos différentes catégories</h1>

    <center>
    <div class="container-fluid" style="text-align: center;">
      <div class="row">
        <div class="col-5 col-md-3"><button<a class="btn btn-success" role="button"><a class="text-white"> <img src="coca.PNG" height="150" width="230" class="img-fluid img-thumbnail"></a>Coca</button></div>
        <div class="col-5 col-md-3"><button<a class="btn btn-success" role="button"><a class="text-white"> <img src="fanta.PNG" height="150" width="230" class="img-fluid img-thumbnail"></a>Fanta</button></div>
        <div class="col-5 col-md-3"><button<a class="btn btn-success" role="button"><a class="text-white"> <img src="sprite.png" height="150" width="230" class="img-fluid img-thumbnail"></a>Sprite</button></div>
      </div>
      <br>
      </center

      <div class="row">
        <div class="col-12 col-md-4"><img<a class="btn btn-success" role="button"><a class="text-white"> <img src="menu5.png" height="350" width="470" class="img-fluid img-thumbnail"></a>Menu1</img></div>
        <div class="col-12 col-md-4"><button<a class="btn btn-success" role="button"><a class="text-white"> <img src="menu6.png" height="350" width="470" class="img-fluid img-thumbnail"></a>Menu2</button></div>
        <div class="col-12 col-md-4"><button<a class="btn btn-success" role="button"><a class="text-white"> <img src="menu3.png" height="350" width="470" class="img-fluid img-thumbnail"></a>Menu3</button></div>
      </div>
    </div>
</body>
</html>

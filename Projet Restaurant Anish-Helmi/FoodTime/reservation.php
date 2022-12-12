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
      <div class="thumbnail">
          <form....>
              <fieldset>
          </form>
            <img width="100%" src="banniere.png">
      </div>
            <?php
              require("navbar.php");
            ?>
    <br>
    <?php
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>TABLE RESERVATION</title>
            <link href="assets/css/bootstrap.css" rel="stylesheet" />
            <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <link href="assets/css/custom-styles.css" rel="stylesheet" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        </head>
        <body>
            <div id="wrapper">
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div id="page-wrapper" >
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-header">TABLE RESERVATION</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">PERSONAL INFORMATION</div>
                                    <div class="panel-body">
                                        <form action="" name="form" method="post">

                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="fname" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" name="lname" class="form-control" required>
                                            </div>


                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input name="phone" type ="text" class="form-control" required>
                                            </div>
                                    </div>
                                </div>
                            </div>

                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="tme" type ="time" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Heure</label>
                                                <input name="dte" type ="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="well">


                                          <input type="hidden" name="cd" value="<?php echo $Random_code; ?>" />
                                          <input type="submit" name="submit" class="btn btn-primary" value="Reserve">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>




    </p>
  </div>
</div>

</body>
</html>

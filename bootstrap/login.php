<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Learning</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse" style="margin:0; border-radius:0">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-Learning</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li> -->
            <li><a href="page/home.php?page=materi">Home</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Material <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="page/home.php">Pemrograman Internet</a></li>
                <li><a href="#">Sistem Basis Data</a></li>
                <li><a href="#">Management Proyek</a></li>
              </ul>
            </li> -->
            <!-- Individual -->
            <!-- <li class="dropdown"> -->
            <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Individual <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tugas Mandiri</a></li>
              </ul>
            </li> -->

            <!-- Group -->
           <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Group <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Chatting</a></li>
                <li><a href="#">Team Activity</a></li>
              </ul>
            </li> -->

            <!-- Penilaian-->
           <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Penilaian <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Mandiri</a></li>
                <li><a href="#">Team</a></li>
              </ul>
            </li> -->

          </ul>
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default" >Search</button>
          </form> -->
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search">
            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Login</button>
          </form>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container-fluid -->
  </nav>

    <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
      <!-- Indicators -->
    <!--   <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        
      </ol> -->

      <!-- Wrapper for slides -->
      <!-- <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slide-1.jpg" style="width:100%" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="img/slide-1.jpg" style="width:100%" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="img/slide-3.jpg" style="width:100%" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
      </div> -->

      <!-- Controls -->
      <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->


    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Form Login</h4>
          </div>
          <div class="modal-body">
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" id="sizing-addon1"></span></span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
            </div><br>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock" id="sizing-addon1"></span></span>
              <input type="text" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
            </div>

          </div> -->
    <div class="pager" style="padding-top: 30px;padding-left:500px; padding-right: 500px" id="form-signin">
      <form class="form-signin" action="model/login.php" method="POST">
        <h2 class="form-signin-heading">E-Learning</h2>
        <p><label for="inputEmail" class="sr-only">Username</label></p>
        <p><input type="text" name="username" class="form-control" placeholder="Username" required autofocus></p>
        <p><label for="inputPassword" class="sr-only">password</label></p>
        <p><input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required></p>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>
    </div> <!-- container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
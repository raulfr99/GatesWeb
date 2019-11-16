<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Empleo</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../res/lib/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../res/lib/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../res/lib/fontawesome/css/all.min.css">
  <script src="res/jquery.min.js"></script>

<script src="res/morris/raphael-min.js"></script>
<script src="res/morris/morris.js"></script>
  <link rel="stylesheet" href="res/morris/morris.css">
  <link rel="stylesheet" href="res/morris/example.css">

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Empleo <sup><small><span class="label label-primary"></span></small></sup> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
<?php
$u=null;
if(isset($_SESSION["admin_id"]) && $_SESSION["admin_id"]!=""):
  $u = UserData::getById($_SESSION["admin_id"]);
?>
         <ul class="nav navbar-nav">
            </ul>
          <ul class="nav navbar-nav side-nav">
          <li><a href="./"></i> Inicio</a></li>
          <li><a href="index.php?view=products"></i> Mis Profesiones</a></li>
          <li><a href="index.php?view=sells"></i> Servicios</a></li>
          <li><a href="index.php?view=clients"></i> Clientes</a></li>
          <li><a href="index.php?view=categories"></i> Categorias</a></li>
          <?php if($u->is_admin):?>
          <li><a href="index.php?view=users"></i> Mi usuario </a></li>
        <?php endif;?>
          </ul>
<?php endif;?>
<?php if(isset($_SESSION["admin_id"]) && $_SESSION["admin_id"]!=""):?>
<?php
$u=null;
if($_SESSION["admin_id"]!=""){
  $u = UserData::getById($_SESSION["admin_id"]);
  $user = $u->name." ".$u->lastname;

  }?>
          <ul class="nav navbar-nav navbar-right navbar-user">


            <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo $user; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=configuration">Configuracion</a></li>
          <li><a href="logout.php">Salir</a></li>
        </ul>
        </li>
        </ul>
<?php else:?>
<?php endif; ?>




        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

<?php
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
if(isset($_SESSION["admin_id"])){
  View::load("index");
}else{
  Action::execute("login",array());
}

?>



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="res/bootstrap3/js/bootstrap.min.js"></script>

  </body>
</html>

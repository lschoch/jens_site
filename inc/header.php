<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <header class="page-header">
        <ul class="nav nav-pills pull-right">
          <?php switch($exclude) {
            case "home":
              //echo '<li><a href="index.html">Home</a></li>';
              echo '<li><a href="profile.php">Profile</a></li>';
              echo '<li><a href="calendar.php">Calendar</a></li>';
              echo '<li><a href="resources.php">Resources</a></li>';
              break;
           case "profile":
             echo '<li><a href="index.php">Home</a></li>';
             //echo '<li><a href="profile.php">Profile</a></li>';
             echo '<li><a href="calendar.php">Calendar</a></li>';
             echo '<li><a href="resources.php">Resources</a></li>';
             break;
         case "calendar":
             echo '<li><a href="index.php">Home</a></li>';
             echo '<li><a href="profile.php">Profile</a></li>';
             //echo '<li><a href="calendar.php">Calendar</a></li>';
             echo '<li><a href="resources.php">Resources</a></li>';
             break;
         case "resources":
             echo '<li><a href="index.php">Home</a></li>';
             echo '<li><a href="profile.php">Profile</a></li>';
             echo '<li><a href="calendar.php">Calendar</a></li>';
             //echo '<li><a href="resources.php">Resources</a></li>';
             break;
         default:
           echo '<li><a href="index.php">Home</a></li>';
           echo '<li><a href="profile.php">Profile</a></li>';
           echo '<li><a href="calendar.php">Calendar</a></li>';
           echo '<li><a href="resources.php">Resources</a></li>';
           break;
         }?>
        </ul>
        <h3>Mrs. Schoch</h3>
      </header>
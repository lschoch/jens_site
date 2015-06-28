<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dual Cred Eng: profile</title>
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
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="profile.php">Profile</a></li> -->
            <li><a href="calendar.php">Calendar</a></li>
            <li><a href="resources.php">Resources</a></li>
        </ul>
        <h3>Dual Credit English</h3>
    </header>

    <h4>Student Profile</h4>
    <br>
    <form  id="profile_form" action="profile_process.php?submit=true" method="post" role="form">
        <!-- <br><br> -->
        <div class="form-group">
                <input type="submit" class="btn btn-info"></input>
                <input type="reset"  value="Reset" class="btn btn-info reset_btn" ></input>
        </div>
        <div class="form_block">  
            <div class="form-group">
                <label for="first">First name</label>
                <input type="text" class="form-control" id="first" name="first" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="last">Last name</label>
                <input type="text" class="form-control" id="last" name="last" placeholder="Enter last name">
            </div>
            <label>Telephone</label>
            <div class="form-group tab10">
                <label for="homtel">Home</label>
                <input type="tel" class="form-control" id="homtel" name="homtel" placeholder="Enter home telephone number">
            </div>
            <div class="form-group tab10">
                <label for="mobtel">Mobile</label>
                <input type="tel" class="form-control" id="mobtel" name="mobtel" placeholder="Enter mobile telephone number">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
            </div>
        </div><!-- end form-block -->
    <!-- <br> -->
        <div class="form_block">
            <h4>Class schedule</h4>
            <div class="tab10">
                <div class="form-group">
                    <label for="per1">First period</label>
                    <select class="form-control" id="per1" name = "per1">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="per2">Second period</label>
                    <select class="form-control" id="per2" name="per2">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="per3">Third period</label>
                    <select class="form-control" id="per3" name="per3">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
                <div class="form-group">        
                    <label for="per4">Fourth period</label>
                    <select class="form-control" id="per4" name="per4">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="per5">Fifth period</label>
                    <select class="form-control" id="per5" name="per5">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="per6">Sixth period</label>
                    <select class="form-control" id="per6" name="per6">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="per7">Seventh period</label>
                    <select class="form-control" id="per7" name="per7">
                        <option>Select</option>
                        <option>Advanced Modeling</option>
                        <option>Art</option>
                        <option>Business Math</option>
                        <option>Chemistry 3</option>
                        <option>Economics</option>
                        <option>Etymology</option>
                        <option>French 3</option>
                        <option>French 4</option>
                        <option>Government</option>
                        <option>Novels</option>
                        <option>Spanish 3</option>
                        <option>Spanish 4</option>
                        <option>Yearbook</option>
                    </select>
                </div>
            </div><!-- end class="tab10" -->
        </div><!-- end form-block -->
        <div class="form-group">
                <input type="submit" class="btn btn-info"></input>
                <input type="reset" value="Reset" class="btn btn-info reset_btn" ></input>
        </div>
    </form>
<br>

<?php 
    include("inc/footer.php"); 
?>
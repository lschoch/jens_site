<?php
$title = "Dual Cred Eng: profile";
include("inc/header.php");
?>

<body>
    <!-- request_ID modal -->
    <div  id="request_ID" class="modal fade"  role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" id="xclose" class="close" data-dismiss="modal" data-target="#request_ID">&times;</button>
                    <h4 class="modal-title center">Your Student ID will be sent to you by email.</h4>
                </div>
                <div class="modal-body">
                    <form id="mod_form" class="form_block center" action="mod_form_process.php" method="post" role="form">
                        <div id="mod_form_group" class="form-group inline">
                            <div class="form-group">
                                <label class="sr-only" for="mod_first">First Name</label>
                                <input type="text" class="form-control" id="mod_first" name="mod_first" required placeholder="First Name"> 
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="mod_last">Last Name</label>
                                <input type="text" class="form-control" id="mod_last" name="mod_last" required placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email address</label>
                                <input type="email" class="form-control" id="mod_email" name="mod_email" required placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit_modal" id="submit_modal" class="btn btn-info" value="Send me my Student ID">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end request_ID modal-->

    <div class="container">
        <form  id="profile_form" action="profile_process.php" method="post" role="form">
            <div class="form_block center">
                <div class="form-group inline">
                    <h3>Student Profile Form</h3>
                    <label for="student_id">Enter your Student ID to begin</label>
                    <input type="password" class="form-control" id="student_id" name="student_id" placeholder="Student ID">
                </div>
                <div class="form-group">
                <label>Be sure to save your changes</label>
                <label>with the "Submit" button.</label>
                </div>
                <div class="form-group">
                    <label for="request">Don't know your ID?</label><br>                  
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#request_ID" id="request">Request ID</button>
                </div>
            </div>
            <div class="form_block">
                <div class="row">
                    <div class="col-sm-6">                
                        <div class="form-group">
                            <label for="first">First name</label>
                            <input type="text" class="form-control disable" id="first" name="first" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="last">Last name</label>
                            <input type="text" class="form-control disable" id="last" name="last" placeholder="Enter last name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="homtel">Home Telephone</label>
                            <input type="tel" class="form-control disable" id="homtel" name="homtel" placeholder="Enter home tel. number">
                        </div>
                        <div class="form-group">
                            <label for="mobtel">Mobile Telephone</label>
                            <input type="tel" class="form-control disable" id="mobtel" name="mobtel" placeholder="Enter mobile tel. number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control disable" id="email" name="email" placeholder="Enter email address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form_block">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Class schedule</h4>
                            <div class="form-group">
                                <label for="per1">First period</label>
                                <select class="form-control disable" id="per1" name = "per1">
                                    <option>Select</option>
                                    <option>Adv Modeling</option>
                                    <option>Art</option>
                                    <option>Bus Math</option>
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
                                <select class="form-control disable" id="per2" name="per2">
                                    <option>Select</option>
                                    <option>Adv Modeling</option>
                                    <option>Art</option>
                                    <option>Bus Math</option>
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
                                <select class="form-control disable" id="per3" name="per3">
                                    <option>Select</option>
                                    <option>Adv Modeling</option>
                                    <option>Art</option>
                                    <option>Bus Math</option>
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
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">        
                            <label for="per4">Fourth period</label>
                            <select class="form-control disable" id="per4" name="per4">
                                <option>Select</option>
                                <option>Adv Modeling</option>
                                <option>Art</option>
                                <option>Bus Math</option>
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
                            <select class="form-control disable" id="per5" name="per5">
                                <option>Select</option>
                                <option>Adv Modeling</option>
                                <option>Art</option>
                                <option>Bus Math</option>
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
                            <select class="form-control disable" id="per6" name="per6">
                                <option>Select</option>
                                <option>Adv Modeling</option>
                                <option>Art</option>
                                <option>Bus Math</option>
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
                            <select class="form-control disable" id="per7" name="per7">
                                <option>Select</option>
                                <option>Adv Modeling</option>
                                <option>Art</option>
                                <option>Bus Math</option>
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
                    </div>
                </div>
            </div>
            <div class="form-group center">
                <input type="submit" value="Submit" id="submit_btn" class="btn btn-info">
                <input type="button" value="Reset" id="reset_btn" class="btn btn-info">
            </div>
        </form>
       <br>

<script src="app.js"></script>

<?php 
    include("inc/footer.php"); 
?>

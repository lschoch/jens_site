<?php
$title = "Dual Cred Eng: profile";
include("inc/header.php");
?>

<body>
    <div class="container">
        <div class="center">
        <h3>Student Profile Form</h3>
        </div>
        <br>
        <form  id="profile_form" action="profile_process.php" method="post" role="form">
            <div class="form_block stud_ID center">
                <div class="form-group inline">
                    <label for="student_id">Enter your Student ID to begin</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Student ID">
                </div>
                <div class="form-group">
                <label>---Be sure to save your infomation---</label>
                <label>---with the "Submit" button below.---</label>
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
                        <!-- <div class="tab10"> -->
                            <div class="form-group">
                                <label for="per1">First period</label>
                                <select class="form-control disable" id="per1" name = "per1">
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
                                <select class="form-control disable" id="per2" name="per2">
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
                                <select class="form-control disable" id="per3" name="per3">
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
                        <!-- </div> -->
                    </div>
                    <div class="col-sm-6">
                        <!-- <div class="tab10"> -->
                            <div class="form-group">        
                                <label for="per4">Fourth period</label>
                                <select class="form-control disable" id="per4" name="per4">
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
                                <select class="form-control disable" id="per5" name="per5">
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
                                <select class="form-control disable" id="per6" name="per6">
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
                                <select class="form-control disable" id="per7" name="per7">
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
                        <!-- </div>end class="tab10" -->
                    </div>
                </div>
            </div>
           <div class="form_block stud_ID center">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group center">
                        <input type="submit" value="Submit" id="submit" class="btn btn-info submit"></input>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group center">
                        <input type="button" value="Reset" class="btn btn-info reset_btn" ></input>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <br>

<!-- Modal -->
<div  id="request_ID" class="modal fade"  role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" id="xclose" class="close" data-dismiss="modal" data-target="request_ID">&times;</button>
                <h4 class="modal-title">Your Student ID will be sent to you in an email.<br>Your ID is private. Please do not share it with others.</h4>
            </div>
            <div class="modal-body">
                <form class="form-inline">
                        <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    <button type="submit" id="submit_modal" class="btn btn-info" data-dismiss="modal">Send my Student ID</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- End Modal  -->

<script src="app.js"></script>
<script>
    $(document).ready(function(){
        $('#profile').addClass('active');
    });
</script>

<?php 
    include("inc/footer.php"); 
?>

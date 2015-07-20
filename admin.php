<?php
include("protector/password_protect.php");
$title = "Dual Cred Eng: admin";
include("inc/header.php");
?>

<body>

<!-- add student modal -->
<div  id="add_student" class="modal fade"  role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" data-target="#add_student">&times;</button>
                <h4 class="modal-title center">Add student</h4>
            </div>
            <div class="modal-body">
                <form id="add_form" class="form_block center" action="add_process.php" method="post" role="form">
                    <div id="add_form_group" class="form-group inline">
                        <div class="form-group">
                            <label class="sr-only" for="add_first">First Name</label>
                            <input type="text" class="form-control" id="add_first" name="add_first" required placeholder="First Name"> 
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="add_last">Last Name</label>
                            <input type="text" class="form-control" id="add_last" name="add_last" required placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add_modal" id="add_modal" class="btn btn-info" value="Add">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end add student modal-->

<!-- delete student modal -->
<div  id="delete_student" class="modal fade"  role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" data-target="#delete_student">&times;</button>
                <h4 class="modal-title center">Delete student using Student ID</h4>
            </div>
            <div class="modal-body">
                <form id="mod_del" class="form_block center" action="delete_process.php" method="post" role="form">
                    <div id="mod_form_group" class="form-group inline">
                        <div class="form-group">
                            <label class="sr-only" for="mod_del_id">Student ID</label>
                            <input type="text" class="form-control" id="mod_del_id" name="mod_del_id" required placeholder="Student ID"> 
                        </div>
                        <div class="form-group">
                            <input type="submit" name="mod_del_submit" id="mod_del_submit" class="btn btn-info btn-sm" value="Delete">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end delete student modal-->

<div class="container">
    <div id="admin_well" class="inline well">
        <h3 id="admin_head">Mrs Schoch's administration page.</h3>
        <h4><a href="/protector/password_protect.php?logout=1" class="btn btn-info btn-sm">Logout</a></h4>
    </div>
    <form id="msg_form" action="msg_process.php" method="post" role="form">
        <div id="msg" class="form-group well">
            <label for="msg_submit">Message for home page:</label>
            <textarea autofocus="true" form="msg_form" id="msg_txt" name="msg_txt" class="form-control" cols="100" rows="5"></textarea>
            <div class="form-group">
                <input type="submit" id="msg_submit" value="Submit" class="btn btn-info btn-sm">
            </div>
        </div>
    </form>

    <div id="center_div">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add_student" id="add_stud_trig">Add Student</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#delete_student" id="del_stud_trig">Delete Student</button>
    </div>

    <div id="center_div">
        <label id="toggle_label">Tables</label><br>
        <input type="button" value="Contact Info" id="close_contact" class="btn btn-info btn-sm">
        <input type="button" value="Classes" id="close_classes" class="btn btn-info btn-sm">
    </div>
    <div id="wrapper">
        <div class="table-responsive">
            <div id="contact_div">
            </div>
        </div>
        <div class="table-responsive">
            <div id="classes_div">
            </div>
        </div>
    </div>
</body>

<script src="app.js"></script>

<?php 
    include("inc/footer.php"); 
?>

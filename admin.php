<?php
include("protector/password_protect.php");
$title = "Dual Cred Eng: admin";
include("inc/header.php");
?>

<body>

<!-- delete modal -->
<div  id="delete_student" class="modal fade"  role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" id="xxclose" class="close" data-dismiss="modal" data-target="#delete_student">&times;</button>
                <h4 class="modal-title center">Delete student using Student ID.</h4>
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
<!-- end delete modal-->

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
        <input type="button" value="Add Student" id="add_student" class="btn btn-info btn-sm">
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

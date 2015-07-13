<?php
include("protector/password_protect.php");
$title = "Dual Cred Eng: admin";
include("inc/header.php");
?>

<body>
<div class="container">
    <div id="admin_well" class="inline well">
        <h3 id="admin_head">Mrs Schoch's administration page.</h3>
        <h4><a href="/protector/password_protect.php?logout=1" class="btn btn-info btn-sm">Logout</a></h4>
    </div>
    <form id="msg_form" action="msg_process.php" method="post" role="form">
        <div id="msg" class="form-group well">
            <label for="msg_submit">Message for home page:</label>
            <textarea autofocus="true" form="msg_form" id="msg_txt" name="msg_txt" class="form-control" cols="100" rows="5"></textarea>
            <!-- </div> -->
            <div class="form-group">
                <input type="submit" id="msg_submit" value="Submit" class="btn btn-info btn-sm">
            </div>
        </div>
    </form>

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

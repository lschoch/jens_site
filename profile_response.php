<?php 
$title = "Schoch Student Profile";
$exclude = "profile";
include("inc/header.php");
?>

<br><br>

<div class="alert alert-success" id="profile_alert" role="alert"><h3>Thank you for updating your student profile!<h3>
<br>
<div class="form-group back">
        <input type="button" id="back-btn" class="btn btn-info" value="Back" onclick="goBack()"></input>
</div>
</div>
<br><br><br>

<?php
include("inc/footer.php");
?>

<script>
function goBack() {
    window.location.replace("profile.php");
}
</script>
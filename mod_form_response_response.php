<?php 
    $title = "Schoch - name not found";
    include("inc/header.php");
?>

<br><br>
<div class="center">
    <div class="alert alert-success" id="not_found_alert" role="alert"><h3>That first and last name combination was not found in the class list. <br>Please check your spelling and try again.<h3>
        <br>
        <div class="form-group back">
            <input type="button" id="back-btn" class="btn btn-info" value="Back" onclick="goBack()"></input>
        </div>
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
<html>
    <form method="POST" action="photo.php" enctype="multipart/form-data">
        <hr>
        Select photo:<br><br>
        <input type="file" name="profile">
        <input type="submit" name="upload">
    </form>
</html>

<?php
if(isset($_POST['upload']))
{
    $img_loc = $_FILES['profile']['tmp_name'];
    $target_dir = "uploaded_images/";
    $target_file = $target_dir . basename($_FILES['profile']['name']);
    
    move_uploaded_file($img_loc, "uploaded_images/");
}
?>

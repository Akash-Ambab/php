<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>

<form action="fileOperation.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="submit"> <br/>


</form>
<?php
if(isset($_POST['submit']))
{ 
    // print_r($_FILES);
    $filepath = "uploads/" . basename($_FILES["file"]["name"]);

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
    {
    echo "Success";
    } 
    else 
    {
    echo "Error !!";
    }
} 
?>

</body>
</html>
<?php
include 'conf.php';
?>

<html>

<head>
    <title>sor</title>
    <style>
    * {
        font-size: 25pt;
        text-align: center;

    }
    </style>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        name:<input type="text" name="name" /><br><br>
        image:<input type="file" name="upload" /><br><br>
        <input type="submit" name="save" value="update" />
    </form>

</body>

</html>

<?php
$idon=$_GET['id'];
echo $idon ;
if(isset($_POST["save"])){
$name = $_POST['name'];
$filename=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$folder='Img/'.$filename ;
move_uploaded_file($temp,$folder);
if(!$name==''){
$query="UPDATE `img` SET  name='$name',ionk='$folder' WHERE id='$idon'";
$data=mysqli_query($con,$query);
if ($data){
    echo "yes mission completed";
}
else {
    echo "none";
}
}
}
?>
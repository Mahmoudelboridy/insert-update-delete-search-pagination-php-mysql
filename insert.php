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
        <input type="submit" name="save" value="save" />
    </form>

</body>

</html>

<?php
if(isset($_POST["save"])){
$name = $_POST['name'];
$filename=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$folder='Img/'.$filename ;
move_uploaded_file($temp,$folder);
if(!$name==''){
$query="INSERT INTO img(name,ionk) VALUES ('$name','$folder')";
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
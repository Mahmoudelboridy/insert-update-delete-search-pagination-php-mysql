<style>
img {
    width: 250px;
    height: 250px;
}
</style>
<?php
include ('conf.php');
if(isset($_GET['btn'])){
$search=$_GET['search'];
$btn=$_GET['btn'];
$sql = "SELECT * FROM `img` WHERE name like '%$search%'";
$data=mysqli_query($con,$sql); 
while($result=mysqli_fetch_assoc($data)){
    $id=$result["id"];
    echo 
      $result['name'].'<img src='.$result['ionk'].' /><br>';
}
}
?>
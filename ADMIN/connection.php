<?php
$con=mysqli_connect('localhost','root','','vms');
if(!$con){
    echo "<script>alert('connction error');window.location.href='index.php'</script>";
}


?>
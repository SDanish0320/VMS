<?php
include('connection.php');
$i=$_GET['id'];
$q="delete  vaccine_detail set USERNAME='$vaccine_name' DOSAGE='$vaccine_dosage' join vaccine_availability set STATUS='$vaccine_avl' where ID='$i'";
$res=mysqli_query($con,$q);
if($res)
{
    echo "<script>alert('Deleted Succesfully');window.location.href='vacc_show.php'</script>";
}
else{
    echo mysqli_error($con);
}

?>
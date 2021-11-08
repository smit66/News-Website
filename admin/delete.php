<?php
include  "header.php";

if($_SESSION["user_role"]=='0')
{
    header("Location: ./post.php");

}
?>

<?php 

include "config.php";

$userid=$_GET['id'];

$sql="DELETE FROM user WHERE user_id={$userid}";

if(mysqli_query($conn,$sql))
{
    header("Location: ./users.php");

}
else{

    echo "Cant user delete";
}
mysqli_close($conn);

?>


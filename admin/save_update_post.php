<?php


include "config.php";

if(empty($_FILES['new_image']['name']))
{
    $file_name=$_POST['old_image'];

}
else
{
    
        $errors=array();

        $file_name=$_FILES['new_image']['name'];

        $file_size=$_FILES['new_image']['size'];
        $file_tmp=$_FILES['new_image']['tmp_name'];
        $file_type=$_FILES['new_image']['type'];
        $file_ext=end(explode('.',$file_name));
        $extensions=array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)===false)
        {
            $errors[]="This extension is not allowed, Please choose a jpg,png and jpeg file.";
        }
        if($file_size>2097152)
        {
            $errors[]="File size must be 2MB or lower";
        }

        if(empty($errors)==true)
        {
            move_uploaded_file($file_tmp,"upload/".$file_name);
        }
        else{
            print_r($errors);
            die();
        }
    
}
$sql="UPDATE post SET title='{$_POST['post_title']}',description='{$_POST['postdesc']}',category={$_POST['category']},post_img='{$file_name}' 
      WHERE post_id={$_POST['post_id']}";

      $result=mysqli_query($conn,$sql);

      if($result)
      {
          header("Location: ./post.php");
      }
      else
      {
          echo "Query failed";
      }

?>
<?php
include("config/db.php");

function upload($file){

$allowed=['jpg','jpeg','png','pdf'];

$name=$_FILES[$file]['name'];

$tmp=$_FILES[$file]['tmp_name'];

$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));

if(in_array($ext,$allowed)){

$new=time().$name;

move_uploaded_file($tmp,"uploads/".$new);

return $new;

}

}

$photo=upload("photo");

$id_doc=upload("id_document");

$certificate=upload("certificate");

$sql="UPDATE applicants SET

photo='$photo',

id_document='$id_doc',

certificate='$certificate'

WHERE id=".$_SESSION['user'];

mysqli_query($conn,$sql);

echo "Application Submitted";

?>
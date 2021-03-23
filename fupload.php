<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo site_url(); ?>/FileuploadController/do_upload" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<br><br>
<input type="submit" name="btnsubmit" value="upload" />


</form>

<?php
for($i=0;$i<count($res1);$i++) {?>
 
  <img src="<?php echo base_url().'upload/'.$res1[$i]['path'] ?>"  width="100" height="100"/>
  <br>
  
<?php 
}
?>
</body>
</html>
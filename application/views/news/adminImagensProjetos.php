<html>
<head>
    <title>Upload Form</title>
</head>
<body>




<?php echo form_open_multipart();?>

<?php echo form_upload('userfile[]','','multiple'); ?>
<br /><br />
<?php echo form_submit('submit','Upload');?>
<?php echo form_close();?>



</body>
</html>
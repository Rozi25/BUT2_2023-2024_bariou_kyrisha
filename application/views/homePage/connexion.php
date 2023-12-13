<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet"  href="<?php echo base_url(); ?>css/style.css"  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
</head>
<body>
   
	<h2>Login</h2>
    <?php echo validation_errors(); ?>
    <?php if(isset($error)) echo $error; ?>
    <?php echo form_open('HomePage/login_validation'); ?>
        <label for="login">Username:</label>
        <input type="text" name="login" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    <?php echo form_close(); ?>

</body>
</html>





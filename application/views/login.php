<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css') ?>">

</head>

<body>
    <!-- partial:index.partial.html -->
    <section class='login' id='login'>
        <div class='head'>
            <h1 class='company'>Login </h1>
        </div>
        <div class='form'>
            <form action="<?php echo site_url('login_controller/login_validation'); ?>" method="post">
                <input type="text" placeholder='Username' class='text' id='username' name="username" required><br>
                <input type="password"  class='password' name="password" placeholder="password"><br><br>

                
                <input type="submit" name="submit" class="btn-login" value="Login">
            </form>
        </div>
    </section>
    <!-- partial -->
    <script src="<?php echo base_url('assets/js/script.css') ?>"></script>

</body>

</html>
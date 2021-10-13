<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="/assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<img src="/assets/images/menmodels.jpg" class="position-absolute" alt="">
<div class="position-absolute form">
    <h1>Log In</h1>
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif;?>
    <form method="post" action="/login">
        <div class="txtfield">
            <input type="email" name="email" required value="<?= old('email') ?>">
            <span></span>
            <label for="email">Email</label>
        </div>
        <div class="txtfield">
            <input type="password" name="password" required>
            <span></span>
            <label for="password">Password</label>
        </div>
        <div class="pass"> Forgot Password?</div>
        <input type="submit" value="Log In" name="login">

        <div class="signuplink">
            New to J | B&W? <a href="/register">Create account</a>
        </div>
    </form>
</div>
</body>
</html>
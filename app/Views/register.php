<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="/assets/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<img src="/assets/images/3 women.jpg" class="position-absolute" alt="">
        <div class=" position-absolute form">
            <h1>Create Account</h1>
            <?php if(session()->has('errors')):?>
                <div class="alert alert-warning">
                    <?php
                    foreach (session('errors') as $error):
                    ?>
                    <li><?php echo $error ?></li>
                    <?php
                    endforeach;?>
                </div>
            <?php endif;?>
            <form class="row g-3" method="post" action="/register">
                <div class="row">
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" autocomplete="off" required value="<?= old('email') ?>">
                </div>
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" autocomplete="off" required value="<?= old('firstname') ?>">
                </div>
                <div class="col-md-6">
                    <label for="firstname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname" autocomplete="off" required value="<?= old('lastname') ?>">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-md-6">
                    <label for="confirm-pass" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm-pass" id="confirm-pass">
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select">
                        <option selected>Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>
                <div class="signuplink">
                    Already have an account? <a href="/login">Log-In</a>
                </div>
                </div>
            </form>
        </div>
</body>
</html>
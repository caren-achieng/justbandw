<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="/assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <style>
        .error {
            width: 100%;
            margin-top: .25rem;
            font-size: .875em;
            color: #dc3545;
        }
    </style>
</head>
<body>
<img src="/assets/images/menmodels.jpg" class="position-absolute" alt="">
<div class="position-absolute form">
    <h1>Log In</h1>
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
    <form id="login" class="row g-3" method="post" action="/login">
            <div class="text-white col-8">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="text-white col-8">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn mt-4 btn-primary">Sign in</button>
            </div>
        <div class="signuplink">
            New to J | B&W? <a href="/register">Create account</a>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script>
    if ($("#login").length > 0) {
        $("#login").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                },
                password: {
                    required: true,
                    minlength:8,
                    maxlength:255
                }
            },

            messages: {
                email: {
                    email: "Invalid email",
                    required: "Email field is required",
                    maxlength: "Maximum length 50 characters"
                },
                password: {
                    required: "Password field is required",
                    minlength:"Minimum length 8 characters",
                    maxlength:"Maximum length 255 characters"
                }
            },
        })
    }
</script>
</body>
</html>
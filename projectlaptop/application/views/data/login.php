<html lang="en">

<head>
    <title>Tutorial Membuat Form Login Responsive dengan Bootstrap</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style2.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <input type="text" name="username" id="username" class="form-control" placeholder="Email address/Username" required autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button type="submit" name="edit" class="btn btn-lg btn-primary btn-block">Login</button>
        <p class="mt-5 mb-3 text-muted">©Farhan_Fauzan</p>
    </form>
</body>

</html>
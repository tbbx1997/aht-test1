<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./publics/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./publics/assets/css/formlogin.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="">Mr.Three</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?action=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=home">Home</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" action="?action=do-update-user&id=<?php echo $result['id'] ?>" method="post">

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="username" value='<?php echo $result['name']; ?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">PassWord</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" value='<?php echo $result['password']; ?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address" value='<?php echo $result['email']; ?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="level" class="col-md-4 col-form-label text-md-right">Level</label>
                                    <div class="col-md-6">
                                        <input type="number" id="level" class="form-control" name="level" value='<?php echo $result['level']; ?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="created_date" class="col-md-4 col-form-label text-md-right">Create Date</label>
                                    <div class="col-md-6">
                                        <input type="date" id="created_date" class="form-control" name="created_date" value='<?php echo $result['created_date']; ?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="updated_date" class="col-md-4 col-form-label text-md-right">Update Date</label>
                                    <div class="col-md-6">
                                        <input type="date" id="updated_date" class="form-control" name="updated_date" value='<?php echo $result['updated_date']; ?>'>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>
<script src="./publics/assets/lib/jquery-3.6.0.min.js"></script>
<script src="./publics/assets/lib/popper.min.js"></script>
<script src="./publics/assets/js/bootstrap.min.js"></script>

</html>
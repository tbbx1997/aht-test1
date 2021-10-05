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
                        <a class="nav-link" href="?action=home">Home</a>
                        <a class="nav-link" href="?action=admin">Back</a>
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
                        <div class="card-header">Add Product</div>
                        <div class="card-body">
                            <form name="my-form" action="?action=do-update&id=<?php echo $result['id_pd'] ?>" method="post">

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name Product</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" value='<?php echo $result['name_pd']; ?>' >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Title Product</label>
                                    <div class="col-md-6">
                                        <input type="text" id="title" class="form-control" name="title" value='<?php echo $result['title'];?>' >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                                    <div class="col-md-6">
                                        <input type="number" id="price" class="form-control" name="price" value='<?php echo $result['prices'];?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input type="text" id="image" class="form-control" name="image" value='<?php echo $result['featrure_image'];?>'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea type="text" id="description" class="form-control" name="description" ><?php echo $result['description_pd'];?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="created" class="col-md-4 col-form-label text-md-right">Created</label>
                                    <div class="col-md-6">
                                        <input type="text" id="created" class="form-control" name="created" value='<?php echo $result['created_date_pd'];?>'></input>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="modified" class="col-md-4 col-form-label text-md-right">Updated</label>
                                    <div class="col-md-6">
                                        <input type="text" id="modified" class="form-control" name="modified" value='<?php echo $result['modified_date_pd'];?>'></input>
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
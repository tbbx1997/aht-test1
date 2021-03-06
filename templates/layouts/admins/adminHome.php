<html lang="en">

<head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <!------ Include the above in your HEAD tag ---------->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">
        <title>Document</title>
</head>

<body>
        <!--==================================================================-->
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h4>Product manager</h4>
                                <h5><a href="?action=insert-product">Insert Product</a></h5>
                                <h5><a href="?action=list-user">List User</a></h5>
                                <h5><a href="?action=login">Logout</a></h5>
                                <div class="table-responsive">
                                        <table id="mytable" class="table table-bordred table-striped">
                                                <thead>
                                                        <th><input type="checkbox" id="checkall" /></th>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Description</th>
                                                        <th>Created date</th>
                                                        <th>Modified date</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                </thead>

                                                <tbody>

                                                        <?php
                                                        foreach ($result as $row) {

                                                        ?>
                                                                <tr>
                                                                        <td><input type="checkbox" class="checkthis" /></td>
                                                                        <td><?php echo $row['id_pd']; ?></td>
                                                                        <td><?php echo $row['name_pd']; ?></td>
                                                                        <td><?php echo $row['title']; ?></td>
                                                                        <td><?php echo $row['featrure_image']; ?></td>
                                                                        <td><?php echo $row['prices']; ?></td>
                                                                        <td><?php echo $row['description_pd']; ?></td>
                                                                        <td><?php echo $row['created_date_pd']; ?></td>
                                                                        <td><?php echo $row['modified_date_pd']; ?></td>
                                                                        <td>
                                                                                <a href="?action=update-product&id=<?php echo $row['id_pd'] ?>">Edit</a>
                                                                        </td>
                                                                        <td>
                                                                                <a href="?action=delete-product&id=<?php echo $row['id_pd'] ?>">Delete</a>
                                                                        </td>
                                                                </tr>
                                                        <?php } ?>
                                                </tbody>

                                        </table>

                                        <div class="clearfix"></div>
                                        <ul class="pagination pull-right">
                                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>

                                </div>

                        </div>
                </div>
        </div>


        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                                </div>
                                <div class="modal-body">
                                        <div class="form-group">
                                                <input class="form-control " type="text" placeholder="Mohsin">
                                        </div>
                                        <div class="form-group">

                                                <input class="form-control " type="text" placeholder="Irshad">
                                        </div>
                                        <div class="form-group">
                                                <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                                        </div>
                                </div>
                                <div class="modal-footer ">
                                        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>??Update</button>
                                </div>
                        </div>
                        <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
        </div>



        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                </div>
                                <div class="modal-body">

                                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                                </div>
                                <div class="modal-footer ">
                                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>??Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>??No</button>
                                </div>
                        </div>
                        <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
        </div>
</body>
<script src="./publics/assets/lib/jquery-3.6.0.min.js"></script>
<script src="./publics/assets/lib/popper.min.js"></script>
<script src="./publics/assets/js/bootstrap.min.js"></script>
<script src="./publics/assets/js/checkbox.js"></script>

</html>
<!DOCTYPE html>
<html>
<head>
    <title> Simple CI4 CRUD Application</title>
    <link rel="stylesheet" href="/training/ci4/public/assets/css/style.css">
    <link rel="stylesheet" href="/training/ci4/public/assets/css/bootstrap.css"/> 

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>
    <div class="container-fluid bg-purple shadow-sm">
        <div class="test-white h4">Simple CI4 CRUD Application</div>
            <div class="bg-white shadow-sm">
                <div class="container">
                    <div class="row">
                        <nav class="nav nav nav-underline">
                        <div class="nav-link">Books/View </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  mt-4">
            <div class="row">
                <div class="col-md-12 text-right ">
                    <a href="<?php echo base_url('books/create')?>" class="btn btn-primary">Add</a>
        </div>
        <div class="container mt-4">
            <div class="row">

                <div class="col-md-12">
                    <?php 
                    if(!empty($session->getFlashdata('success'))) 
                    {
                     ?>
                     <div class ="alert alert-success">
                         <?php echo $session->getFlashdata('success');?>
                     </div>  
                     <?php 
                    }
                    ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-purple shadow-sm">
                        <div class="card-header-title">Books</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Isbn-No</th>
                                <th>Author</th>
                                <th width="150">Action</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>The Alchemist</td>
                                <td>1212313</td>
                                <td>Anjali Patel</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>S V Raman</td>
                                <td>1212314</td>
                                <td>Akash Patel</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>The Vedant</td>
                                <td>1212315</td>
                                <td>Neel Keni</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            

                        </table>        
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>
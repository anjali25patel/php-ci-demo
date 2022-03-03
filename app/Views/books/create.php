<!DOCTYPE html>
<html>
<head>
    <title> Simple CI4 CRUD Application</title>
    <link rel="stylesheet" href="http://localhost/training/ci4/public/assets/css/bootstrap.css"/> 
    <link rel="stylesheet" href="http://localhost/training/ci4/public/assets/css/style.css"/>
</head>
<body>
    <div class="container-fluid bg-purple shadow-sm ">
        <div class="test-white h4 ">Simple CI4 CRUD Application</div>
            <div class="bg-white shadow-sm">
                <div class="container">
                    <div class="row">
                        <nav class="nav nav-underline">
                        <div class="nav-link"> Books / View </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="<?php echo base_url('books/create')?>" class="btn btn-primary ">ADD</a>
                    </div>  
                </div>  
            </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-purple text-white">
                        <div class="card-header-title">Create Book</div>
                    </div>
                    <div class="card-body">
                        <form name="createForm" id="createForm" method="post">
                       <div class="form-group">
                           <label>Name</label><br>
                           <input type="text" placeholder="Name" name="name" id="name" class="form-control <?php echo  (isset($validation) && $validation->hasError('name'))  ? 'is-invalid' : '';?>"  value="<?php echo set_value('name'); ?>" >
                           <?php
                                if (isset($validation) && $validation->hasError('name'))
                                {
                                    echo '<p class = "invalid-feedback">'.$validation->getError('name').'</p>';
                                }
                           ?>
                       </div> 
                       <div class="form-group">
                           <label>Author</label><br>
                           <input type="text" placeholder="Author" name="author" id="author" class="form-control <?php echo  (isset($validation) && $validation->hasError('author'))  ? 'is-invalid' : '';?>"  value="<?php echo set_value('author'); ?>">
                           <?php
                                if(isset($validation) && $validation->hasError('author'))
                                {
                                    echo '<p class = "invalid-feedback">'.$validation->getError('author').'</p>';
                                }
                           ?>
                        </div>
                       <div class="form-group">
                           <label>Isbn_No</label><br>
                           <input type="text" placeholder="Isbn" name="isbn" id="isbn" class="form-control <?php echo  (isset($validation) && $validation->hasError('isbn'))  ? 'is-invalid' : '';?>"  value="<?php echo set_value('isbn'); ?>">
                           <?php
                                if(isset($validation) && $validation->hasError('isbn'))
                                {
                                    echo '<p class = "invalid-feedback">'.$validation->getError('isbn').'</p>';
                                }
                           ?>
                        </div>
                       <button type="submit"  href="<?php echo base_url('books/list')?>"class="btn btn-primary">Submit</button>    
                        </form>         
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
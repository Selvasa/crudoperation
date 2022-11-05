<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login Page</title>
    <!-- add bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- adding fontawesome icon cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='<?php echo base_url()?>assets/css/style.css'/>
</head>

<body>
    <div class='container'>
    <div class='row d-flex  justify-content-end mt-3 pt-3'>
        <div class='col-sm-2'>
                    <a class='text-decoration-none text-white' href='<?php echo base_url('index.php/crudcontroller/exportpdf')?>'>
                    <button class='btn btn-secondary w-100' >Export to PDF </button></a>
        </div>
        <div class='col-sm-2'>
                    <a class='text-decoration-none text-white' href='<?php echo base_url('index.php/crudcontroller')?>'>
                    <button class='btn btn-secondary w-100'> <i class="bi bi-box-arrow-in-left pe-3"></i> Add </button></a>
        </div>
        <!-- create the table and add user-->
        <div class=''>
            <table class='table mt-2 table-responsive table-bordered'>
                <thead class='table-light'>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Files</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <?php 
                    foreach($value as $row){
                ?>
                <tr>
                    <td><?php echo $row-> id?></td>
                    <td><?php echo $row-> name?></td>
                    <td><?php echo $row-> email?></td>
                    <td><?php echo $row-> password?></td>
                    <td><?php echo $row-> phno?></td>
                    <td><?php echo $row->file?></td>
                    <td><a href='<?php echo base_url('index.php/crudcontroller/edit/'.$row->id ) ?>' class='text-success'><input type='button'  value='Edit'class='btn btn-primary btn-sm'></a>
                    <a href='<?php echo base_url().'index.php/crudcontroller/delete/'.$row->id ?>' class='text-danger'><input type='button' method='post' value='Delete' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure ?")' name='button' ></a></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</body>
</html>
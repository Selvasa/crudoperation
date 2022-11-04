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
        <!-- create the table and add user-->
        <table class='table mt-2 table-responsive table-bordered'>
                <thead class='table-light'>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
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
                    <td><a href='<?php echo base_url('index.php/crudcontroller/pdf/'.$row->id ) ?>' class='text-success'><button class='btn btn-danger btn-sm'> export </button></a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    
    
</body>
</html>
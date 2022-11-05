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
    <link rel='stylesheet' href='<?= base_url()?>assets/css/style.css'/>
   </head>
    <body>
        <div class='container-fluid cont '>
            <form class='text-black lead pb-4 pt-3' enctype='multipart/form-data' method='post' action='<?php echo base_url('index.php/Crudcontroller/addtotable')?>'>
               <div class='row d-flex  justify-content-center pt-3'>
                        <div class='col-sm-5'>
                            <label class='form-label ps-1 pb-2'> <i class="bi bi-person-plus-fill"></i> User Name : </label>
                            <input type='text' class='form-control' name='name' placeholder='User Name' />
                        </div>
                        <div class='col-sm-5'>
                            <label class='form-label ps-1 pb-2'><i class="bi bi-envelope-fill"></i> Email : </label>
                            <input type='text' class='form-control' name='email' placeholder='Email' />
                        </div>
                    </div>
                    <div class='row d-flex  justify-content-center pt-4'>
                        <div class='col-sm-5'>
                            <label class='form-label ps-1 pb-2'><i class="bi bi-key-fill"></i> Password : </label>
                            <input type='Password' class='form-control' name='password' placeholder='Password' />
                        </div>
                        <div class='col-sm-5'>
                            <label class='form-label ps-1 pb-2'> <i class="bi bi-telephone-forward-fill"></i> Ph No : </label>
                            <input type='text' class='form-control' name='phno' placeholder='Phone Number' />
                        </div>
                    </div>
                    <div class='row d-flex  justify-content-start pt-4 ps-5 ms-5'>
                        <div class='col-sm-5 ps-3'>
                            <label class='form-label ps-1 pb-2'><i class="bi bi-key-fill"></i> Upload Your Files : </label>
                            <input type='file' class='form-control' name='file' placeholder='Password' required/>
                        </div>
                    </div>
                    <div class='row d-flex  justify-content-end mt-3 pt-3 '>
                        <div class='col-sm-2'>
                                <a class='text-decoration-none text-white'>
                                 <button class='btn btn-secondary w-100' type='submit' value='submit'> Save 
                                    <i class="bi bi-box-arrow-in-right ps-3"></i></button></a>
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>
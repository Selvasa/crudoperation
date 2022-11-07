<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>
<body>
        
<div class='container-fluid cont '>
            <form class='text-black lead pb-4 pt-3' method='post' enctype='multipart/form-data' action='<?php echo base_url('index.php/Crudcontroller/update')?>'>
                <div class=' container'>
                      <?php 
                      if(isset($datas)){
                        
                 ?>
                   
                    <div class='row pt-3 d-flex flex-column'>
                    <div class='col-sm-5'>
                            <label class='form-label ps-1 pb-2'> <i class="bi bi-person-plus-fill"></i> Id : </label>
                            <input  class='form-control' name='id'  value='<?php echo$datas[0]->id?>' readonly/>
                        </div>
                        <div class='col-sm-5 pt-4'>
                            <label class='form-label  ps-1 pb-2'> <i class="bi bi-person-plus-fill"></i> User Name : </label>
                            <input class='form-control' name='name'  value='<?php echo$datas[0]->name?>'/>
                        </div>
                        <div class='col-sm-5 pt-4'>
                            <label class='form-label ps-1 pb-2'><i class="bi bi-envelope-fill"></i> Email : </label>
                            <input  class='form-control' name='email' value='<?php echo$datas[0]->email?>' />
                        </div>
                    </div>
                    <div class='row d-flex flex-column pt-4'>
                        <div class='col-sm-5'>
                            <label class='form-label ps-1 pb-2'><i class="bi bi-key-fill"></i> Password : </label>
                            <input  class='form-control' name='password'  value='<?php echo$datas[0]->password?>' />
                        </div>
                        <div class='col-sm-5 pt-4'>
                            <label class='form-label ps-1 pb-2'> <i class="bi bi-telephone-forward-fill"></i> Ph No : </label>
                            <input  class='form-control' name='phno' value='<?php echo$datas[0]->phno?>'  />
                        </div>
                        <div class='col-sm-5 pt-4'>
                            <label class='form-label ps-1 pb-2'> <i class="bi bi-telephone-forward-fill"></i> File : </label>
                            <input type='file' class='form-control' name='file' value='<?php echo$datas[0]->file?>'  />
                        </div>
                    </div>
                   
                    <div class='row d-flex justify-content-start mt-4 pt-3'>
                        <div class='col-sm-2'>
                        
                                <a class='text-decoration-none text-white'>
                                 <button class='btn btn-success w-100' type='submit' value='submit'> Update 
                                    <i class="bi bi-box-arrow-in-right ps-3"></i></button></a>
                                
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
<?php }
?>
</body>
</html>
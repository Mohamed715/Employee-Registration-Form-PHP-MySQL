<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register Employees</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">




            <?php
                if(isset($_SESSION['status']))
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hi!</strong> <?php echo $_SESSION['status'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                    unset($_SESSION['status']);
                }
            ?>
                



                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Register Employees Data Into MySQL Database Using PHP</h4>
                    </div>
                    <div class="card-body">
                        <form action="save.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Designation</label>
                            <input type="text" name="designation" class="form-control" placeholder="Enter Your Designation">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="insert_data" class="btn btn-primary">REGISTER DATA</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Students Information</h4>
                    </div>
                    <div class="card-body">

                        <form action="updateprocess.php" method="POST">


                        	<div class="form-group mb-3">
                                <label for="">Database ID * (Required)</label>
                                <input type="text" name="id"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student ID</label>
                                <input type="text" name="student_id" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Gender</label>
                                <input type="text" name="gender" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Father's Name</label>
                                <input type="text" name="father_name" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Mother's Name</label>
                                <input type="text" name="mother_name" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Emergency Contact</label>
                                <input type="text" name="emerg_cont" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Course</label>
                                <input type="text" name="course" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Year Level</label>
                                <input type="text" name="course_yr" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Birthdate</label>
                                <input type="text" name="birthdate" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                            </div>
                            <div class="form-group mb-3">
                                 <input type="button" value="Go back!" onclick="history.back()">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
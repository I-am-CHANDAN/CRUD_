<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $designation = $_POST['designation'];

    $sql = "insert into app (name,email,mobile,designation)
    values('$name','$email','$mobile','$designation')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        // echo "Data Inserted Successful";
        //redirect when data is submitted--
        header('location:display.php');
    } else {
        die(mysqli_error($connect));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD_APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2 class="text-center mt-3">Employee Data</h2>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter Your Name" name="name">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" id="email" class="form-control" placeholder="Enter Your Email" name="email">
            </div>
            <div class="mb-3">
                <label>Mobile No</label>
                <input type="text" id="mobile" class="form-control" placeholder="Enter Your Phone" name="mobile">
            </div>
            <div class="mb-3">
                <label>Designation</label>
                <input type="text" id="designation" class="form-control" placeholder="Enter Your Designation" name="designation">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
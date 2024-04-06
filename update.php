<?php
include 'connect.php';

//getting id and particular data for upadation
$id = $_GET['updateid'];
$sql = "select * from app where id=$id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
// print_r($row);
$name = $row['Name'];
$email = $row['Email'];
$mobile = $row['Mobile'];
$designation = $row['Designation'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $designation = $_POST['designation'];

    $sql = "update app set id=$id, name='$name', email='$email',mobile='$mobile',designation='$designation' where id=$id";

    $result = mysqli_query($connect, $sql);

    if ($result) {
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
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="<?php echo $email ?>">
            </div>
            <div class="mb-3">
                <label>Mobile No</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone" name="mobile" value="<?php echo $mobile ?>">
            </div>
            <div class="mb-3">
                <label>Designation</label>
                <input type="text" class="form-control" placeholder="Enter Your Designation" name="designation" value="<?php echo $designation ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
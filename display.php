<?php
//include connect file
include 'connect.php';

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
    <div class="container">
        <button type="button" class="btn btn-primary my-3"><a href="index.php" class="text-light text-decoration-none">Add New</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Emp Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "Select * from `app`";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data['Id'];
                        $name = $data['Name'];
                        $email = $data['Email'];
                        $mobile = $data['Mobile'];
                        $designation = $data['Designation'];

                        echo ' <tr>
                                    <th scope="row">' . $id . '</th>
                                    <td>' . $name . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $mobile . '</td>
                                    <td>' . $designation . '</td>
                                    <td><button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">Update</a></button></td>
                                    <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
                            </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>

<?php

    require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="users pt-5">
        <div class="container">

            <a href="user.php" class="btn btn-primary text-light text-decoration-none">Add User</a>
            <!-- table -->
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">SL no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">operation</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sql = "SELECT * FROM crud";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        
                        while($row = mysqli_fetch_assoc($result)) {

                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $password = $row['password'];

                            echo '
                                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <a href="update.php?updateid='. $id .'" class="text-light btn btn-primary">Update</a>
                        <a href="delete.php?deleteid='. $id .'"  class="text-light btn btn-danger">Delete</a>
                    </td>
                    </tr>
                            ';

                        }

                    }

                    ?>
    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>
    <div class="container my-5">
        <h2> CRUD Practice</h2>
        <a class='btn btn-primary btn-sm' href='create.php'>Add New Info</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created AT</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Include the database connection file
            require_once 'connect.php';

            // read rows of table
            $sql = "SELECT * FROM information";
            $result = $connection->query($sql);

            if(!$result) {
                die("Invalid query" . $connection->connection_error);
            }

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                    <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
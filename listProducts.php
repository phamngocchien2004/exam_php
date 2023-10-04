<?php
require ("db.php");
$conn = connect();

$sql = "select * from students ";
$result = $conn -> query($sql);
$listproduct = [];
if ($result -> num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $listproduct[] = $row;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div style="margin-right: 50px;margin-left: 50px"    class="container">

        <h2 style="text-align: center;color: blueviolet;margin-top: 30px;margin-bottom: 30px">List Products</h2>
        <a href="createStudent.php" class="btn btn-outline-primary">Create new student</a>
        <table  class="table">

            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listproduct as $item):?>
                <tr>
                    <td><?php echo $item["id"] ?></td>
                    <td><?php echo $item["name"] ?></td>
                    <td><?php echo $item["age"] ?></td>
                    <td><?php echo $item["address"] ?></td>
                    <td>
                        <?php echo $item["telephone"] ?>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
</body>
</html>
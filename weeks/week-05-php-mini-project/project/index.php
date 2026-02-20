<?php
require_once "Controller/Select.php";

use Controller\Select;

$users = Select::where("users", ['id', 1]);
$vendors = Select::where("vendors", ['status', 1]);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch username</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
            </tr>
        </thead>
        <?php foreach ($users as $key => $user): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $user['user'] ?></td>
                <td><?= $user['password'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <h1>Vendors</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>status</th>
            </tr>
        </thead>
        <?php foreach ($vendors as $key => $vendor): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $user['user'] ?></td>
                <td><?= $user['password'] ?></td>
                <td><?= $user['status'] ? "active" : "inactive" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
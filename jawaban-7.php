<?php
try {
  $host= '';
  $dbname= '';
  $user= '';
  $pass= '';
  $pdo= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $result= $pdo->query("SELECT categories.name, categories.id, GROUP_CONCAT(hobbies.name SEPARATOR ', ') AS hobbies_name FROM categories LEFT JOIN hobbies ON categories.id=hobbies.person_id GROUP BY categories.id ORDER BY categories.id ASC");
} catch(PDOException $e) {
  die($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SQL Join</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Capres No. 10</a>
            </div>
        </div>
    </nav>
    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>person_id</th>
                    <th>name</th>
                    <th>person_hobbies</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row= $result->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['hobbies_name'] ?></td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>

</html>

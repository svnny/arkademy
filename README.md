# jawaban soal no. 1
# demo https://muhammad-f-huda.herokuapp.com/arkademy/jawaban-1.php
<?php

function my_profile() {
  $data= [
    'name'=> 'Muhammad Fadkul Huda',
    'address'=> 'Dsn. Prenggan, RT10/RW02, Ds. Polosiri, Kec. Bawen, Kab. Semarang',
    'hobbies'=> [
      'coding'
    ],
    'is_married'=> FALSE,
    'school'=> [
      'highSchool'=> 'SMK Muhammadiyah Salatiga'
    ],
    'skills'=> [
      'PHP'=> [
        'CodeIgniter'
      ],
      'JavaScript'=> [
        'jQuerey'
      ],
      'CSS/HTML'=> [
        'Bootsrap'
      ]
    ]
  ];
  return(json_encode($data));
}

echo my_profile();
?>

# jawaban soal no. 2
# demo https://muhammad-f-huda.herokuapp.com/arkademy/jawaban-2.php
<?php
header('Content-Type: text/plain');

function is_username_valid($string) {
  if(preg_match('|^[a-z_]{8}$|', $string)) {
    return(TRUE);
  }
  return(FALSE);
}
// return false
var_dump(is_username_valid('jakarta'));
var_dump(is_username_valid('solo abc'));
var_dump(is_username_valid('_soetami_'));
// return true
var_dump(is_username_valid('_jakarta'));
var_dump(is_username_valid('solo_abc'));
var_dump(is_username_valid('soetami_'));
echo("\r\n\r\n");

function is_password_valid($string) {
if(preg_match('|[A-Z]|', $string) && preg_match('|[a-z]|', $string) && preg_match('|[\d]|', $string) && preg_match('|[)<~!@#$%^&*?+>_\s(-]|', $string) && strlen($string)==8) {
    return(TRUE);
  }
  return(FALSE);
}
// return false
var_dump(is_password_valid('Qwertyu1'));
var_dump(is_password_valid('#Qwert1'));
var_dump(is_password_valid('@$^(&%_+'));
// return true
var_dump(is_password_valid('wsxE99##'));
var_dump(is_password_valid('sw1p3^UP'));
?>

# jawaban soal no. 3
# demo https://muhammad-f-huda.herokuapp.com/arkademy/jawaban-3.php
<?php
header('Content-Type: text/plain');

function draw_kotak($panjang) {
    for($x=1; $x<=$panjang; $x++) {
        for($i=1; $i<=$panjang; $i++) {
            if($x%2==0) {
                if($i%2==0) {
                    echo('*   ');
                } else {
                    echo('    ');
                }
            } else {
                if($i%2==0) {
                    echo('    ');
                } else {
                    echo('*   ');
                }
            }
        }
        echo("\r\n\r\n");
    }
}

draw_kotak(7);
echo("\r\n\r\n");
draw_kotak(5);
?>

# jawaban soal no. 4
# demo https://muhammad-f-huda.herokuapp.com/arkademy/jawaban-4.php
<?php
header('Content-Type: text/plain');

function print_abc($kolom, $baris) {
  $abjad= 'abcdefghijklmnopqrstuvwxyz';
  $index= 0;
  $string= '';
  for($x=1; $x<=$baris; $x++) {
    for($i=1; $i<=$kolom; $i++) {
      $string.= $abjad[$index].'  ';
      $index++;
    }
    $string.= "\r\n\r\n";
  }
  echo($string);
}

print_abc(3, 4);
?>

# jawaban soal no. 5
# demo https://muhammad-f-huda.herokuapp.com/arkademy/jawaban-5.php
<?php
header('Content-Type: text/plain');

function count_handshake($total_orang) {
  $total= 0;
  for($i=1; $i<=$total_orang; $i++) {
    for($ii=1; $ii<$total_orang; $ii++) {
      $total+= 1;
    }
  }
  echo($total/2);
}

count_handshake(3);
echo("\r\n");
count_handshake(6);
?>

# jawaban soal no. 6
-- table categories
CREATE TABLE `categories` (
  `id` INT(1) NOT NULL PRIMARY KEY,
  `name` VARCHAR(16) NOT NULL,
) ENGINE=InnoDB;

-- insert data
INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'nurhadi'),
(2, 'aldo'),
(3, 'dodi');

-- table hobbies
CREATE TABLE `hobbies` (
  `id` INT(1) NOT NULL PRIMARY KEY,
  `person_id` INT(1) NOT NULL,
  `name` VARCHAR(16) NOT NULL,
   FOREIGN KEY person_hobbies(person_id) REFERENCES categories(id)
) ENGINE=InnoDB;

-- insert data
INSERT INTO `hobbies` (`id`, `person_id`, `name`) VALUES
(1, 1, 'Bird watching'),
(2, 1, 'Martial arts'),
(3, 2, 'Hiking'),
(4, 1, 'Archery'),
(5, 2, 'Beekeeping'),
(6, 3, 'Book restoration');

-- join
SELECT categories.name, categories.id, GROUP_CONCAT(hobbies.name SEPARATOR ', ') AS hobbies_name
FROM categories
LEFT JOIN hobbies ON categories.id=hobbies.person_id
GROUP BY categories.id
ORDER BY categories.id ASC

# jawaban soal no. 7
# demo http:/fullclip.top/arkademy/jawaban-7.php
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

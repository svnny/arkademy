<h1><a id="jawaban_soal_no_1_0"></a>jawaban soal no. 1</h1>
<p>demo <a href="https://muhammad-f-huda.herokuapp.com/jawaban-1.php">https://muhammad-f-huda.herokuapp.com/jawaban-1.php</a><br>
&lt;?php</p>
<p>function my_profile() {<br>
$data= [<br>
‘name’=&gt; ‘Muhammad Fadkul Huda’,<br>
‘address’=&gt; ‘Dsn. Prenggan, RT10/RW02, Ds. Polosiri, Kec. Bawen, Kab. Semarang’,<br>
‘hobbies’=&gt; [<br>
‘coding’<br>
],<br>
‘is_married’=&gt; FALSE,<br>
‘school’=&gt; [<br>
‘highSchool’=&gt; ‘SMK Muhammadiyah Salatiga’<br>
],<br>
‘skills’=&gt; [<br>
‘PHP’=&gt; [<br>
‘CodeIgniter’<br>
],<br>
‘JavaScript’=&gt; [<br>
‘jQuerey’<br>
],<br>
‘CSS/HTML’=&gt; [<br>
‘Bootsrap’<br>
]<br>
]<br>
];<br>
return(json_encode($data));<br>
}</p>
<p>echo my_profile();<br>
?&gt;</p>
<h1><a id="jawaban_soal_no_2_33"></a>jawaban soal no. 2</h1>
<p>demo <a href="https://muhammad-f-huda.herokuapp.com/jawaban-2.php">https://muhammad-f-huda.herokuapp.com/jawaban-2.php</a><br>
&lt;?php<br>
header(‘Content-Type: text/plain’);</p>
<p>function is_username_valid($string) {<br>
if(preg_match(’|<sup class="footnote-ref"><a href="#fn1" id="fnref1">[1]</a></sup>{8}$|’, $string)) {<br>
return(TRUE);<br>
}<br>
return(FALSE);<br>
}<br>
// return false<br>
var_dump(is_username_valid(‘jakarta’));<br>
var_dump(is_username_valid(‘solo abc’));<br>
var_dump(is_username_valid(’<em>soetami</em>‘));<br>
// return true<br>
var_dump(is_username_valid(’<em>jakarta’));<br>
var_dump(is_username_valid(‘solo_abc’));<br>
var_dump(is_username_valid('soetami</em>'));<br>
echo(&quot;\r\n\r\n&quot;);</p>
<p>function is_password_valid($string) {<br>
if(preg_match(’|[A-Z]|’, $string) &amp;&amp; preg_match(’|[a-z]|’, $string) &amp;&amp; preg_match(’|[\d]|’, $string) &amp;&amp; preg_match(’|[)&lt;~!@#$%^&amp;*?+&gt;<em>\s(-]|’, $string) &amp;&amp; strlen($string)==8) {<br>
return(TRUE);<br>
}<br>
return(FALSE);<br>
}<br>
// return false<br>
var_dump(is_password_valid(‘Qwertyu1’));<br>
var_dump(is_password_valid(’#Qwert1’));<br>
var_dump(is_password_valid(’@$^(&amp;%</em>+’));<br>
// return true<br>
var_dump(is_password_valid(‘wsxE99##’));<br>
var_dump(is_password_valid(‘sw1p3^UP’));<br>
?&gt;</p>
<h1><a id="jawaban_soal_no_3_69"></a>jawaban soal no. 3</h1>
<p>demo <a href="https://muhammad-f-huda.herokuapp.com/jawaban-3.php">https://muhammad-f-huda.herokuapp.com/jawaban-3.php</a><br>
&lt;?php<br>
header(‘Content-Type: text/plain’);</p>
<p>function draw_kotak($panjang) {<br>
for($x=1; $x&lt;=$panjang; $x++) {<br>
for($i=1; $i&lt;=$panjang; $i++) {<br>
if($x%2<mark>0) {<br>
if($i%2</mark>0) {<br>
echo(’*   ‘);<br>
} else {<br>
echo(’    ‘);<br>
}<br>
} else {<br>
if($i%2==0) {<br>
echo(’    ‘);<br>
} else {<br>
echo(’*   ');<br>
}<br>
}<br>
}<br>
echo(&quot;\r\n\r\n&quot;);<br>
}<br>
}</p>
<p>draw_kotak(7);<br>
echo(&quot;\r\n\r\n&quot;);<br>
draw_kotak(5);<br>
?&gt;</p>
<h1><a id="jawaban_soal_no_4_100"></a>jawaban soal no. 4</h1>
<p>demo <a href="https://muhammad-f-huda.herokuapp.com/jawaban-4.php">https://muhammad-f-huda.herokuapp.com/jawaban-4.php</a><br>
&lt;?php<br>
header(‘Content-Type: text/plain’);</p>
<p>function print_abc($kolom, $baris) {<br>
$abjad= ‘abcdefghijklmnopqrstuvwxyz’;<br>
$index= 0;<br>
$string= ‘’;<br>
for($x=1; $x&lt;=$baris; $x++) {<br>
for($i=1; $i&lt;=$kolom; $i++) {<br>
$string.= $abjad[$index].’  ';<br>
$index++;<br>
}<br>
$string.= “\r\n\r\n”;<br>
}<br>
echo($string);<br>
}</p>
<p>print_abc(3, 4);<br>
?&gt;</p>
<h1><a id="jawaban_soal_no_5_122"></a>jawaban soal no. 5</h1>
<p>demo <a href="https://muhammad-f-huda.herokuapp.com/jawaban-5.php">https://muhammad-f-huda.herokuapp.com/jawaban-5.php</a><br>
&lt;?php<br>
header(‘Content-Type: text/plain’);</p>
<p>function count_handshake($total_orang) {<br>
$total= 0;<br>
for($i=1; $i&lt;=$total_orang; $i++) {<br>
for($ii=1; $ii&lt;$total_orang; $ii++) {<br>
$total+= 1;<br>
}<br>
}<br>
echo($total/2);<br>
}</p>
<p>count_handshake(3);<br>
echo(&quot;\r\n&quot;);<br>
count_handshake(6);<br>
?&gt;</p>
<h1><a id="jawaban_soal_no_6_142"></a>jawaban soal no. 6</h1>
<p>– table categories<br>
CREATE TABLE <code>categories</code> (<br>
<code>id</code> INT(1) NOT NULL PRIMARY KEY,<br>
<code>name</code> VARCHAR(16) NOT NULL,<br>
) ENGINE=InnoDB;</p>
<p>– insert data<br>
INSERT INTO <code>categories</code> (<code>id</code>, <code>name</code>) VALUES<br>
(1, ‘nurhadi’),<br>
(2, ‘aldo’),<br>
(3, ‘dodi’);</p>
<p>– table hobbies<br>
CREATE TABLE <code>hobbies</code> (<br>
<code>id</code> INT(1) NOT NULL PRIMARY KEY,<br>
<code>person_id</code> INT(1) NOT NULL,<br>
<code>name</code> VARCHAR(16) NOT NULL,<br>
FOREIGN KEY person_hobbies(person_id) REFERENCES categories(id)<br>
) ENGINE=InnoDB;</p>
<p>– insert data<br>
INSERT INTO <code>hobbies</code> (<code>id</code>, <code>person_id</code>, <code>name</code>) VALUES<br>
(1, 1, ‘Bird watching’),<br>
(2, 1, ‘Martial arts’),<br>
(3, 2, ‘Hiking’),<br>
(4, 1, ‘Archery’),<br>
(5, 2, ‘Beekeeping’),<br>
(6, 3, ‘Book restoration’);</p>
<p>– join<br>
SELECT <a href="http://categories.name">categories.name</a>, <a href="http://categories.id">categories.id</a>, GROUP_CONCAT(<a href="http://hobbies.name">hobbies.name</a> SEPARATOR ', ') AS hobbies_name<br>
FROM categories<br>
LEFT JOIN hobbies ON categories.id=hobbies.person_id<br>
GROUP BY <a href="http://categories.id">categories.id</a><br>
ORDER BY <a href="http://categories.id">categories.id</a> ASC</p>
<h1><a id="jawaban_soal_no_7_179"></a>jawaban soal no. 7</h1>
<p>demo <a href="http://fullclip.top/arkademy/jawaban-7.php">http://fullclip.top/arkademy/jawaban-7.php</a><br>
&lt;?php<br>
try {<br>
$host= ‘’;<br>
$dbname= ‘’;<br>
$user= ‘’;<br>
$pass= ‘’;<br>
$pdo= new PDO(“mysql:host=$host;dbname=$dbname”, $user, $pass);<br>
$pdo-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br>
$result= $pdo-&gt;query(“SELECT <a href="http://categories.name">categories.name</a>, <a href="http://categories.id">categories.id</a>, GROUP_CONCAT(<a href="http://hobbies.name">hobbies.name</a> SEPARATOR ', ') AS hobbies_name FROM categories LEFT JOIN hobbies ON categories.id=hobbies.person_id GROUP BY <a href="http://categories.id">categories.id</a> ORDER BY <a href="http://categories.id">categories.id</a> ASC”);<br>
} catch(PDOException $e) {<br>
die($e-&gt;getMessage());<br>
}<br>
?&gt;<br>
&lt;!DOCTYPE html&gt;<br>
&lt;html lang=“en”&gt;</p>
<p>&lt;head&gt;<br>
&lt;meta name=“viewport” content=“width=device-width, initial-scale=1”&gt;<br>
&lt;title&gt;SQL Join&lt;/title&gt;<br>
&lt;link rel=“stylesheet” href=&quot;<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css</a>&quot;&gt;<br>
&lt;/head&gt;</p>
<p>&lt;body&gt;<br>
&lt;nav class=“navbar navbar-default navbar-static-top”&gt;<br>
&lt;div class=“container-fluid”&gt;<br>
&lt;div class=“navbar-header”&gt;<br>
&lt;a class=“navbar-brand” href=&quot;#&quot;&gt;Capres No. 10&lt;/a&gt;<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;/nav&gt;<br>
&lt;div class=“container”&gt;</p>
&lt;table class=&quot;table table-bordered&quot;&gt;<br>
&lt;thead&gt;<br>
&lt;tr&gt;<br>
&lt;th&gt;person_id&lt;/th&gt;<br>
&lt;th&gt;name&lt;/th&gt;<br>
&lt;th&gt;person_hobbies&lt;/th&gt;<br>
&lt;/tr&gt;<br>
&lt;/thead&gt;<br>
&lt;tbody&gt;<br>
&lt;?php while($row= $result-&gt;fetch(PDO::FETCH_ASSOC)): ?&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;&lt;?= $row['id'] ?&gt;&lt;/td&gt;<br>
&lt;td&gt;&lt;?= $row['name'] ?&gt;&lt;/td&gt;<br>
&lt;td&gt;&lt;?= $row['hobbies_name'] ?&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;?php endwhile ?&gt;<br>
&lt;/tbody&gt;<br>
&lt;/table&gt;<br>
&lt;/div&gt;<br>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    RESTORAN 
    <?php
    //pdo -> PHP DATA OBJECT

    //intansiasi class 
    $koneksi = new PDO("mysql:host=localhost;dbname=restoran", "root", "");
    //query
      
    $query = $koneksi-> query("select * from makanan");
    //ambil / masukan data ke variabel
    $data = $query->fetchALL(); // array 



    // var_dump($data);

    //mengulang untuk menampilkan data 
    foreach ($data as $data) {
        echo "<p>" ,$data ['id'] , "</p>";
    }
$query = $koneksi-> query("insert * from makanan");
$data = $query->fetchALL()
    ?>
    <button><a href=remedial.php>kembali</a></button>
</body>
</html>
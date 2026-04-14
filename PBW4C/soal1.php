<?php
if (isset($_POST['submit'])){
    $jumlah_roda = $_POST['jumlah_roda'];

    switch (jumlah_roda) {
     case 2;
        echo "motor";   
        break;

     case 3;
        echo "bajaj";
        break;

     case 4;
        echo "mobil";
        break;
        
    default;
        echo"erorr";
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal1<title>
</head>
<body>
    <form action="" method="post">
        masukan jumlah roda (2-4)= <input type="number" name="jumlah_roda">
        <button type="submit" name="submit">kirim</button>
</form>
</body>
</html>
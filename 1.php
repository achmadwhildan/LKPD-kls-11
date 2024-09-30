<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $text = $_POST['text'];

    $result = preg_replace('/[^0-9]/' , '' , $text);
    
    if ($result){
        $array = str_split($result, 1);  
            echo "Teks mengnadung angka: " . implode(',' , $array);
        } else{
            echo "Teks tidak mengandung angka.";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="angka">Masukan Teks :</label>
        <input type="text" name="text" id="angka">
        <input type="submit" id="submit">
    </form>
</body>
</html>
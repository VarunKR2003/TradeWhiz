<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Testing</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name='searchBar' placeholder="Enter Symbol">
    <input type="submit" name='searchButton' value='submit'>
    
    
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $symbol=$_POST["searchBar"];
        $json = file_get_contents("https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=IBM&interval=5min&apikey=KZSGSQGO6ZORV326");

        $data = json_decode($json,true);
        
        print_r($data[]);
    }
    
    ?>

</body>
</html>
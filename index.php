<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
</head>
<body>
    <header id="header"></header>
    <div id="main">
        teste
<?php
    
    $url = 'https://www.googleapis.com';
    $api = '/books/v1/volumes?';
    $search = http_build_query($_GET);

    $query = $url . $api . $search;

echo 'search: '.$search.'.<br/>';
    echo "<h1>Procurando no site: $url</h1> <h2>\"$query\"</h2> ";
    if($search!='')
    {

        $contents = file_get_contents($query);
        echo '<pre>';
        print_r($contents);
        echo "</pre>";
    }   
    
    
?>
    </div>
    <footer id="footer"></footer>
</body>
</html>
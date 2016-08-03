<?php
    
    $url = 'https://www.googleapis.com';
    $api = '/books/v1/volumes?';
    $search = http_build_query($_GET);

    $query = $url . $api . $search;

    if($search!=''){
        $contents = file_get_contents($query);
    }   
?>

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
        <h1>Busca livros</h1>
        <h3>query: "<?php echo $query ?>"</h3>
        <div class="container">
        <form action="index.php" method='GET' >
            <div class="input-group stylish-input-group col-md-6 col-md-offset-3">
                <input name='q'type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-md" type="button">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </span>
            </div>
        </form>
        </div>
    <?php 
    if($contents){

        $value = json_decode($contents,true);
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
        foreach ($value['items'] as $item) {
            echo "<p> {$item['volumeInfo']['title']},";
            $authors = $item['volumeInfo']['authors'];
            
            $authorLength = count($authors);
            $isAutores = ($authorLength>1);
            
            echo ($isAutores ? " Autores: ":" Autor: ");
           
            foreach ($authors as $author) {
                echo $author.(($isAutores && $author!=$authors[$authorLength-1])?", ":'');
            }

            $smallThumb = "".$item['volumeInfo']['imageLinks']['smallThumbnail'];
            $thumb = "".$item['volumeInfo']['imageLinks']['thumbnail'];
            echo "<img src='{$smallThumb}'>";
            echo "</p>";
        }
    }
    ?>
    </div>
    <footer id="footer"></footer>
</body>
</html>
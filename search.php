<?php

function makeSearchAndReturn( $query='' )
{

    $valor = $query;
    $url = 'https://www.googleapis.com';
    $api = '/books/v1/volumes?';
    $search = http_build_query(['q'=>$query]);
    $contents='';
    if($search!='') {
        registerQuerySeach($query);


        if (!file_exists("local/db-".$valor.".json") ) {
                $query = $url . $api . $search;
                $contents = file_get_contents($query);
               
                file_put_contents("local/db-".$valor.".json", $contents);
            }

        $getdata = file_get_contents("local/db-".$valor.".json");
        $contents = json_decode($getdata, true);
    }
    return $contents;
}

function printSearchResults($value){
  if($value){
      foreach ($value['items'] as $item) {
          $smallThumb = "".$item['volumeInfo']['imageLinks']['smallThumbnail'];
          $thumb = "".$item['volumeInfo']['imageLinks']['thumbnail'];
          $authors = $item['volumeInfo']['authors'];

          echo "<div class='col-md-4' >\n";
            echo "<div class='panel panel-default'>\n";
              echo "<div class='panel-body' style='min-height: 150px;'>\n";

              if(!empty($smallThumb)) {
                    echo "<div class='col-xs-4' >\n";
                      echo "<img src='{$smallThumb}' class='img-responsive'>";
                    echo "</div>";
                }

                echo "<b>Nome do Livro</b>: " . $item['volumeInfo']['title'] . "<br>\n";
                if(!empty($authors)){
                    $authorLength = count($authors);
                    $isAutores = ($authorLength>1);
                    echo "<div class=\"authors\"><strong>".($isAutores ? " Autores: ":" Autor: ")."</strong>";
                    foreach ($authors as $author) {
                        echo $author.(($isAutores && $author!=$authors[$authorLength-1])?", ":'');
                    }
                    echo "</div>";
                }
              echo "</div>";
            echo "</div>";
          echo "</div>";
      }
  }
}

function registerQuerySeach($query) {
    $sql = "INSERT INTO `query` ( `query` ) VALUES ( '{$query}' )";
    $result = mysql_query($sql) or die(mysql_error());
}

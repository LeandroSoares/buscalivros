<?php

     $contents = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=harry');
     echo "<pre>";
     print_r($contents);
     echo "</pre>";

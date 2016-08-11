<?php require 'header.php'; ?>
<body>
    <header id="header">
        <h1 class='text-center'>TraçaLivros</h1>
    </header>
    <nav style='position: absolute; right: 10px; top: 10px;'>
        <a type="button" class="btn btn-primary" href='index.php'>Busca</a>
        <a type="button" class="btn btn-success" href='relatorio.php'>Relatórios</a>
    </nav>
    <div id="main">
        <div class="container" style='margin-bottom: 40px; margin-top: 40px;'>
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
        <div class="container">
    <?php
        require 'search.php';
        $contents = makeSearchAndReturn($_GET['q']);
        printSearchResults($contents);
    ?>
    </div>
    </div>
    <?php require 'footer.php'; ?>

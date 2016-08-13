<?php require 'header.php'; ?>

<?php
    function getSqlRelDataAsArrayAssoc($sql) {
        $result = mysql_query($sql);
        $buscasPorHora = array();
        while ( $row = mysql_fetch_array($result, MYSQLI_ASSOC) ) {
            array_push($buscasPorHora, $row);
       }
       return $buscasPorHora;
    }
    //acessos por hora
    $queryBuscasPorHora = "SELECT HOUR(timestamp) as busca, COUNT(*) as quantidade FROM `query` GROUP BY HOUR(timestamp) ORDER BY HOUR(timestamp) ASC";
    $buscasPorHora = getSqlRelDataAsArrayAssoc($queryBuscasPorHora);

    $queryTermosMaisBuscados="SELECT `query` as busca, COUNT(*) as quantidade FROM `query` GROUP BY busca ORDER BY busca ASC";
    $termosMaisBuscados = getSqlRelDataAsArrayAssoc($queryTermosMaisBuscados);

function parseBuscaToJsonData($data) {
    $chartData =  array('labels'=>array(), 'series'=> array(array()) );
    foreach ($data as $value) {
        array_push($chartData['labels'],$value['busca']);
        array_push($chartData['series'][0], $value['quantidade']);
    };
    // print_r($chartData);
    $r = json_encode($chartData);
    return $r;
}
function maisBuscado($data){
    $livro='';
    $total=0;
    foreach ($data as $value) {
        if($value['quantidade'] > $total) {
            $total = $value['quantidade'];
            $livro = $value['busca'];
        }
    };
    return ''.$livro;
}
function mediaBuscaPHr($data) {
    $count=0;
    $total=0;
    foreach ($data as $value) {
        $total+=$value['quantidade'];
        $count++;
    };
    return ''.($total/$count);
}

?>
<body>
    <style media="screen">
        .ct-label{
            font-size: 12px;
        }
    </style>

    <header id="header">
        <h1 class='text-center'>TraçaLivros - Relatório</h1>
    </header>

    <nav style='position: absolute; right: 10px; top: 10px;'>
        <a type="button" class="btn btn-primary" href='index.php'>Busca</a>
        <a type="button" class="btn btn-success" href='relatorio.php'>Relatórios</a>
    </nav>

    <div id="main" class='container'>
    <script type="text/javascript">

        var charContagemPorHoraData = <?php echo '' . parseBuscaToJsonData($buscasPorHora);?>;
        var charTermosMaisBuscados = <?php echo '' . parseBuscaToJsonData($termosMaisBuscados);?>;
        var charLineOptions = { fullWidth: true ,height: (charContagemPorHoraData.labels.length*40+40)+'px'};
        var charLineOptions2 = { horizontalBars: true, fullWidth: true, height: (charTermosMaisBuscados.labels.length*40+40)+'px', chartPadding: { left: 40 } };

        document.addEventListener('DOMContentLoaded', function() {
            new Chartist.Line('.ct-chart-busca-por-hora', charContagemPorHoraData, charLineOptions);
            new Chartist.Bar('.ct-chart-busca-nome', charTermosMaisBuscados, charLineOptions2);
        });

    </script>
    <div class="">
        <div class=" col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Acessos por hora</h2>
                    <h3>Média de acessos por hora: <?php echo '' . mediaBuscaPHr($buscasPorHora).'.';?></h3>
                    <h3>Hora de maior atividade: <?php echo '' . maisBuscado($buscasPorHora).'h.';?></h3>
                    <div class="panel-body">
                        <div class="ct-chart-busca-por-hora"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Termos mais buscados</h2>
                    <h3>Termo mais buscado: <?php echo '' . maisBuscado($termosMaisBuscados).'.';?></h3>
                    <div class="panel-body">
                        <div class="ct-chart-busca-nome"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php require 'footer.php'; ?>

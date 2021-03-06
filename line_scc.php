<?php

if (!empty($_GET["var"]))
    $var = $_GET["var"];
else
    $var = 1;

if (!empty($_GET["uf"]))
    $uf = $_GET["uf"];
else
    $uf = 0;

if (!empty($_GET["atc"]))
    $atc = $_GET["atc"];
else
    $atc = 0;

if (!empty($_GET["cad"]))
    $cad = $_GET["cad"];
else
    $cad = 0;

if (!empty($_GET["prt"]))
    $prt = $_GET["prt"];
else
    $prt = 0;

if (!empty($_GET["ocp"]))
    $ocp = $_GET["ocp"];
else
    $ocp = 0;

if (!empty($_GET["sex"]))
    $sex = $_GET["sex"];
else
    $sex = 0;

if (!empty($_GET["fax"]))
    $fax = $_GET["fax"];
else
    $fax = 0;

if (!empty($_GET["esc"]))
    $esc = $_GET["esc"];
else
    $esc = 0;

if (!empty($_GET["cor"]))
    $cor = $_GET["cor"];
else
    $cor = 0;

if (!empty($_GET["frm"]))
    $frm = $_GET["frm"];
else
    $frm = 0;

if (!empty($_GET["deg"]))
    $deg = $_GET["deg"];
else
    $deg = 0;

if (!empty($_GET["slc"]))
    $slc = $_GET["slc"];
else
    $slc = 0;

if (!empty($_GET["prv"]))
    $prv = $_GET["prv"];
else
    $prv = 0;

if (!empty($_GET["snd"]))
    $snd = $_GET["snd"];
else
    $snd = 0;

if (!empty($_GET["mec"]))
    $mec = $_GET["mec"];
else
    $mec = 0;

if (!empty($_GET["mod"]))
    $mod = $_GET["mod"];
else
    $mod = 0;

if (!empty($_GET["pfj"]))
    $pfj = $_GET["pfj"];
else
    $pfj = 0;

if (!empty($_GET["uos"]))
    $uos = $_GET["uos"];
else
    $uos = 0;

if (!empty($_GET["typ"]))
    $typ = $_GET["typ"];
else
    $typ = 0;

if (!empty($_GET["prc"]))
    $prc = $_GET["prc"];
else
    $prc = 0;

if (!empty($_GET["ano"]))
    $ano = $_GET["ano"];
else
    $ano = NULL;


?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- D3 JS v4 -->
<?php
if($eixo == "mercado" && $deg != 0) {
    echo '<script src="js/d3/d3.min.js"></script>';
    ?>
    <style type="text/css">
        svg {
            font: 10px sans-serif !important;
            shape-rendering: crispEdges !important;
        }

        .axis path,
        .axis line {
            fill: none !important;
            stroke: #000 !important;
        }

        .x path.domain {
            stroke: none !important;
        }

        .y path.domain {
            stroke: #ddd !important;
        }

        .y .tick line {
            stroke: #ddd !important;
        }
    </style>
    <?php
}
else {
    echo '<script src="js/d3/d3.min.js" charset="utf-8"></script>';
}
?>
<script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-legend/2.21.0/d3-legend.min.js"></script>

<!-- D3 QUEUE -->
<script src="https://d3js.org/d3-queue.v3.min.js"></script>

<!-- Utilidades -->
<script src="js/functions.js"></script>

<div id="corpo" class="fadeIn"></div>

<script type="text/javascript">
    //variaveis configuracao query
    var vrv = <?php echo $var; ?>;
    var atc = <?php echo $atc; ?>;
    var cad = <?php echo $cad; ?>;
    var prt = <?php echo $prt; ?>;
    var ocp = <?php echo $ocp; ?>;
    var sex = <?php echo $sex; ?>;
    var fax = <?php echo $fax; ?>;
    var esc = <?php echo $esc; ?>;
    var cor = <?php echo $cor; ?>;
    var frm = <?php echo $frm; ?>;
    var prv = <?php echo $prv; ?>;
    var snd = <?php echo $snd; ?>;
    var mec = <?php echo $mec; ?>;
    var mod = <?php echo $mod; ?>;
    var pfj = <?php echo $pfj; ?>;
    var uos = <?php echo $uos; ?>;
    var typ = <?php echo $typ; ?>;
    var prc = <?php echo $prc; ?>;
    var deg = <?php echo $deg; ?>;
    var slc = <?php echo $slc; ?>;
    var ano = <?php if($ano == NULL) echo "null"; else echo $ano; ?>;
    var uf = <?php echo $uf; ?>;
    var eixo;
    switch(window.location.hash.substring(1)) {
        case "empreendimentos":
            eixo = 0;
            break;
        case "mercado":
            eixo = 1;
            break;
        case "politicas":
            eixo = 2;
            break;
        case "comercio":
            eixo = 3;
            break;
        default:
            eixo = 0;
    }
</script>

<script src="js/lines.js"></script>
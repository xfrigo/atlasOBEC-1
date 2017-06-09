<?php 
    
    if (!empty($_GET["var"]))
        $var = $_GET["var"];
    else
        $var = 1;

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

                    if (!empty($_GET["ano"]))
                        $ano = $_GET["ano"];
                    else
                        $ano = 2014;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!-- BOOTSTRAP -->

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- D3 JS -->
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script src="https://d3js.org/topojson.v2.min.js"></script>
        <script src="https://d3js.org/d3-queue.v3.min.js"></script>
        <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>

        <!-- D3 Legend -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-legend/2.21.0/d3-legend.min.js"></script>

        <!--===== css ====-->
        <link href="css/main.css" rel="stylesheet">

        <style type="text/css">
            .states{
              fill: gray;
              stroke: rgb(225, 225, 227);
              stroke-linejoin: round;
            }
            .legend {
                padding: 24px 0 0 24px;
            }
        </style>

        <title>Atlas Econômico da Cultura Brasileira</title>
    </head>

    <body>

        <div class="container">

            <!-- Static navbar -->
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo"></a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse text-center">

                        <ul class="nav navbar-nav">
                  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eixo <span class="caret"></span></a>
                                
                                <ul class="dropdown-menu">
                                  
                                    <li class="active"><a href="#">Empreendimentos Culturais</a></li>
                                    <li><a href="#">Mercado de Trabalho</a></li>
                                    <li><a href="#">Investimento Público</a></li>
                                    <li><a href="#">Comércio Internacional</a></li>

                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav">
                  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Variáveis <span class="caret"></span></a>
                                
                                <ul class="dropdown-menu">

                                    <li class="dropdown-header">Descritivo</li>
                                    <li class="active"><a href="#">Total de Empresas</a></li>
                                    <li><a href="#">Participação das Empresas Culturais no Total de Empresas</a></li>     
                                    <li><a href="#">Total de Empregadores</a></li>
                                    <li><a href="#">Taxas de Natalidade de Empresas</a></li>
                                    <li><a href="#">Taxa de Mortalidade das Empresas</a></li>
                                    <li><a href="#">Produtivdade do Trabalho das Empresas Culturais</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li class="dropdown-header">Relacional</li>
                                    <li><a href="#">Receita Total das Empresas Culturais</a></li>
                                    <li><a href="#">Custo Total das Empresas Culturais</a></li>
                                    <li><a href="#">Razão entre Receita Total e Custo Total das Empresas Culturais</a></li>
                                    <li><a href="#">Quociente de Valor Adicionado e Receita por Empresa Cultura</a></li>
                                    <li><a href="#">Razão entre PIB Setorial e Receita Operacional Líquida das Empresas Culturais</a></li>

                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Índice</li>
                                    <li><a href="#">Concentrações: Locacionais, Despesas, Receitas e Salariais.</a></li>

                                    <li role="separator" class="divider"></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav">
                      
                            <li class="dropdown">
                            
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Periodicidade <span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Ano</li>
                                    <li class = "<?php echo ($ano == "2006" ? "active" : "")?>"><a href="index.php?ano=2006">2006</a></li>
                                    <li class = "<?php echo ($ano == "2007" ? "active" : "")?>"><a href="index.php?ano=2007">2007</a></li>
                                    <li class = "<?php echo ($ano == "2008" ? "active" : "")?>"><a href="index.php?ano=2008">2008</a></li>
                                    <li class = "<?php echo ($ano == "2009" ? "active" : "")?>"><a href="index.php?ano=2009">2009</a></li>
                                    <li class = "<?php echo ($ano == "2010" ? "active" : "")?>"><a href="index.php?ano=2010">2010</a></li>
                                    <li class = "<?php echo ($ano == "2011" ? "active" : "")?>"><a href="index.php?ano=2011">2011</a></li>
                                    <li class = "<?php echo ($ano == "2012" ? "active" : "")?>"><a href="index.php?ano=2012">2012</a></li>
                                    <li class = "<?php echo ($ano == "2013" ? "active" : "")?>"><a href="index.php?ano=2013">2013</a></li>
                                    <li class = "<?php echo ($ano == "2014" ? "active" : "")?>"><a href="index.php?ano=2014">2014</a></li>

                                    <li role="separator" class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>      

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron white">
                <div id="corpo" align="center"></div>

                <!-- download -->
                <a href=""><img src="images/icons/pdf.png" class="icon-download"></a>
                <a href=""><img src="images/icons/xls.png" class="icon-download"></a>
                <a href=""><img src="images/icons/csv.png" class="icon-download"></a>
            </div> 
        </div><!-- /container -->

        <!-- <script src="js/mapa.js"></script> -->

        

        <script type="text/javascript">
            // Mapa JS //
            //tamanho do mapa
              var width = 800,
                  height = 600;

            //cria svg
              var svg = d3.select("#corpo").append("svg")
                .attr("width", width)
                .attr("height", height);

            //configura projeção
              var projection = d3.geoMercator()
                .center([-40, -30])             
                .rotate([4.4, 0])               
                .scale(750)                     
                .translate([width / 2, height / 1.2]);  

              var path = d3.geoPath()
                .projection(projection);

            //variaveis configuracao query
            var vrv = <?php echo $var; ?>;
            var atc = <?php echo $atc; ?>;
            var cad = <?php echo $cad; ?>;
            var prt = <?php echo $prt; ?>;
            var ano = <?php echo $ano; ?>;

            var config = "?var="+vrv+"&atc="+atc+"&cad="+cad+"&prt="+prt+"&ano="+ano+"";
            // console.log(config);

            //pre-load arquivos
              d3.queue()
                .defer(d3.json, "br-min.json")
                .defer(d3.json, "ajax_mapa.php"+config)
                .await(ready);

            //leitura
              function ready(error, br_states, mapa) {

                if (error) return console.error(error);

                //variaveis informacao
                var dict = {};
                var info = [];

                Object.keys(mapa).forEach(function(key) {

                    // console.log(key, mapa[key]);
                    info.push(mapa[key]);
                    return dict[mapa[key].id] = {id:mapa[key].id, uf:mapa[key].uf, valor:mapa[key].valor};

                });

            //carrega estados JSON
                var states = topojson.feature(br_states, br_states.objects.states);


            //exclui linha de cabeçario do OBJ
                info.splice(0,1);
                info.splice(27,28);
                delete dict[0];
                // console.log(dict);
                // console.log(info);

            //valores maximos e minimos
                var minValue = d3.min(info, function(d) {return d.valor; });
                var maxValue = d3.max(info, function(d) {return d.valor; });

            //distribuicao de frequencias    
                var quant = 9;
                var range = maxValue - minValue; 
                var amp = Math.round(range / quant);

            //domino de valores para as cores do mapa
                var dom = [
                            (minValue+(amp/4)), 
                            (minValue+amp), 
                            (minValue+(2*amp)), 
                            (minValue+(3*amp)), 
                            (minValue+(4*amp)), 
                            (minValue+(5*amp)), 
                            (minValue+(6*amp)), 
                            (minValue+(7*amp)), 
                            (minValue+(8*amp))
                          ];

            //ajuste do dominio
                var i = 0; 
                while(i<=9){
                    dom[i] = dom[i] - (dom[i] % 5);
                    i++;
                }
                
            //coloração do mapa
                var color = d3.scaleThreshold()
                  .domain(dom)
                  .range(d3.schemeYlGn[9]);
                          
            //concatena propriedades
                svg.append("g")
                  .attr("class", "states")
                  .selectAll("path")
                  .data(states.features)
                  .enter()
                  .append("path")
                  // .style('fill', function(d){return color(d.properties.name.replace(/\s+/g, '').length);})
                  .style('fill', function(d){return color(dict[d.id].valor);})
                  .attr("d", path)
                  
            //mouseover
                .on("mouseover", function(d) {
                  var xPosition = d3.mouse(this)[0];
                  var yPosition = d3.mouse(this)[1] - 30;
                  svg.append("text")
                    .attr("id", "tooltip")
                    .attr("x", xPosition)
                    .attr("y", yPosition)
                    .attr("text-anchor", "middle")
                    .attr("font-family", "Lato")
                    .attr("font-size", "14px")
                    .attr("font-weight", "bold")
                    .attr("fill", "black")
                    .text(d.properties.name+" = "+dict[d.id].valor);

                  d3.select(this)
                    .style("fill", "yellow")
                    .style("stroke-width", "2px");
                })

            //mouseout
                .on("mouseout", function(d) {
                  d3.select("#tooltip").remove();
                  d3.select(this)
                    .transition()
                    .duration(250)
                    .style('fill', function(d){return color(dict[d.id].valor);})
                    .style("stroke-width", "1px")
                });

            //legenda
                var legend_svg = d3.select("svg");

                legend_svg.append("g")
                  .attr("class", "legendLinear")
                  .attr("transform", "translate(600,300)");

                var legendLinear = d3.legendColor()
                  .title("Total de Empresas "+ano)
                  .labelFormat(d3.format(".0f"))
                  // .labels(legend)
                  .labels( 
                  //substitui legenda em ingles
                    function({ i, genLength, generatedLabels }){
                      if (i === 0 ){
                        return generatedLabels[i]
                          .replace('NaN to', 'Menor que')
                      } 
                      else if (i === genLength - 1) {
                        return "Maior que "+dom[7]
                      } 
                      else  {
                        return "Entre "+generatedLabels[i]
                          .replace('to', 'e')
                      }
                      return generatedLabels[i]
                    }
                    )
                  .shapeWidth(80)
                  .shapePadding(5)
                  .orient('vertical')
                  .scale(color);

                legend_svg.select(".legendLinear")
                  .call(legendLinear);

              };
        </script>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
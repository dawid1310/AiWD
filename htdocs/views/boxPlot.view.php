<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeric/1.2.6/numeric.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="js/anychart-base.min.js"></script>
    <script src="js/anychart-ui.min.js"></script>
    <script src="js/anychart-exports.min.js"></script>
    <script src="js/regression.min.js"></script>
</head>

<body>
    <div class="w-75 mx-auto"><br><br>
        <div class="w-50 mx-auto">
            <a class="btn btn-primary w-100" href="visualisation" role="button">Analiza i Wirtualizacja Danych</a><br><br>
            <div class="w-100 btn btn-success active">
                Wykres pudełkowy
            </div><br><br>
        </div>
    </div>
    <div style="display: block; width:90%; margin: 0 auto;">
        <div id='Wykres'><!-- Tu będzie wykres --></div>
    </div>


    <script>//wykres pudełkowy
        var xData = <?php echo json_encode($axisX); ?>;
        var yData = <?php echo json_encode($axisY); ?>;
        var colors = ['rgba(93, 164, 214, 0.5)', 'rgba(255, 144, 14, 0.5)', 'rgba(44, 160, 101, 0.5)', 'rgba(255, 65, 54, 0.5)', 'rgba(207, 114, 255, 0.5)', 'rgba(127, 96, 0, 0.5)', 'rgba(255, 140, 184, 0.5)', 'rgba(79, 90, 117, 0.5)', 'rgba(222, 223, 0, 0.5)'];
        console.log(yData);
        var data = [];

        for (var i = 0; i < xData.length; i++) {
            var result = {
                type: 'box',
                y: yData[i],
                name: xData[i],
                boxpoints: 'all',
                jitter: 0.5,
                whiskerwidth: 0.2,
                fillcolor: 'cls',
                marker: {
                    size: 2
                },
                line: {
                    width: 1
                }
            };
            data.push(result);
        };

        layout = {
            title: 'Dane dotyczące alkoholu i oceny wina',
            yaxis: {
                autorange: true,
                showgrid: true,
                zeroline: true,
                dtick: 1,
                gridcolor: 'rgb(255, 255, 255)',
                gridwidth: 1,
                zerolinecolor: 'rgb(255, 255, 255)',
                zerolinewidth: 2
            },
            margin: {
                l: 40,
                r: 30,
                b: 80,
                t: 100
            },
            xaxis: {
                title: "Ocena wina"
            },
            yaxis: {
                title: "Procent alkoholu"
            },
            paper_bgcolor: 'rgb(243, 243, 243)',
            plot_bgcolor: 'rgb(243, 243, 243)',
            showlegend: true
        };

        Plotly.newPlot('Wykres', data, layout);
    </script>
</body>

</html>
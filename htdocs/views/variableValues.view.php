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
                Wykres prezentujący wartości zmiennych
            </div><br><br>
        </div>
    </div>
    <div style="display: block; width:90%; margin: 0 auto;">
        <div id='Wykres'>
            <!-- Tu będzie wykres -->
        </div>
    </div>

    <script>
        //wykres liniowy

        var trace1 = {
            x: <?php echo json_encode($axisX); ?>,
            y: <?php echo json_encode($axisY); ?>,
            name: 'Wartość',
            type: 'scatter'
        };

        var data = [trace1];
        var layout = {
            bargap: 0.05,
            bargroupgap: 0.2,
            barmode: "overlay",
            title: "tytul",
            xaxis: {
                title: "Wartość"
            },
            yaxis: {
                title: "Ilość"
            },
            paper_bgcolor: 'rgb(233, 243, 243)',
            plot_bgcolor: 'rgb(233, 243, 243)',
            showlegend: true
        };
        Plotly.newPlot('Wykres', data, layout);
    </script>
</body>

</html>
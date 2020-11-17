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
        Histogram zmiennych
      </div><br><br>
    </div>
  </div>
  <div style="display: block; width:90%; margin: 0 auto;">
    <div id='Wykres'>
      <!-- Tu będzie wykres -->
    </div>
  </div>

  <script>
    var trace = {
      x: <?php echo json_encode($column); ?>,
      type: 'histogram',
      autobinx: false,
      histnorm: "count",
      title: "alkohol",
      marker: {
        color: "rgba(50, 100, 250, 0.7)",
        line: {
          color: "rgba(50, 100, 250, 1)",
          width: 1
        }
      },
      opacity: 0.5,
      xaxis: {
        title: "tu trzeba dać nazwę kolumny z której sie brało dane"
      },
      yaxis: {
        title: "Ilość"
      },
      showlegend: true
    };
    var data = [trace];
    Plotly.newPlot('Wykres', data);
  </script>

</body>

</html>
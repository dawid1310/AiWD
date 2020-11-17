  <html>

  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body>

      <div class="w-75 mx-auto"><br><br>
          <div class="w-50 mx-auto">
              <a class="btn btn-primary w-100" href="menu" role="button">Analiza i Wirtualizacja Danych</a><br><br>
              <div class="w-100 mx-auto">
                  <div class="form-group">
                  </div><br><br>
                  <div class="w-100 btn btn-success active">
                      Współczynnik Korelacji Liniowej Pearsona pomiędzy danymi wyjściowymi <b><?= end($heads); ?></b> a <b><?= $heads[$column]; ?></b>:
                      <br>
                      Korelacja pomiędy tymi zmiennymi jest <b><?= $desc; ?></b> i wynosi <b><?= $corelation; ?></b>
                  </div><br>
              </div>
          </div>
      </div>
  </body>

  </html>
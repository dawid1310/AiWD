<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="w-75 mx-auto"><br><br>
    <div class="w-50 mx-auto"><!--float-left">-->
        <div class="w-100 btn btn-primary active">
            Analiza i Wirtualizacja Danych
        </div><br>
        <div class="w-75 mx-auto">
                <div class="form-group">
                    <!--<a class="btn btn-primary w-100" href="select" role="button">Odczyt danych</a><br><br><br>
                    <a class="btn btn-primary w-100" href="add"    role="button">Dodawanie danych</a><br><br><br>
                    <a class="btn btn-primary w-100" href="sfm" role="button">Modyfikacja danych</a><br><br><br>
                    <a class="btn btn-primary w-100" href="delete" role="button">Usuwanie danych</a><br><br><br>-->
                </div><br><br>
                <div class="w-100 btn btn-success active">
                Wybierz plik .CSV do załadowania:
                    <form action="uploadFile" method="post" enctype="multipart/form-data">
                    <input type="file" name="userfile" id="userfile">
                    <input type="submit" value="Załaduj CSV" name="submit">
                    </form>
                </div>
        </div>
    </div>
</div>



</body>
</html> 

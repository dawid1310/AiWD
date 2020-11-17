<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="mx-auto w-75"><br><br>
    <a class="btn btn-primary w-100" href="menu" role="button">Analiza i Wirtualizacja Danych</a><br>
    <table class="table">
        <thead class="thead-dark">
            <tr class="thead-light">
                <th colspan="13">Wyznaczone statystyki opisowe dla zmiennych</th>
            </tr>
            <th scope="col">Numer</th>
            <?php foreach ($heads as $head) : ?>
                <th scope="col"><?= $head; ?></th>
            <?php endforeach; ?>
        </thead>
        <?php
        $i = 0;
        foreach ($data as $row) :
        ?><tbody>
                <td><?= $i; ?></td>
                <?php
                $i++;
                foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php
                endforeach;
            endforeach; ?>
            </tbody>
    </table>
</body>

</html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="mx-auto w-75"><br><br>
    <a class="btn btn-primary w-100" href="menu" role="button">Analiza i Wirtualizacja Danych</a><br><br>

    <table class="table">
        <thead class="thead-dark">
            <tr class="thead-light">
                <th colspan="13">Wyznaczone statystyki opisowe dla zmiennych</th>
            </tr>
            <th scope="col">Parametr</th>
            <th scope="col">Średnia</th>
            <th scope="col">Mediana</th>
            <th scope="col">Minimum</th>
            <th scope="col">Maximum</th>
            <th scope="col">Wariancja</th>
            <th scope="col">Odchylenie standardowe</th>
            <th scope="col">Kwartyl 25</th>
            <th scope="col">Kwartyl 75</th>
            <th scope="col">Rozstęp miedzykwartylowy</th>
            <th scope="col">Kwantyl 90</th>
            <th scope="col">Kwantyl 10</th>
        </thead>
        <?php
        $i = 0;
        foreach ($heads as $head) : ?>
            <tbody>
                <td><?= $head; ?></td>
                <td><?= $avgs[$i]; ?></td>
                <td><?= $medians[$i]; ?></td>
                <td><?= $min_values[$i]; ?></td>
                <td><?= $max_values[$i]; ?></td>
                <td><?= $variances[$i]; ?></td>
                <td><?= $std_deviations[$i]; ?></td>
                <td><?= $quartile25[$i]; ?></td>
                <td><?= $quartile75[$i]; ?></td>
                <td><?= $iqr[$i]; ?></td>
                <td><?= $quantile90[$i]; ?></td>
                <td><?= $quantile10[$i]; ?></td>
            <?php
            $i++;
        endforeach; ?>
            </tbody>
    </table>
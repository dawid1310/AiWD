<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="mx-auto w-75"><br><br>
    <a class="btn btn-primary w-100" href="menu" role="button">Analiza i Wirtualizacja Danych</a><br><br>

    <table class="table">
        <thead class="thead-dark">
            <tr class="thead-light">
                <th colspan="13">Punkty oddalone od dolnego kwartyla</th>
            </tr>
            <?php foreach ($heads as $head) : ?>
                <th scope="col"><?= $head; ?></th>
            <?php endforeach; ?>
        </thead>
        <?php foreach ($low_point as $point) : ?>
            <tbody>
                <?php foreach ($point as $data) : ?>
                    <td><?= $data; ?></td>
                <?php endforeach; ?>
            </tbody>
        <?php endforeach; ?>
    </table><br><br>

    <table class="table">
        <thead class="thead-dark">
            <tr class="thead-light">
                <th colspan="13">Punkty oddalone od górnego kwartyla</th>
            </tr>
            <th scope="col">No.</th>
            <?php foreach ($heads as $head) : ?>
                <th scope="col"><?= $head; ?></th>
            <?php endforeach; ?>
        </thead>
        <?php
        $i = 1;
        foreach ($high_point as $point) : ?>
            <tbody>
                <td><?= $i; ?></td>
                <?php foreach ($point as $data) : ?>
                    <td><?= $data; ?></td>
                <?php endforeach;
                $i++;
                ?>
            </tbody>
        <?php endforeach; ?>
    </table>
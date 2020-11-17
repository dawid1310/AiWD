<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="w-75 mx-auto"><br><br>
        <div class="w-50 mx-auto">
            <!--float-left">-->
            <a class="btn btn-primary w-100" href="menu" role="button">Analiza i Wirtualizacja Danych</a><br><br>
            <div class="w-75 mx-auto">
                <div class="form-group">
                    <form action="<?php echo $page ?>" method="post">
                        <fieldset>
                            <legend>Selecting two elements</legend>
                            <p>
                                <label>Select first column:</label>
                                <select name="column1">
                                    <?php
                                    $i = 0;
                                    foreach ($heads as $head) : ?>
                                        <option value=<?= $i; ?>><?= $head; ?></option>
                                    <?php
                                        $i++;
                                    endforeach; ?>
                                </select>
                                <br>
                                <label>Select second column</label>
                                <select name="column2">
                                    <?php
                                    $i = 0;
                                    foreach ($heads as $head) : ?>
                                        <option value=<?= $i; ?>><?= $head; ?></option>
                                    <?php
                                        $i++;
                                    endforeach; ?>
                                </select>
                            </p>
                        </fieldset>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div><br><br>
            </div>
        </div>
    </div>

</body>

</html>
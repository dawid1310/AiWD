<?php
return[
    'database'=>[
        'string'=>' "
        (DESCRIPTION =
        (ADDRESS_LIST =
            (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
        )
        (CONNECT_DATA =
                (SERVICE_NAME = orcl)
            )
        )
        "',
        'username'=>'SYSTEM',
        'password'=>'root',
        'options'=>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM
        ]
    ]
];



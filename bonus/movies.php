<?php
        include __DIR__ . '/db/movies.php';

        $res = [
            'success' => true,
            'response' => $movies,
        ];

        header('Content-Type: application/json');

        echo json_encode($res);

    ?>
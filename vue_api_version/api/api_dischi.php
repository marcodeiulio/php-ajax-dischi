<?php

include __DIR__ . '/../../includes/data.php';

header('Content-Type: Application/json');

echo json_encode($database);

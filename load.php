<?php
require_once(__DIR__ . '/api/init.php');

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 1;
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 5;

include(__DIR__ . '/api/matterQuery.php');

?>
<?php include('matter-list-item.php'); ?>

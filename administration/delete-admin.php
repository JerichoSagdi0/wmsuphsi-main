<?php

    require_once '../classes/administration_model.php';

    $delete_id = $_POST['delete_id'];

    $administration = new Administration();

    $delete = $administration->deleteRecords($delete_id);

?>
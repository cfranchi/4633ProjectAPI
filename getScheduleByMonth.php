<?php
    header("Access-Control-Allow-Origin: *");

    include './ScheduleProvider.php';

    $provider = new ScheduleProvider();
    $month = $_POST["month"];
    $provider->getScheduleByMonth($month);
    echo json_encode($provider->returnService()->returnMatches());
?>
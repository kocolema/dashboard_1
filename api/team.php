<?php

require '../../app/common.php'

//fetch from database
$teams = Team::findAll();

//convert to json and print
echo json_encode($teams);

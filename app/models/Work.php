<?php

class Worker
{
  public $work_id;
  public $task_id;
  public $team_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function _construct($data) {
    .....//TODO
  }

  public static function findByTaskId($taskId) {
    //1. get db connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);
  }

  //2. prepare query
  //3.
}

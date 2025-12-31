<?php
include "../config/db.php";
$job = $conn->query("SELECT * FROM jobs WHERE status='pending' LIMIT 1")->fetch_assoc();
if($job){
  $conn->query("UPDATE jobs SET status='processing' WHERE id={$job['id']}");
  sleep(2);
  $conn->query("UPDATE jobs SET status='completed' WHERE id={$job['id']}");
}
echo "Worker executed";
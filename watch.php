<?php 

require 'lib/resque/lib/Resque.php';
Resque::setBackend('tunnel.pagodabox.com:6379');

$status = new Resque_Job_Status($argv[1]);
if(!$status->isTracking()) {
  echo "Resque is not tracking the status of this job.\n";
} else {
  echo "Tracking status of ".$argv[1].". Press [break] to stop.\n\n";
  echo "Status of ".$_GET['code']." is: ".$status->get()."\n");

}
?>


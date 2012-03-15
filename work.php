<?php

require 'lib/resque/lib/Resque.php';
Resque::setBackend('tunnel.pagodabox.com:6379');

$args = array(
  'test' => 'test'
);

$jobId = Resque::enqueue('default', 'Send_Email', $args, true);
echo "Queued job ".$jobId."\n\n";

?>
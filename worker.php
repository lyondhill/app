<?php

require 'lib/Resque.php';
Resque::setBackend('tunnel.pagodabox.com:6379');

class Send_Email
{
    public function perform()
    {
        // Work work work
        mail('lyondhill@gmail.com', 'Test Subject', "This is an email message from the pongo app");
        echo $this->args['name'];
        echo "email sent";
    }
}

require 'resque.php';

?>
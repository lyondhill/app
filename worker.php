<?php

require 'lib/Resque.php';
Resque::setBackend('tunnel.pagodabox.com:6379');

class Send_Email
{
    public function perform()
    {
        // Work work work
<<<<<<< HEAD
        mail('lyondhill@gmail.com', 'Test Subject', "This is an email message from the pongo app");
=======
        mail('clay@pagodabox.com', 'Test Subject', "This is an email message from the pongo app");
>>>>>>> a06bf493b4d792527029a7a8defed36741d61130
        echo $this->args['name'];
        echo "email sent";
    }
}

require 'resque.php';

// echo "hello there I'm starting up, woot!";

// while (true) {
  
//   echo "loop da loop";
//   sleep(5);

// }

// 
?>
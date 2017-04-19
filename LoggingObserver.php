<?php
// Observer's class that implement SplObserver(built in PHP interface)
// see http://php.net/manual/en/class.splobserver.php for more details

class LoggingObserver implements SplObserver {

   // implement update method provided by SplObserver
  public function update ( SplSubject $splSubject ) {
    // at here we can do what we want
    // maybe want to sending an email
    // or anything else
    echo 'New user with the name ' . $splSubject->getUserName() . '<br />';
  }
  
}

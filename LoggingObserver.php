<?php
// Observer's class that implement SplObserver(built in PHP interface)
// see http://php.net/manual/en/class.splobserver.php for more details

class LoggingObserver implements SplObserver {

  public function update ( SplSubject $splSubject ) {
    echo 'New user with the name ' . $splSubject->getUserName() . '<br />';
  }
  
}

<?php

// class subject that implement SplSubject
// see http://php.net/manual/en/class.splsubject.php for more details

class LoggingSubject implments SplSubject {

  // array for store the registered SplObserver
  private $splObject = [];
  // store registered user
  private $name;
  
  // implement attach method provided by SplSubject
  public function attach ( SplObserver $splObserver ) {
    array_push( $this->splObject, $splObserver );
  }
  
  // implement detach method provided by SplSubject
  public function detach ( SplObserver $splObserver ) {
  
  }
  
  // implement notify method provided by SplSubject
  public function notify () {
    // loop over all the registered SplObserver
    // and call the update method
    // to execute observer's method
    foreach ( $this->splObject as $value ) {
      // pass splsubject as Object
      $value->update( $this );
    }
  }
  
  // custom event call by the subject
  // this method will call notify() method
  // to broadcast the event to registered Observer
  public function addNewUser ( $name ) {
    $this->name = $name;
  }
  
  // custom method providing data to registered Observer
  public function getUserName () {
    return $this->name;
  }

}

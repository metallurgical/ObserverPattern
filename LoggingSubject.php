<?php

// class subject that implement SplSubject
// see http://php.net/manual/en/class.splsubject.php for more details

class LoggingSubject implements SplSubject {

  // array for store the registered SplObserver
  private $splObject = [];
  // store registered user
  private $name;
  
  // implement attach method provided by SplSubject
  public function attach ( SplObserver $splObserver ) {
    array_push( $this->splObject, $splObserver );
  }  
  // implement detach method provided by SplSubject
  // unregistered subscriber who want out from list
  public function detach ( SplObserver $splObserver ) {
    foreach ( $this->splObject as $key => $value ) {
      if ( $value === $splObserver )
        unset( $this->splObject[ $key ] );
    }
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
  // custom method providing data to 
  // registered Observer
  public function getUserName () {
    return $this->name;
  }

}

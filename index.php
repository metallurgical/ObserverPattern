<?php
// require both files
require 'LoggingObserver.php';
require 'LoggingSubject.php';

// instantiate LoggingSubject
$subject = new LoggingSubject;

// instantiate LoggingObserver
$observer = new LoggingObserver;

// register observer to subscribe the subject's event
// by calling the attach method
$subject->attach( $observer );

// run some of event, when this event executed
// the registered observer will listen to this event
// and trigger its method for logging or anything else
$subject->addNewUser( 'Ahmad' );
$subject->addNewUser( 'Abu' );

// later we can un-registered the registered observer
// by calling the detach method
$subject->detach( $observer );


//Output
New user with the name Ahmad
New user with the name Abu

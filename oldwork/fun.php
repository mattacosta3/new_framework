<?php

//      Below is a task list created in the php file and shown online.
//      Class task, created new task, in a array named fun. 
//      Completed one task with code in php. 



class fun {
    public $description;
    
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}


// $fun = new fun....
// $fun->complete();
// dd($fun->complete());


$fun = [
    new fun('clean room'),
    new fun('brush teeth'),
    new fun('make bed')
];

$fun[0]->complete();
$fun[2]->complete();








// Before MYSQL
$tasktodo = [
    'Title' => 'Bible Reading',
    'Due Date' => 'Today',
    'Assigned To' => 'Matthew Acosta',
    'Completed' => false,
    'Grade' => true
];

// Using a function from functions.php in the index
// IDcheck(21);
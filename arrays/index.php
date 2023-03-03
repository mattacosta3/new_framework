<?php

// class Post {

//     public $title;

//     public $published;

//     public function __construct($title, $published){
//         $this->title = $title;
//         $this->published = $published;
//     }
// }

// $posts = [
//     new Post ('My First Post', true),
//     new Post ('My Second Post', true),
//     new Post ('My Third Post', true),
//     new Post ('My Fourth Post', false)
// ];


class tasks {

    public $description;

    public $completed;

    public $author;

    public function __construct($description, $author, $completed){
        $this->description = $description;
        $this->completed = $completed;
        $this->author = $author;
    }
}

$tasklist = [
    new tasks ('Homework', 'Matthew' ,false),
    new tasks ('Kill frog', 'Joe', false),
    new tasks ('Study php and arrays', 'Drew', true),
    new tasks ('take out dogs', 'Matthew' ,true),
];

$completedtasks = array_filter($tasklist, function ($tasklist){
    return $tasklist->completed;
});

$uncompletedtasks = array_filter($tasklist, function ($tasklist){
    return ! $tasklist->completed;
});

$modified = array_map(function ($tasklist) {
    return (array) $tasklist;
}, $tasklist);

var_dump($modified);


$tasksname = array_column($modified, 'description', '
author');

var_dump($tasksname);
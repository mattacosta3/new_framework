<?php



class Querybuilder {

    protected $pdo;

    public function __construct($pdo){
        $this->pdo=$pdo;
    }
    
    
    public function fetchAll($table, $intoClass){

    $statement = $this->pdo->prepare("select * from $table");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $keys){

       $placeholder = sprintf(
            'insert into %s (%s) value (%s)',
            $table,
            implode(',', array_keys($keys)),
            ':' . implode(', :', array_keys($keys)),
        );

        $statement = $this->pdo->prepare($placeholder);
        $statement->execute($keys);


        // Alternate way to add todo into mysql but only with this table
        // $statement = $this->pdo->prepare("insert into $table (description) value ('$keys')");
        // $statement->execute();
    }
}
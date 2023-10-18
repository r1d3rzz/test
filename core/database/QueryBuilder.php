<?php

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr, $table)
    {
        $getDataKey = array_keys($dataArr);
        $questionMarks = "";
        foreach ($getDataKey as $key => $val) {
            $questionMarks .= "?,";
        }
        $questionMarks = rtrim($questionMarks, ",");
        $column = implode(",", $getDataKey);
        $sql = "INSERT INTO users ($column) VALUES ($questionMarks)";
        $statement = $this->pdo->prepare($sql);
        $getDataValue = array_values($dataArr);
        $statement->execute($getDataValue);
        return redirect();
    }

    public function delete($id, $table)
    {
        $sql = "DELETE FROM $table WHERE `$table`.`id` = $id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return redirect();
    }
}

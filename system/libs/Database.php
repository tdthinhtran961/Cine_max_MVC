<?php

class Database extends PDO
{
    public function __construct($dsn, $USER, $PASS, $options)
    {
        parent::__construct($dsn, $USER, $PASS, $options);
        // $conn = new PDO($dsn,_USER,_PASS,$options);
    }

    
    public function select($sql)
    {
        try {
            $statement = $this->prepare($sql);

            // foreach ($data as $key => $value) {
            //     $statement->bindParam($key, $value);
            // }
            $statement->execute();
            return $statement->fetchALL(PDO::FETCH_ASSOC);
        } catch (Exception $exp) {
            echo $exp->getMessage() . "<br>";
            echo "File: " . $exp->getFile() . "<br>";
            echo "Line: " . $exp->getLine();
        }
    }


    public function insert($table, $data){
        $keys = implode(",", array_keys($data));
        $values = ":" . implode(",:", array_keys($data));

        $sql = "INSERT INTO $table($keys) VALUES($values)";

        try {

            $statement = $this->prepare($sql);

            return $statement->execute($data);
        } catch (Exception $exp) {
            echo $exp->getMessage() . "<br>";
            echo "File: " . $exp->getFile() . "<br>";
            echo "Line: " . $exp->getLine();
        }
    }


    public function update($table,$data,$idEdit){
        $updatekeys = "";
        foreach($data as $key => $value) {
            $updatekeys .= "$key=:$key,";
        };
        $updatekeys = rtrim($updatekeys, ",");
        $sql = "UPDATE $table SET $updatekeys WHERE idmovie=$idEdit";
        try {
            // $data['idEdit']= $idEdit;
            $statement = $this->prepare($sql);

            return $statement->execute($data);
        } catch (Exception $exp) {
            echo $exp->getMessage() . "<br>";
            echo "File: " . $exp->getFile() . "<br>";
            echo "Line: " . $exp->getLine();
        }
    }

    public function updateshowtime($table,$data,$cond){
        $updatekeys = "";
        foreach($data as $key => $value) {
            $updatekeys .= "$key=:$key,";
        };
        $updatekeys = rtrim($updatekeys, ",");
        $sql = "UPDATE $table SET $updatekeys WHERE $cond";
        try {
            // $data['idEdit']= $idEdit;
            $statement = $this->prepare($sql);

            return $statement->execute($data);
        } catch (Exception $exp) {
            echo $exp->getMessage() . "<br>";
            echo "File: " . $exp->getFile() . "<br>";
            echo "Line: " . $exp->getLine();
        }
    }


    public function delete($table,$cond,$limit = 1){

        $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
        // $dataDelete = ["idDelete" => $idDelete];
        try {
            $statement = $this->prepare($sql);
            return $statement->execute();
        } catch (Exception $exp) {
            echo $exp->getMessage() . "<br>";
            echo "File: " . $exp->getFile() . "<br>";
            echo "Line: " . $exp->getLine();
        }
    }



    public function affectedRows($sql,$usermame,$password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($usermame,$password));
        return $statement->rowCount();
    }

    public function selectUser($sql,$usermame,$password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($usermame,$password));
        return $statement->fetchALL(PDO::FETCH_ASSOC);
    }



}

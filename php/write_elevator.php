<?php
function update_elevator(int $node_ID, int $new_status = 1): void{
     $db = new PDO(
          'mysql:host=127.0.0.1;dbname=elevator',
          'root',
          ''
     );
     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
     $db->beginTransaction();
     try{
          //Change elevator
          $query = 'UPDATE elevatorNetwork
                    SET status = :setAttribute
                    WHERE nodeID = :id';

          $statement = $db->prepare($query);
          $statement->bindValue('stat', $new_status);
          $statement->bindValue('id', $node_ID);
          if(!statement->execute()) {
               throw new Exception('Error - exception thrown in try block');
          }
          $db->commit();
     }
     catch(Exception $e){
          $db->rollBack();
     }
}

update_elevator(2,25);
update_elevator(100,5);
?>

<?php
require_once '../Connect/connect.php';
class Product extends connect{
              public function getALLColor(){
                            $sql ='select * from variant_colors';
                            $stmt = $this->connect()->prepare($sql);
                            $stmt->execute();
                            return $stmt->fetchAll(PDO::FETCH_ASSOC);
              }

              public function getALLSize(){
                            $sql ='select * from variant_sizes';
                            $stmt = $this->connect()->prepare($sql);
                            $stmt->execute();
                            return $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
              public function getALLCategory(){
                            $sql ='select * from categores';
                            $stmt = $this->connect()->prepare($sql);
                            $stmt->execute();
                            return $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
}
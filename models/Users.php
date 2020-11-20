<?php

    class Users extends DB{

        public function all(){
            try{
                $stm=parent::connect()->prepare("SELECT * FROM users");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function insert(array $data){
            try {
                $stm=parent::connect()->prepare("INSERT INTO users (names, last_names, email) VALUES (?, ?, ?)");
                $stm->bindParam(1, $data['names'], PDO::PARAM_STR);
                $stm->bindParam(2, $data['last_names'], PDO::PARAM_STR);
                $stm->bindParam(3, $data['email'], PDO::PARAM_STR);
                $stm->execute();
            } catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function delete($id){
            try {
                $stm=parent::connect()->prepare("DELETE FROM users WHERE id_users = ?");
                $stm->bindParam(1, $id, PDO::PARAM_INT);
                $stm->execute();
            } catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function update(array $data, $id){
            try {
                $stm=parent::connect()->prepare("UPDATE users SET names = ?, last_names = ?, email = ? WHERE id_users = ?");
                $stm->bindParam(1, $data['names'], PDO::PARAM_STR);
                $stm->bindParam(2, $data['last_names'], PDO::PARAM_STR);
                $stm->bindParam(3, $data['email'], PDO::PARAM_STR);
                $stm->bindParam(4, $id, PDO::PARAM_INT) ;
                $stm->execute();
            } catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function consult_id($id){
            try {
                $stm=parent::connect()->prepare("SELECT * FROM users WHERE id_users = ?");
                $stm->bindParam(1, $id, PDO::PARAM_INT );
                $stm->execute();
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e){
                die($e->getMessage());
            }
        }
    }


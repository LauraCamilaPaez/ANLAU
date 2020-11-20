<?php

    class UsersController extends users{
        public function index(){
            $users=parent::all();
            require_once('views/users/index.php');
        }
        public function create(){
            require_once('views/users/create.php');
        }

        public function store(){
            $data=array(
                //'Nombre de la columna en la DB' => $_POST['name del FORMULARIO']
                'names' => $_POST['names'],
                'last_names' => $_POST['last_names'],
                'email' => $_POST['email']
            );

            parent::insert($data);
            header('location:?controller=Users&method=index');
        }

        public function destroy(){
            parent::delete($_GET['id']);
            header('location:?controller=Users&method=index');
        }

        public function edit(){
            $user=parent::consult_id($_GET['id']);
            require_once('views/users/edit.php');
        }

        public function update_user(){
            $data = array(
                'names' => $_POST['names'],
                'last_names' => $_POST['last_names'],
                'email' => $_POST['email']
            );

            parent::update($data, $_GET,['id']);
            header('location:?controller=Users&method=index');
        }

    }


?>
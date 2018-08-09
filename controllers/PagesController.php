<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $visits = App::get('database')->getAll("visits");
        echo json_encode($visits);
    }

    public function listPets()
    {
        $pets = App::get('database')->getAll("pets");
        echo json_encode($pets);
    }

    public function viewPet($params)
    {
        $pet = App::get('database')->getOne("pets", $params);
        echo json_encode($pet);
    }

    public function addPet()
    {
        $pets = App::get('database')->getAll("pets");
        echo json_encode($pets);
    }

    public function listClients()
    {
        $clients = App::get('database')->getAll("customers");
        echo json_encode($clients);
    }

    public function viewClient($params)
    {
        $client = App::get('database')->getOne("customers", $params);
        echo json_encode($client);
    }

    public function addClient()
    {
        $clients = App::get('database')->getAll("customers");
        echo json_encode($clients);
    }


    public function listUsers()
    {
        $users = App::get('database')->getAll("users");
        echo json_encode($users);
    }

    public function viewUser($params)
    {
        $user = App::get('database')->getOne("users", $params);
        echo json_encode($user);
    }

    public function addUser()
    {
        $userDetails = $_POST;
        $userDetails['password'] = hashData($userDetails);
        App::get('database')->addNew("users", $userDetails);
        echo json_encode('pass hashed!');

    }

    public function listVisits()
    {
        $visits = App::get('database')->getAll("visits");
        echo json_encode($visits);
    }
}
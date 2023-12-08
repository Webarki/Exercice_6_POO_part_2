<?php

namespace App\src\Controller;

use App\src\Entity\User;

class UserController extends TwigController
{

    public function index()
    {
        $getUsers = new User();
        $users = $getUsers->getUserList();
        echo $this->twig->render("user/index.html.twig", [
            'users' => $users
        ]);
    }
}

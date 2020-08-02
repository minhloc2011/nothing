<?php
/**
 * Created by PhpStorm.
 * User: <minhloc.vhit@gmail.com>
 * Date: 2019/11/13
 * Time: 13:58
 */

namespace App\Modules\User\Controllers;

class UserController
{
    public function index(string $username)
    {
        return view('users.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function edit() {
        return view('users.edit');
    }

public function credit() {
    return view('users.credit');
}

public function paid() {
    return view('users.paid');
}

public function reservation() {
    return view('users.reservation');
}

public function logout() {
    return view('users.logout');
}

}
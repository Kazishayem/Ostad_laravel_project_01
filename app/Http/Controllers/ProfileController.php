<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables with specified values
        $name = "Donal Trump";
        $age = "75";

        // Create data array with id, name, and age
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie parameters
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Return response with data and cookie
        return response($data, 200)->cookie(
            $cookieName,
            $cookieValue,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );
    }
}

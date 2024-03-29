<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'CodeOfDev'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
    }
}
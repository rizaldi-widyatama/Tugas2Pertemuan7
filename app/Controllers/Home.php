<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Seri Tutorial CodeIgniter 4: Login dan Register @ qadrlabs.com'
        ];
        // if (session()->get('logged_in')) {
            return view('welcome_message');
        // } else {
            // return view('home', $data);
        // }
    }

}


// namespace App\Controllers;

// class Home extends BaseController
// {
//     public function index(): string
//     {
//         return view('welcome_message');
//     }
// }

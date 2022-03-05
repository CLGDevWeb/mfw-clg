<?php 

namespace App\Controller;

use App\Model\User;
use App\View\Renderer;

class HomeController
{    
    public function index()
    {
        $user = new User();
        $users = $user->all();

        return Renderer::make('home/index', compact('users'));
    }

    public function json()
    {
        $data = [
            'posts' => [
                [
                    'title' => 'Super titre',
                    'author' => 'Mr. Smith',
                    'date' => '19/07/2005',
                ],
                [
                    'title' => 'Super titre2',
                    'author' => 'Mr. Dido',
                    'date' => '19/07/1985',
                ],
                [
                    'title' => 'Super titre2',
                    'author' => 'Mr. Morko',
                    'date' => '19/07/2018',
                ]
            ],
            'links' => [
                [
                    'next' => 3,
                    'previous' => 1,
                    'current' => 2
                ]
            ]
        ];
        
        return Renderer::json($data);
    }
}
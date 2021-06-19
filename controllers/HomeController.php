<?php
namespace controllers;

/**
 * Home controllers
 */
class HomeController
{
    
    public function home()
    {
        return view('home',['post'=>"This is my post"]);
    }
}

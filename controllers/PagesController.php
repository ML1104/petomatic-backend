<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $visits = App::get('database')->getAll("visits");
        json_encode($visits);
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function storeTask()
    {
        App::get('database')->addNew("tasks", $_POST);
        return redirect('/');
    }

    public function products()
    {
        $products = App::get('database')->getAll("products");

        return view('products', compact('products'));
    }
}
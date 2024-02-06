<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * welcome page
     * 
     * @param Request $request
     */
    public function welcome(Request $request)
    {
        $pagination = Post::paginate();

        return view('welcome', [
            'pagination' => $pagination
        ]);
    }
}

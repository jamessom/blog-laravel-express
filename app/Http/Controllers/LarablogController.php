<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class LarablogController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Página inicial do Larablog
     */
    public function index()
    {

        $itensMenu = [
            0 => "Home",
            1 => "Sobre",
            2 => "Posts",
            3 => "Contato",
        ];

        $posts = $this->post->paginate(5);

        $categorias = [
            0 => 'Laravel',
            1 => 'Blade',
            2 => '@yield',
            3 => 'Template',
        ];

        $autores = [
            0 => 'James',
            1 => 'Jamess Queiroz',
            2 => 'Admin',
            3 => 'Admiin',
        ];



        return view("Larablog.index", compact( 'itensMenu' ,'posts', 'categorias', 'autores'));
    }
}

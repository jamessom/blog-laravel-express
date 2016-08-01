<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LarablogController extends Controller
{
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
        
        $posts = [
            0 => array(
                'titulo'          => 'Meu titulo 01',
                'dt_publicacao'   => '01/08/2016',
                'autor'           => 'admiin',
                'num_comentarios' => '4',
                'texto'           => 'Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.',
            ),
            1 => array(
                'titulo'          => 'Meu titulo 011',
                'dt_publicacao'   => '02/08/2016',
                'autor'           => 'admiin',
                'num_comentarios' => '8',
                'texto'           => 'Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.',
            ),
            2 => array(
                'titulo'          => 'Meu titulo 0111',
                'dt_publicacao'   => '03/08/2016',
                'autor'           => 'admiin',
                'num_comentarios' => '12',
                'texto'           => 'Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.',
            )
        ];
        
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

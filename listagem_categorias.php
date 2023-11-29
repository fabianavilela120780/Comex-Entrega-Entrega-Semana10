<?php

namespace  App \ Http \ Controllers ;

use  App \ Http \ Controllers \ Controller ;
use  Illuminate \ Http \ Request ;

classe CategoriasController estende Controlador
{
    índice de função pública()
    {
        $ categorias = [
            'CELULARES' ,
            'INFORMÁTICA' ,
            'MÓVEIS' ,
            'AUTOMOTIVA' ,
            'LIVROS' ,
            'BELEZA' ,
            'ESPORTE' ,
            'LUXO' ,
        ];

        return view( 'categorias.index' )-> with ( 'categorias' , $ categorias );
    }
}

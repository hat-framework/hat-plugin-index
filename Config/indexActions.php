<?php 
use classes\Classes\Actions;
class indexActions extends Actions{
    protected $permissions = array(
        "index" => array(
            "nome"      => "index",
            "label"     => "Index",
            "descricao" => "Permite visualizar a página index",
            "default"   => "s",
        ),
    
    );
    
    protected $actions = array( 
        "index/index/index" => array(
            "label" => "Página Inicial", "publico" => "s", "default_yes" => "s","default_no" => "n",
            "permission" => "index",
            "menu" => array()
        ),
        "index/index/produto" => array(
            "label" => "Produto", "publico" => "s", "default_yes" => "s","default_no" => "n",
            "permission" => "index",
            "menu" => array(),
            'breadscrumb' => array('index/index/index', 'index/index/produto')
        ),
        "index/index/produtomais" => array(
            "label" => "Veja Mais", "publico" => "s", "default_yes" => "s","default_no" => "n",
            "permission" => "index",
            "menu" => array(),
            'breadscrumb' => array('index/index/index', 'index/index/produto', 'index/index/produtomais')
        ),
        "index/index/biblioteca" => array(
            "label" => "Biblioteca", "publico" => "s", "default_yes" => "s","default_no" => "n",
            "permission" => "index",
            "menu" => array(
                'Balanços' => array(
                    'Balanço Patrimonial' => 'index/index/biblioteca#patrimonial',
                    'Demonstração de Resultado' => 'index/index/biblioteca#dre',
                    'Fluxo de Caixa' => 'index/index/biblioteca#dfc'
                )),
            'breadscrumb' => array('index/index/index', 'index/index/biblioteca')
        ),
        "index/index/aviso" => array(
            "label" => "Aviso", "publico" => "s", "default_yes" => "s","default_no" => "n",
            "permission" => "index",
            "menu" => array()
        ),
        
    );
    
}
?>

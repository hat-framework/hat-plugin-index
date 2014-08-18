<?php
class indexController extends \classes\Controller\Controller{
    public $model_name = 'index/index';
    
    public function index(){
         if(\usuario_loginModel::CodUsuario() !== 0)Redirect('empresa/index');
          $this->genTags(
                "Finance-e, Plataforma para análise e gestão de investimentos", 
                "São mais de 12 milhões de dados para que você possa analisar e acompanhar seus investimentos com tranquilidade.", 
                'análise fundamentalista, análise financeira, balanços, indicador fundamentalista, '
                . 'demonstração financeira, mercado de ações, mercado financeiro, análise de investimentos,'
                . 'bovespa, bolsa de valores, empresas listadas, lista de empresas da bolsa'
        );
        $this->display('index/index/index');
    }
    
    public function aviso(){
          $this->genTags(
                "Aviso Finance-e", 
                "São mais de 12 milhões de dados para que você possa analisar e acompanhar seus investimentos com tranquilidade.", 
                'análise fundamentalista, análise financeira, balanços, indicador fundamentalista, '
                . 'demonstração financeira, mercado de ações, mercado financeiro, análise de investimentos,'
                . 'bovespa, bolsa de valores, empresas listadas, lista de empresas da bolsa'
        );
        $this->display('index/index/aviso');
    }
    
     public function produto(){
        if(isset($this->vars[0])){$this->registerVar('codusuario',$this->vars[0]);}
        $this->genTags(
                "Gerenciador de Investimentos", 
                "Gerencie seus investimentos do mercado financeiro com tranquilidade", 
                'gerenciador de investimentos, bovespa, bolsa de valores, calculadora de imposto de renda, analisar investimentos'
        );
        $this->display('index/index/produto');
    }
    
     public function produtomais(){
         $this->genTags(
                "Gerenciador de Investimentos - detalhes", 
                "Gerencie seus investimentos do mercado financeiro com tranquilidade", 
                'gerenciador de investimentos, bovespa, bolsa de valores, calculadora de imposto de renda, analisar investimentos'
        );
        $this->display('index/index/produtomais');
    }
    
    public function biblioteca(){
        $this->genTags(
                "Biblioteca Financeira", 
                "Veja descrição de balanços, indicadores, mercado de ações e muito mais", 
                'bovespa, bolsa de valores, balanços, demonstrativo financeiro, '
                . 'indicadores fundamentalistas, mercado de ações, investimentos, mercado financeiro'
        );
         $this->display('index/index/biblioteca');
    }
}

<?php
class indexInstall extends classes\Classes\InstallPlugin{
    
    protected $dados = array(
        'pluglabel' => 'Index',
        'isdefault' => 'n',
        'detalhes'  => 'Visualizar Página Inicial',
    );
    
    public function install(){
        return true;
    }
    
    public function unstall(){
        return true;
    }
}
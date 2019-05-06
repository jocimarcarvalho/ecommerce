<?php

namespace Lexter;

use Rain\Tpl;

class Page {
    private $tpl;

    private $options = [];
    private $defaults = [
        "data"=>[]
    ];

    public function __construct($opts = array()){
        $this->options = array_merge($this->defaults, $opts); // Se vier algo no parâametro, sobrecreve o padrão
        //o array_merge vai meclar as informações do dois arrays e guardar no options


        // config
	    $config = array(
                        "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"] . "\/views\/",
                         "cache_dir"     => $_SERVER["DOCUMENT_ROOT"] ."\/views-cache\/",
                          "debug"         => false // set to false to improve the speed
                 );

             Tpl::configure( $config );

             $this->tpl = new Tpl;

             $this->setData($this->options["data"] );

             $this->tpl->draw("header"); //será criado e todas as páginas- estará na pasta 'view'

    }

    private function setData($data = array())

    {
        foreach($data as $key => $value)
            {
                $this->tpl->assign($key, $value);
            } 

    }

    //Este médotod renderiz o corpo da página
    public function setTpl($name, $data = array(), $returnHTML = false)
    {
        $this->setData($data); //seta os dados no template
       return  $this->tpl->draw($name, $returnHTML);//recebe o nome do template para renderizar

       //o return é para a necessidade de utilizá-lo em outro lugar
    }

    public function __destruct(){

        $this->tpl->draw("footer");// Assim que a classe terminar a execução o foote tamb será add no template 
    }
}
?>
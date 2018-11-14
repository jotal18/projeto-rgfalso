<?php

namespace APP;

require_once('vendor/smarty/smarty/libs/Smarty.class.php');

class Page {

    private $tpl;

    function __construct()
    {

        // parent:: __construct();

        $this->tpl = new \Smarty();
        
        $this->tpl->template_dir = $_SERVER['DOCUMENT_ROOT'] . '/rgfalso/smarty/templates/';
        $this->tpl->compile_dir  = $_SERVER['DOCUMENT_ROOT'] . '/rgfalso/smarty/templates_c/';
        $this->tpl->config_dir   = $_SERVER['DOCUMENT_ROOT'] . '/rgfalso/smarty/configs/';
        $this->tpl->cache_dir    = $_SERVER['DOCUMENT_ROOT'] . '/rgfalso/smarty/cache/';

        $this->tpl->caching = true;
        
    }

    private function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }       
    }

    public function setTpl($template, $data = array())
    {
        $this->setData($data);

        return $this->tpl->display($template);
    }
    
}



?>
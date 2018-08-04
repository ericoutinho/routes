<?php

    # Class FriendlyUrl
    # @autor: Eric Coutinho <ericoutinho@gmail.com>
    # Classe simples para tratar de url amigável no PHP

    namespace Main;

    class FriendlyUrl{
    
    # Vetor com os modelos de rota
    private $templates = array();
    
    function add($temp){
        # Cria um vetor com os parâmetros de URl conforme o modelo informado
        # Ex.: /{index}/{module}/{article}/{id}
        preg_match_all('{[^\{][a-z][a-zA-Z0-9_]*}', $temp, $r);
        # Armazena o vetor
        $this->templates[] = $r[0];
    }
    
    function get($url){
        # Recupera a Url atual e explode em um vetor
        # a URl pode ser informada através de $_SERVER['PATH_INFO']
        $u = explode('/', ltrim($url, '/'));

        # Compara o vetor da URl e recupera os valores conforme o modelo
        foreach($this->templates as $i){
            if (count($u) == count($i)){
                return array_combine($i, $u);
            }   
        }
    }

}

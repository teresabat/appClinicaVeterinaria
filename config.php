<?php 

    spl_autoload_register(function($nomeClasse){

        $pastaClasses = 'classes/';

        $possiveisCaminhosPastas = [
            $pastaClasses,
            $pastaClasses . 'models/',
            $pastaClasses . 'views/',
            $pastaClasses . 'controllers/'
        ];
        
        foreach($possiveisCaminhosPastas as $pastaAtual){
            $nomeArquivo = $pastaAtual . $nomeClasse . '.php';
            if (file_exists($nomeArquivo)){
                require_once $nomeArquivo;
                break;
            }
        }
    });

?>
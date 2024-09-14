<?php 

class animal {
    public $codigo;
    public $nome;
    public $especie;

    function __construct($codigo = null, $nome = null, especie $especie = null)
    {
        $this->codigo=$codigo;
        $this->nome=$nome;
        if ($especie != null)
            $this->especie=$especie;
        else
            $this->especie = new especie();
    }
}
?>
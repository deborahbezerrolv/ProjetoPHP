<?php

class Layout {
    public function exibir($arquivo){
        include $arquivo.".php";
    }

    public function pagina($pagina){
        $this->exibir("cabecalho");
        $this->exibir("navbar");
        $this->exibir($pagina);
        $this->exibir("rodape");
    }
}
<?php

namespace Danfe;
use NFePHP\DA\NFe\Danfe as LibDanfe;
class Generate{

    public function __construct(protected LibDanfe $libDanfe, protected string $logo = ''){
    
    }

    public function render(){

        try{
            $this->setHeader();
            echo $this->libDanfe->render();
        }catch(\Exception $e){
            echo "Não foi possivel gerar a danfe -> {$e->getMessage()}";
        }    
    }

    private function setHeader(){

        header('Content-Type: application/pdf');

    }

}
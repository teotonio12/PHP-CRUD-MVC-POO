<?php

class View {

    private $variaveis;
    
    public function renderView ( array $variaveis, string $namespaceView)
    { 
        
       $this->namespaceViewExists($namespaceView);

       $this->createVariable($variaveis,$namespaceView);

    }

    private function createVariable ( array $variaveis, $namespaceView): Void
    {

        foreach ($variaveis as $key => $value) {
            
            global $$key;
            
            $$key = $value;

        }

        require $namespaceView;
    }
    private function namespaceViewExists($namespaceView):Void
    {
        if (!file_exists($namespaceView)) throw new \Exception("Arquivo não encontato", "404");
    }

    public function teste (ContatoModel $contatoModel){
        
    }

}   

<?php

class View {
    
    public function renderView ( array $variaveis, string $namespaceView)
    { 
       $this->verificaErrorNamespaceView($namespaceView);
       
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

    public function verificaErrorNamespaceView ($namespaceView):Void
    {
        try {
            $this->namespaceViewExists($namespaceView);
       } catch (\Exception $e) {
           echo $e->getMessage();
           die;
       } 
    }

}   

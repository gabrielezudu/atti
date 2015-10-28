<?php

class Page_Data {
    public $title = "";
    public $otherHTML="";
    public $contentRight = "";
    public $contentLeft = "";
    public $css = "";
    public $embeddedStyle = "";
    public $scriptElements ="";// "<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>";
    public $header = "";
    public $footer = "";
    public $menu = "";
    public $info="";
    
    
//    private function SetInfoMessage() {
//       if ($this->info =""){
//           $this->info ="NESSUNA INFO";
//       }
//    }
            
    public function addScript( $src ){
        $this->scriptElements .= "<script language='JavaScript' type='text/javascript' src='$src'></script>";
    }
    
    public function addCSS( $href ){
        $this->css .= "<link href='$href' rel='stylesheet' />";
        
      
    }
} 

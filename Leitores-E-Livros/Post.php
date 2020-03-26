<?php
interface Post{
  public function open();
  public function fechar(); 
  public function folhar($pag);
  public function avancarPag();
  public function voltarPag();
  
}

?>
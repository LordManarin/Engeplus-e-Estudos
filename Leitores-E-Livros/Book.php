<?php
require_once "People.php" ;
require_once "Post.php";
class Book implements post{
// atributos
private $title;
private $autor;
private $totPag;
private $PagAtual;
private $open;
private $reader;
//metodo construct;
function __construct($title, $autor,$totPag,$reader){
  $this->setTitle($title);
  $this->setAutor($autor);
  $this->setPag($totPag);
  $this->open=false;
  $this->PagAtual=0;
  $this->setReader($reader);
}
//metodos
function getTitle(){
  return $this->title;
}
function setTitle($title){
  $this->title=$title;
}
function getAutor(){
 return $this->autor;
}
function setAutor($autor){
  $this->autor=$autor;
}
function getPag(){
  return $this->totPag;
}
function setPag($totPag){
  $this->totPag=$totPag;
}
function getPagAtual(){
  return $this->pagAtual;
}
function setPagAtual($pagAtual){
  $this->pagAtual=$pagAtual;
}
function getOpen(){
  return $this->open;
}
function setOpen($open){
  if($open==true){
    $open=true;
  }else{
    $open=false;
  }
}
function getReader(){
  return $this->reader;
}
function setReader($reader){
  $this->reader = $reader;
}

function details(){
  echo "<p>-------------------------</p>";
  echo "<p> Livro: ".$this->title;
  echo "<p> Autor: ".$this->autor;
  echo "<p> Paginas: ".$this->totPag;
  echo "<p> Sendo lido por: ".$this->reader->getName();
  echo "<p> Pagina atual: ".$this->pagAtual;
  echo "<p>-------------------------</p>";

}

public function open(){
  $this->open=true;
}
public function fechar(){
  $this->open=false;
} 
public function folhar($pag){
  if($pag>$this->totPag){
    $this->pagAtual=0;
  }else{
    $this->pagAtual=$pag;
  }
}
public function avancarPag(){
  if($pag>$this->totPag){
    $this->pagAtual=0;
  }else{
   $this->pagAtual++;
  }
}
public function voltarPag(){
  $this->pagAtual--;
}


}
?>
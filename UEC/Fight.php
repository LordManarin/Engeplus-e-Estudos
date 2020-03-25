<?php
class Fight{
  //atributos
  private $challanger;
  private $challanged;
  private $rounds;
  private $aprrove;
  // metodos
  public function markFight($lutador1,$lutador2){
    if ($lutador1->getCategory()===$lutador2->getCategory()
      &&($lutador1!=$lutador2)){
      $this->approve=true;
      $this->challanged= $lutador1;
      $this->challanger= $lutador2;    
    }else{
      $this->approve=$false;
      $this->challanged=null;
      $this->challanger=null;
    } 
  }
  public function startFight(){
    if($this->approve){
      $this->challanged->show();
      $this->challanger->show();
      $winner = rand(0,2);
      switch($winner){
        case 0: // empatou
          echo"<p>Empatou!";
          $this->challanger->tieFight();
          $this->challanged->tieFight();
          break;        
        case 1:
          echo "<p>vencedor: ".$this->challanged->getName();
          $this->challanged->winFight();
          $this->challanger->loseFight();
          break;        
        case 2:
          echo "<p>vencedor: ".$this->challanger->getName();
          $this->challanger->winFight();
          $this->challanged->loseFight();
          break;        
      }
    }else{
      echo "Luta irregular";
    }
  }
  // Metodos Especiais
public function setChallanged($fighter){
  $this->challanged=$fighter;

}
public function getChallanged(){
  return $this->challanged;
}
public function setRounds($rounds){
  $this->setRounds=$rounds;
}
public function getRounds(){
  return $this->rounds;
}
public function setApprove($approve){
  $this->approve=$approve;
}
public function getApprove(){
  return $this->approve;
  }
}

?>

<?php
class Product {
    public $price;
    public $pack;
    public $additional;
    
    //SETS
    function setPrice($price) {
        $this->price = $price;
    }
    function setPack($pack) {
        $this->pack = $pack;
    }
    function setAdditional($additional) {
        $this->additional = $additional;
    }

    //GETS
    function getPrice() {
        return $this->price;
    }
    function getPack() {
        return $this->pack;
    }
    function getAdditional() {
        return $this->additional;
    }

    //OTHERS METHODS
    function getFinalPrice() {
        return $this->getPrice() + $this->getPack() + $this->getAdditional();
    }

  }


  $product1 = new Product();
  $product1->setPrice(10);
  $product1->setPack(0.5);
  $product1->setAdditional((10/100) * $product1->getPrice());
  
  
  echo "Preço inicial: " . $product1->getPrice();
  echo "\nDespesa com embalagem: " . $product1->getPack();
  echo "\nAdicionais: " . $product1->getAdditional();
  echo "\nPreço final: " . $product1->getFinalPrice();
  

  /*
    O exemplo acime simula uma situação de um objeto(produto) onde
    o seu proço final é calculado. Seu preço final é:
    preço + despesas de embalagem + 10 % do preço.
   */


?>

<?php

// Concrete Element: Clase que implementan la interfaz Element y permiten que el visitante realice operaciones específicas sobre ellas. Clase Concretas de Productos

namespace Product;

use Visitor\VisitorInterface;

class Book implements Product
{
  public function __construct(private string $title, private float $price){}

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function accept(VisitorInterface $visitor): void
  {
    $visitor->visitBook($this);
  }
}

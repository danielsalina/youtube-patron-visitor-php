<?php

// Concrete Element: Clase que implementan la interfaz Element y permiten que el visitante realice operaciones específicas sobre ellas. Clase Concretas de Productos

namespace Product;

use Visitor\VisitorInterface;

class Electronics implements Product
{
  public function __construct(private string $name, private float $price){}

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function accept(VisitorInterface $visitor): void
  {
    $visitor->visitElectronics($this);
  }
}

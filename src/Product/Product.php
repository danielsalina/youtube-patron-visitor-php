<?php

// Elemento: Interfaz que declara un método accept que acepta al visitante. Interfaz Element para los productos

namespace Product;

use Visitor\VisitorInterface;

interface Product
{
  public function accept(VisitorInterface $visitor): void;
}

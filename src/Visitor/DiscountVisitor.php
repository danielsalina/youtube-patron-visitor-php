<?php

// Concrete Visitor: Clase que implementan la interfaz del visitante para definir el comportamiento específico al visitar un tipo particular de objeto.

namespace Visitor;

use Product\Electronics;
use Product\Book;

class DiscountVisitor implements VisitorInterface
{
  public function visitElectronics(Electronics $electronics): void
  {
    $discount = $electronics->getPrice() * 0.05; // 5% de descuento
    echo "Descuento para el electrónico '{$electronics->getName()}': $discount\n";
  }

  public function visitBook(Book $book): void
  {
    $discount = $book->getPrice() * 0.02; // 2% de descuento
    echo "Descuento para el libro '{$book->getTitle()}': $discount\n";
  }
}

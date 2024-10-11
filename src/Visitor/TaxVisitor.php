<?php

// Concrete Visitor: Clase que implementan la interfaz del visitante para definir el comportamiento específico al visitar un tipo particular de objeto.

namespace Visitor;

use Product\Electronics;
use Product\Book;

class TaxVisitor implements VisitorInterface
{
  public function visitElectronics(Electronics $electronics): void
  {
    $tax = $electronics->getPrice() * 0.15; // 15% de impuestos
    echo "Impuestos para el electrónico '{$electronics->getName()}': $tax\n";
  }

  public function visitBook(Book $book): void
  {
    $tax = $book->getPrice() * 0.1; // 10% de impuestos
    echo "Impuestos para el libro '{$book->getTitle()}': $tax\n";
  }
}

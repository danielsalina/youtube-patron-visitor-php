<?php

// Una interfaz o clase abstracta que declara una serie de métodos para visitar cada tipo de objeto en la estructura.

namespace Visitor;

use Product\Electronics;
use Product\Book;

interface VisitorInterface
{
  public function visitElectronics(Electronics $electronics): void;
  public function visitBook(Book $book): void;
}

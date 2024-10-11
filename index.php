<?php

require_once 'vendor/autoload.php';

use Product\Electronics;
use Product\Book;
use Visitor\TaxVisitor;
use Visitor\DiscountVisitor;

// Crear productos
$electronics = new Electronics("Smartphone", 1200);
$book = new Book("Diseño de Patrones", 50);

// Crear visitantes
$taxVisitor = new TaxVisitor();
$discountVisitor = new DiscountVisitor();

// Aplicar visitantes
echo "Cálculo de impuestos:\n";
$electronics->accept($taxVisitor);
$book->accept($taxVisitor);

echo "\nCálculo de descuentos:\n";
$electronics->accept($discountVisitor);
$book->accept($discountVisitor);

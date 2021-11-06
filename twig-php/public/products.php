<?php
require_once __DIR__ . '/../config/twig.php';

$products = ['violon', 'piano', 'violoncelle', 'flute', 'tambour', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);
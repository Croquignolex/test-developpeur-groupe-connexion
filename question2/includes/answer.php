<?php
    // Sample products
    $products = [
        ["id" => 1, "name" => "Imprimante laser", "price" => 387.50],
        ["id" => 2, "name" => "Bureau en bois", "price" => 1051.99],
        ["id" => 3, "name" => "Ordinateur portable", "price" => 589.05],
        ["id" => 4, "name" => "Caulculatrice", "price" => 10.99],
        ["id" => 5, "name" => "Bloc note", "price" => 8.05],
    ];

    // Return most expensive product name
    function getMostExpensiveProductName($products): string
    {
        if(!is_array($products) || count($products) == 0) {
            return "Aucun produit retrouvé";
        }

        $mostExpensiveProduct = $products[0];

        foreach ($products as $key => $product) {
            if ($key > 0 && $product['price'] > $mostExpensiveProduct['price']) {
                $mostExpensiveProduct = $product;
            }
        }

        return $mostExpensiveProduct['name'];
    }

    // Return products cheaper than a given price
    function getProductsCheaperThan($products, $maxPrice): array
    {
        $filteredProducts = [];

        foreach ($products as $product) {
            if ($product['price'] < $maxPrice) {
                $filteredProducts[] = $product;
            }
        }

        return $filteredProducts;
    }
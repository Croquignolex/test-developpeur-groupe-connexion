<?php
    // Sample products
    $products = [
        ["id" => "ITEM001", "nom" => "Imprimante laser", "prix" => 387.50],
        ["id" => "ITEM002", "nom" => "Bureau en bois", "prix" => 1051.99],
        ["id" => "ITEM003", "nom" => "Ordinateur portable", "prix" => 589.05],
        ["id" => "ITEM004", "nom" => "Caulculatrice", "prix" => 10.99],
        ["id" => "ITEM005", "nom" => "Bloc note", "prix" => 8.05],
    ];

    // Return most expensive product name
    function getMostExpensiveProductName($products): string
    {
        if(!is_array($products) || count($products) == 0) {
            return "Aucun produit retrouvé";
        }

        $mostExpensiveProduct = $products[0];

        foreach ($products as $key => $product) {
            if ($key > 0 && $product['prix'] > $mostExpensiveProduct['prix']) {
                $mostExpensiveProduct = $product;
            }
        }

        return $mostExpensiveProduct['nom'];
    }

    // Return products cheaper than a given price
    function getProductsCheaperThan($products, $maxPrice): array
    {
        $filteredProducts = [];

        foreach ($products as $product) {
            if ($product['prix'] < $maxPrice) {
                $filteredProducts[] = $product;
            }
        }

        return $filteredProducts;
    }
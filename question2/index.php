<?php
    global $products;
    include("includes/answer.php");
?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Question 2</title>
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body>
        <h1>Manipulation de Tableaux en PHP</h1>

        <h2>Description</h2>
        <p>
            Vous développez un système de gestion d'inventaire en PHP.
            Ce système doit manipuler un tableau de produits, où chaque produit
            est représenté par un tableau associatif avec les clés id, nom et prix
        </p>

        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
            <?php
                foreach ($products as $product) {
                    ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['nom']; ?></td>
                            <td><?php echo $product['prix']; ?></td>
                        </tr>
                    <?php
                }
            ?>
        </table>

        <h2>Tache</h2>

        <ol>
            <li>
                <p>
                    Créez une fonction qui reçoit le tableau de produits et retourne le nom du produit le plus cher <br />
                    <strong><?php echo getMostExpensiveProductName($products); ?></strong>
                </p>
            </li>
            <li>
                <p>
                    Créez une deuxième fonction qui reçoit le tableau de produits et retourne une liste de produits dont le
                    prix est inférieur à une valeur spécifique passée en argument (ex: 400.00)
                </p>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                    </tr>
                    <?php
                        foreach (getProductsCheaperThan($products, 400.00) as $product) {
                            ?>
                                <tr>
                                    <td><?php echo $product['id']; ?></td>
                                    <td><?php echo $product['nom']; ?></td>
                                    <td><?php echo $product['prix']; ?></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </li>
        </ol>
    </body>
</html>
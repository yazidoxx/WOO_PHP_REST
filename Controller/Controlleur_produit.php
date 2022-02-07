
<?php
require  '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

#Si l'action retournee est 'delete' alors supprimer le produit en question
if (isset($_POST['delete'])) {

    include '../Model/produit.php';
    $produit = new produit($_POST['id_produit'], null, null, null, null);
    #appel de la methode delete
    $data =  $produit->delete();

    #retour vers la liste des produits
    header("Location: http://localhost:8080/PHPCODE/product.php");

    #Si l'action retournee est 'edit' alors modifier le produit en question
} else if (isset($_POST['edit'])) {

    include '../Model/produit.php';
    $produit = new produit($_POST['id'], $_POST['name'], $_POST['slug'], $_POST['description'], $_POST['regular_price']);
    #appel de la methode update
    $data =  $produit->update();

    #retour vers la liste des produits
    header("Location: http://localhost:8080/PHPCODE/product.php");

    #Si l'action retournee est 'cancel' alors annulation et retour vers la liste des produits
} else if (isset($_POST['cancel'])) {

    #retour vers la liste des produits
    header("Location: http://localhost:8080/PHPCODE/product.php");

    #Si l'action retournee est 'create' alors creer un nouveau produit
} else if (isset($_POST['create'])) {

    include '../Model/produit.php';
    $produit = new produit(null, $_POST['name'], $_POST['slug'], $_POST['description'], $_POST['regular_price']);
    #appel de la methode create
    $data =  $produit->create();

    #retour vers la liste des produits
    header("Location: http://localhost:8080/PHPCODE/product.php");
}


?>
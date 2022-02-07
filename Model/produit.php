<?php
include_once  'vendor/autoload.php';

use Automattic\WooCommerce\Client;

class produit
{
    #declaration des attributs
    private $id;
    private $name;
    private $slug;
    private $description;
    private $regular_price;

    #Constructeur
    function __construct($id, $name, $slug, $description, $regular_price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->regular_price = $regular_price;
    }

    #Fonction get pour retourner la liste des produits
    function get()
    {

        #authentification avec les cles de l'api 
        $woocommerce = new Client(
            'http://localhost:8080/wordpress',
            'ck_2210af23791056485962a13c54a392544fecf109',
            'cs_438e1bb3b57e52390705cc594a5e7828918d8d04',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );

        #Format de representation Json pour la recuperation de l'integralite des produits
        return json_encode($woocommerce->get('products',array( 'per_page' => 99 )));
    }
    #Fonction getById pour retourner un produit selon son identifiant
    function getById()
    {
        #authentification avec les cles de l'api 
        $woocommerce = new Client(
            'http://localhost:8080/wordpress',
            'ck_2210af23791056485962a13c54a392544fecf109',
            'cs_438e1bb3b57e52390705cc594a5e7828918d8d04',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );

        #Format de representation Json pour la recuperation du produit en question
        return json_encode($woocommerce->get('products/' . $this->id));
    }

    #Fonction delete pour supprimer un client 
    function delete()
    {
        #authentification avec les cles de l'api 
        $woocommerce = new Client(
            'http://localhost:8080/wordpress',
            'ck_2210af23791056485962a13c54a392544fecf109',
            'cs_438e1bb3b57e52390705cc594a5e7828918d8d04',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
        #la suppression sera realise en recuperant l'id du produit en question
        $woocommerce->delete('products/' . $this->id, ['force' => true]);
    }

    #Fonction update pour modifier les information d'un client 
    function update()
    {
        #authentification avec les cles de l'api 
        $woocommerce = new Client(
            'http://localhost:8080/wordpress',
            'ck_2210af23791056485962a13c54a392544fecf109',
            'cs_438e1bb3b57e52390705cc594a5e7828918d8d04',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
        #recuperation des attributs en question 
        $data = [

            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'regular_price' => $this->regular_price

        ];

        print_r($woocommerce->put('products/' . $this->id, $data));
    }

    #Fonction create pour creer un nouveau produit
    function create()
    {
        #authentification avec les cles de l'api 
        $woocommerce = new Client(
            'http://localhost:8080/wordpress',
            'ck_2210af23791056485962a13c54a392544fecf109',
            'cs_438e1bb3b57e52390705cc594a5e7828918d8d04',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
        #recuperation des attributs en question
        $data = [

            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'regular_price' => $this->regular_price

        ];
        #methode Post
        $woocommerce->post('products', $data);
    }
}

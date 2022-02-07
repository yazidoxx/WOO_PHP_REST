<?php
include_once  'vendor/autoload.php';

use Automattic\WooCommerce\Client;

class customer
{
    #declaration des attributs
    private $id;
    private $first_name;
    private $last_name;
    private $email;

    #Constructeur
    function __construct($id, $first_name, $last_name, $email)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    #Fonction get pour retourner la liste des clients
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
        #Format de representation Json pour la recuperation de l'integralite des clients
        return json_encode($woocommerce->get('customers',array( 'per_page' => 99 )));
    }

    #Fonction getById pour retourner un client selon son identifiant
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
        #Format de representation Json pour la recuperation du client en question
        return json_encode($woocommerce->get('customers/' . $this->id));
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
        #la suppression sera realise en recuperant l'id du client en question
        $woocommerce->delete('customers/' . $this->id, ['force' => true]);
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

            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email

        ];

        print_r($woocommerce->put('customers/' . $this->id, $data));
    }

    #Fonction create pour creer un nouvel client 
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
        $data = [
            #recuperation des attributs en question
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email

        ];
        #methode Post
        $woocommerce->post('customers', $data);
    }
}


<?php
require  '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

#Si l'action retournee est 'delete' alors supprimer le client en question
if (isset($_POST['delete'])) {

  include '../Model/client.php';
  $customer = new customer($_POST['id'], null, null, null);
  #appel de la methode delete 
  $data =  $customer->delete();

  #retour vers la liste des clients
  header("Location: http://localhost:8080/PHPCODE/customer.php");

  #Si l'action retournee est 'edit' alors editer les informations du client en question
} else if (isset($_POST['edit'])) {

  include '../Model/client.php';
  $customer = new customer($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['email']);
  #appel de la methode update 
  $data =  $customer->update();

  #retour vers la liste des clients
  header("Location: http://localhost:8080/PHPCODE/customer.php");

  #Si l'action retournee est 'cancel' alors annulation et retour vers la liste des clients
} else if (isset($_POST['cancel'])) {
  #retour vers la liste des clients
  header("Location: http://localhost:8080/PHPCODE/customer.php");

  #Si l'action retournee est 'create' alors creer un nouveau client
} else if (isset($_POST['create'])) {

  include '../Model/client.php';
  $customer = new customer(null, $_POST['first_name'], $_POST['last_name'], $_POST['email']);
  #appel de la methode create 
  $data =  $customer->create();

  #retour vers la liste des clients
  header("Location: http://localhost:8080/PHPCODE/customer.php");
}

?>
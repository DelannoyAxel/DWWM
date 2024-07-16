<?php
require_once '../namespace/entities/Stripe/Paiement.class.php';
require_once '../namespace/entities/Paypal/Paiement.class.php';

use \entites\Paypal\Paiement as paypalPaiement;
use \entities\Stripe\Paiement as stripePaiement;


$paiementPaypal = new \entities\Paypal\Paiement ();
$paiementStripe = new \entities\Stripe\Paiement ();


var_dump($paiementPaypal) . "<br>" . var_dump($paiementStripe);
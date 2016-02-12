<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End Busy Code -----------------------------^

    // Submit Address - allows address form to show
    $app->get("/", function() use ($app) {
        return $app['twig']->render('contacts.html.twig', array('contact' => Contact::getAll()));
    });

    $app->post("/contact", function() use($app) {
        $contacts = new Contact($_POST['name'], $_POST['phone'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip']);
        $contacts->save();

        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll(), 'newContact' => $contacts));
    });



    return $app;

?>

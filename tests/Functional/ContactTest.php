<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ContactTest extends WebTestCase
{
    public function testSomething(): void
    {
       /* $client = static::createClient();
        $crawler = $client->request('GET', '/contact');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Nous contacter');


        // Récupérer le formulaire
        $submitButton = $crawler->filter('Envoyer');
        $form = $submitButton->form();

        $form["contact[fullName]"] = "Angelina Martin";
        $form["contact[email]"] = "am@test.com";
        $form["contact[subject]"] = "Test";
        $form["contact[message]"] = "Test";

        // Soumettre le formulaire
        $client->submit($form);

        // Vérifier le statut HTTP
        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);

        // Vérifier l'envoie du mail
        $this->assertEmailCount(1);

        $client->followRedirect();

        // Vérifier la présence du message de succès
        $this->assertSelectorTextContains(
            'div.alertGood.alert-success.mt-4',
            'Votre demande a été envoyé avec succès !'
        ); */
    } 
}


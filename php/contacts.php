<?php
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;

    define('API_PUBLIC_KEY', 'cb479649805559bb8e42cf016ad5a803');
    define('API_PRIVATE_KEY', 'c901264efc8f08f0f07d6dc2bf2b4656');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


    if(!empty($_POST['surname']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $subject = htmlspecialchars($_POST['subject']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        if (!empty($_POST['entreprise'])) {
            $entreprise = htmlspecialchars($_POST['entreprise']);
        } else {
            $entreprise = "Champ ignoré";
        }
        if (!empty($_POST['phone'])) {
            $phone = htmlspecialchars($_POST['phone']);
        } else {
            $phone = "Champ ignoré";
        }

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "yoann.godard@epitech.eu",
                'Name' => $surname
                ],
                'To' => [
                [
                    'Email' => "yoann1.godard@epitech.eu",
                    'Name' => "NAME"
                ]
                ],
                'Subject' => $subject,
                'HTMLPart' => "Email expéditeur : - $email -<br>Société : $entreprise<br>Téléphone : $phone<br>
                <br>Demande : $message",
            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        }
        else{
            echo "Email non valide";
        }
    } else {
        header('Location: index.html');
        die();
    }

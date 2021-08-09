<?php

namespace App\Classe;

use Mailjet\Resources;

class Mail
{

    private $api_key = "8f8b04af71c30566600314f7aead7089";
    private $api_key_secret = "070debdfe5dc4870e227e62dd4c32c0b";

    public function send($to_email, $to_name, $subject)
    {

        $mj = new \Mailjet\Client($this->api_key, $this->api_key_secret, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "info@irshadmuhammad.fr",
                        'Name' => "I&K Shop"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 3093410,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'variables' => [
                        "Name" => $to_name
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && dd($response->getData());
    }
}



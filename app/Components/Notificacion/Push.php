<?php

namespace App\Components\Notificacion;

use GuzzleHttp\Client;

class Push
{

    const API_ENDPOINT = "https://onesignal.com/api/v1/notifications";
    /** @var Client */
    protected $client;

    /**
     * @param Client $client
     */
    public function __construct()
    {

        $this->client = new Client();
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\IonicPushNotifications\Exceptions\InvalidConfiguration
     * @throws \NotificationChannels\IonicPushNotifications\Exceptions\CouldNotSendNotification
     */
    public function send($users, $mensaje)
    {
        if (!count($users) > 0) {
            return ["error" => "no se pudo enviar la notificacion push"];
        }
        $authorizationKey = "N2E3MjAzZGItNzlhZS00ODlkLTg0NDctYWI3YmFhMWIwN2Fk​";
        if (is_null($authorizationKey)) {
            return ["error" => "auth no se pudo enviar la notificacion push"];
        }
        $content = array(
            "en" => 'English',
            "es" => $mensaje
        );
        $pushData =
            [
                "app_id" => "bacb6026-b4ec-4a45-8ce6-4785de3fa269",
                "include_player_ids" => $users,
                "contents" => $content,
                "data" => ["title" => "MovApp Notificaciones", "message" => $mensaje]
            ];
        try{
            //dd(json_encode($pushData));
        $response = $this->client->post(self::API_ENDPOINT, [
            "body" => json_encode($pushData),
            "headers" => [
                "Content-Type" => "application/json; charset=utf-8",
                "Authorization" => "Basic {$authorizationKey}",
            ],
        ]);
        }catch (\Exception $e){
            dd($e);
        }

        if ($response->getStatusCode() !== 201) {
            return ["error" => "no se pudo enviar la notificacion push"];
        }
        return $response;
    }

}

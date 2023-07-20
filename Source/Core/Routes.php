<?php

namespace Source\Core;

use Source\App\Controllers\Card;

class Routes
{
    public function route($requestURI)
    {
        switch ($requestURI) {
            case "/":
                $this->card("/");
                break;

            case "/card":
            case "/card/":
                $this->card("/");
                break;

            case "/card/form":
            case "/card/form/":
                $this->card("/form");
                break;

            case "/card/create":
            case "/card/create/":
                $this->card("/create");
                break;

            default:
                http_response_code(404);
                echo "Página não encontrada";
        }
    }

    private function card(string $requestURI)
    {
        $card = new Card();

        $action = [
            "/" => function () use ($card) {
                $card->index();
            },
            "/form" => function () use ($card) {
                $card->form();
            },
            "/create" => function () use ($card) {
                $card->create();
            }
        ];

        $action[$requestURI]();
    }
}

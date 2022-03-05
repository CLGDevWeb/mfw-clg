<?php

namespace App\View;

class Renderer
{
    public function __construct(private string $viewPath, private ?array $params)
    {}

    public function view(): string
    {
        ob_start();

        extract($this->params);

        require VIEWS . $this->viewPath . '.php';

        return ob_get_clean();
    }

    public static function make(string $viewPath, ?array $params): static
    {
        return new static($viewPath, $params);
    }

    public function __toString()
    {
        return $this->view();
    }

    public static function json(array $data)
    {
        header('Content-Type: application/json');

        return json_encode($data, JSON_FORCE_OBJECT);
    }
}
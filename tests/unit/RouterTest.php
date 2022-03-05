<?php

namespace Tests\Unit;

use App\Router\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /** @test */
    public function test_it_registers_get_routes(): void
    {
        $router = new Router();

        $router->get('/', [HomeController::class, 'index']);

        $this->assertEquals(['GET' => ['/' => [HomeController::class, 'index']]], $router->getRoutes());
    }

    /** @test */
    public function test_it_registers_post_routes(): void
    {
        $router = new Router();

        $router->post('/', [HomeController::class, 'index']);

        $this->assertEquals(['POST' => ['/' => [HomeController::class, 'index']]], $router->getRoutes());
    }

    /** @test */
    public function test_it_doesnt_have_any_routes_before_registering_routes(): void
    {
        $router = new Router();

        $this->assertEmpty($router->getRoutes());
    }
}
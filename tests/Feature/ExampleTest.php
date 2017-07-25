<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicSeeIndexPage()
    {
        $response = $this->get('/');
        $response->assertSee('Desarrollo Web');
    }
    public function testBasicSeeServicePage()
    {
        $response = $this->get('/servicios');
        $response->assertSee('Servicios');
    }
    public function testBasicSeeProyectPage()
    {
        $response = $this->get('/proyectos');
        $response->assertSee('Proyectos');
    }
    public function testBasicSeeBlogPage()
    {
        $response = $this->get('/blog');
        $response->assertSee('Ver post');
    }
    public function testBasicSeeContactPage()
    {
        $response = $this->get('/contacto');
        $response->assertSee('ENVIAR');
    }
}

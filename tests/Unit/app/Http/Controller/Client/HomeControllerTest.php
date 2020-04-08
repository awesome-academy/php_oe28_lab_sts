<?php

namespace Tests\Unit\App\Http\Controller\Client;

use App\Http\Controllers\Client\HomeController;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $homeController;

    public function setUp(): void
    {
        $this->homeController = new HomeController();
        parent::setUp();
    }

    public function tearDown(): void
    {
        unset($this->homeController);
        parent::tearDown();
    }

    public function test_index()
    {
        $view = $this->homeController->index();

        $this->assertEquals('client.index', $view->getName());
        $this->assertArrayHasKey('user', $view->getData());
    }

    public function test_show_course()
    {
        $show = $this->homeController->show('3');

        $this->assertEquals('client.course-detail', $show->getName());
        $this->assertArrayHasKey('course', $show->getData());
        $this->assertArrayHasKey('subjects', $show->getData());
        $this->assertArrayHasKey('users', $show->getData());
    }

    public function test_show_task()
    {
        $show = $this->homeController->showTask('1');

        $this->assertEquals('client.task-detail', $show->getName());
        $this->assertArrayHasKey('task', $show->getData());
        $this->assertArrayHasKey('tasks', $show->getData());
    }
}

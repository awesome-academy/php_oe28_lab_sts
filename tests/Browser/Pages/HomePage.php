<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePage extends DuskTestCase
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/home';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  \Laravel\Dusk\Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }

    public function test_view_index()
    {
        $this->browse(function ($browser) {
            $browser->visit(route('home'))
                ->click('<i class="fas fa-eye-slash"></i>')
                ->assertPathIs(route('courses.detail', 3));
        });
    }
}

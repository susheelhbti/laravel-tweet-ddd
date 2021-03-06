<?php

namespace Tests\Browser\Frontend\Statics;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AboutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @group static
     * @return void
     */
    public function testVisitAboutPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                    ->assertRouteIs('frontend.static.about')
                    ->assertTitle('About | ' . config('app.name'));
        });
    }
}

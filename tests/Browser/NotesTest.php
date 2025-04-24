<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', 'test@gmail.com')
            ->type('password', 'password')
            ->press('LOG IN')
            ->pause(2000)
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->clickLink('Create Note')
            ->assertPathIs('/create-note')
            ->type('title','New Notes')
            ->type('description','Testing new notes')
            ->press('CREATE')
            
            ;
        });
    }
}

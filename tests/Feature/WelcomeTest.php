<?php

it('provides users in random paginated order', function () {
    $users = User::factory()->count(50)->create();

    $users = collect($this->get('/')->viewData('users')->items())
        ->merge($this->get('/?page=2')->viewData('users')->items());

    expect($users->count())->toBe($users->unique('id')->count());

    $response->assertStatus(200);
})->repeat(3);

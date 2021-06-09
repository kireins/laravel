<?php

namespace App\Actions\Jetstream;

use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $film
     * @return void
     */
    public function delete($film)
    {
        $film->deleteFilmPoster();
        $film->tokens->each->delete();
        $film->delete();
    }
}

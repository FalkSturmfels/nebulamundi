<?php

namespace App\Policies;

use App\Models\Core\Adventure;
use App\Models\Core\User;
use App\Models\Core\World;
use Illuminate\Auth\Access\HandlesAuthorization;

class CorePolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, World $world)
    {
        return $user->id === $world->user_id;
    }

    public function destroyAdventure(User $user, Adventure $adventure)
    {
        return $user->id === $adventure->world->user_id;
    }
}

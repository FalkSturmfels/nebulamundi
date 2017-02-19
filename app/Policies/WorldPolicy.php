<?php

namespace App\Policies;

use App\Models\Core\User;
use App\Models\Core\World;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorldPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, World $world)
    {
        return $user->id === $world->user_id;
    }
}

<?php

use App\Models\Core\Adventure;
use App\Models\Core\User;
use App\Models\Core\World;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();

        User::all()->each(function (User $u)
        {
            $worlds = factory(World::class, 2)->make([
                'user_id' => $u->id
            ]);

            foreach ($worlds as $world)
            {
                $u->worlds()->save($world);
            }
        });

        World::all()->each(function (World $w)
        {
            $adventures = factory(Adventure::class, 3)->make([
                'world_id' => $w->id
            ]);

            foreach ($adventures as $adventure)
            {
                $w->adventures()->save($adventure);
            }
        });
    }
}

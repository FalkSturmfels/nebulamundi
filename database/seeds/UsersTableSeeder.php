<?php

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
        factory(\App\User::class, 5)->create();

        App\User::all()->each(function (\App\User $u)
        {
            $worlds = factory(\App\World::class, 2)->make([
                'user_id' => $u->id
            ]);

            foreach ($worlds as $world)
            {
                $u->worlds()->save($world);
            }
        });

        \App\World::all()->each(function (\App\World $w)
        {
            $adventures = factory(\App\Adventure::class, 3)->make([
                'world_id' => $w->id
            ]);

            foreach ($adventures as $adventure)
            {
                $w->adventures()->save($adventure);
            }
        });
    }
}

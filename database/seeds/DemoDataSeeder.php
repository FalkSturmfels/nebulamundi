<?php

use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    private $userIdMap;

    private $worldIdMap;

    private $userNames = ['Daniel', 'Jonas', 'Philip', 'Andreas',
                          'Christoph', 'Wolfgang', 'Sebastian', 'Achim'];

    private $userWorldMap = ['Daniel' => [['Deadland', 'The World of Walking Dead'],
                                          ['Imperium Romanum', 'Das römische Reich zu Zeiten Cäsars']],
                             'Jonas' => [['Riesland', 'Der legendäre Kontinent im Westen von Aventurien'],
                                         ['Aventurien', 'Die klassische Welt des Schwarzen Auges']],
                             'Philip' => [['Mittelalter', 'Leben zu Zeiten der Ritter']],
                             'Andreas' => [['Battlestar Galactica',
                                            'Folgen Sie Adama und suchen Sie mit ihm die Erde'],
                                           ['Star Wars', 'Die Legende beginnt hier']],
                             'Christoph' => [['Call of Cthulhu', 'Die Welt H.P. Lovecrafts']],
                             'Wolfgang' => [['Marvel Universe', 'Spiderman, Ironman und Doctor Strange erwarten Sie.']],
                             'Sebastian' => [['Diablo3', 'Die Jagd auf die Dämonenbrut hat begonnen']],
                             'Achim' => [['DC Universe', 'Seien Sie Batman!'], ['X-World', 'Die Welt der X-Men']]
    ];

    private $worldAdventureMap = ['Deadland' => [['Das Krankenhaus', 'Erwache im Land der lebenden Toten'],
                                                 ['Das Einkaufszentrum', 'Konflikte bahnen sich innerhalb der Gruppe an']],
                                  'Imperium Romanum' => [['Der erste punische Krieg', 'Die Flotte zieht aus in Richtung Karthago']],

                                  'Riesland' => [['Intriegen im Palast des Tennos', 'Schaffen Sie es sich als Bonze am Kaiserhaus zu behaupten?']],
                                  'Star Wars' => [['Außenposten 9', 'Etwas hat die Schmuggler des Outer Rim aufgeschreckt...']],

                                  'Call of Cthulhu' => [['Die Musik des Erik Zahn', 'Welches Geheimnis umgibt den seltsamen Geiger?']],
                                  'Marvel Universe' => [['Die Ankunft von Venom', 'Die Spinne muss sich ihrer dunklen Seite stellen']],
                                  'Diablo3' => [['Der verwunschene Juwel', 'Finden Sie das Juwel von Tristram, bevor es zu spät ist']],
                                  'X-World' => [['Logans Rückkehr', 'Wolverine muss ein letztes mal zurückkehren, um einem jungen Mädchen zu helfen']],
                                  'DC Universe' => [['Das verlorene Lachen', 'Harley Quinn ist verschwunden, der Joker ist betrübt, und wenn der Joker betrübt ist, wird Batman nervös.']],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
        $this->createWorlds();
        $this->createAdventures();
    }

    private function createUsers()
    {
        foreach ($this->userNames as $name)
        {
            $this->userIdMap[$name] = factory(\App\User::class)->create([
                'name' => $name
            ])->id;
        }
    }

    private function createWorlds()
    {
        foreach ($this->userWorldMap as $userName => $worldList)
        {
            foreach ($worldList as $world)
            {
                $this->worldIdMap[$world[0]] = factory(\App\World::class)->create([
                    'name' => $world[0],
                    'description' => $world[1],
                    'user_id' => $this->userIdMap[$userName]
                ])->id;
            }
        }
    }

    private function createAdventures()
    {
        foreach ($this->worldAdventureMap as $worldName => $adventureList)
        {
            foreach ($adventureList as $adventure)
            {
                factory(\App\Adventure::class)->create([
                    'name' => $adventure[0],
                    'description' => $adventure[1],
                    'world_id' => $this->worldIdMap[$worldName]
                ]);
            }
        }
    }

}

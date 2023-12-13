<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->setName('Hola Mundo');
        $event->setDescription('Presentacion de proyectos');
        $event->setStartDate('2023-11-30 12:00:00');
        $event->setEndingDate('2023-11-30 15:00:00');
        $event->save();

        $event = new Event();
        $event->setName('Residencias profesionales');
        $event->setDescription('Presentacion de proyectos de investigacion');
        $event->setStartDate('2023-10-10 12:00:00');
        $event->setEndingDate('2023-10-10 15:00:00');
        $event->save();
    }
}

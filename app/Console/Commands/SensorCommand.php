<?php

namespace App\Console\Commands;

use App\Models\Sensor;
use Illuminate\Console\Command;
use Faker\Factory as Faker;


class SensorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sensor:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para registrar los datos en la base de datos';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $fk1 = Faker::create();
        $fk2 = Faker::create();
        $fk3 = Faker::create();
        $fk4 = Faker::create();
        $fk5 = Faker::create();
        $fk6 = Faker::create();
        $fk7 = Faker::create();
        $fk8 = Faker::create();
        $fk9 = Faker::create();
        $fk10 = Faker::create();

        $r1 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r2 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r3 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r4 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r5 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];


        $r6 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r7 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r8 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r9 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $r10 = [
            'voltaje'   => $fk1->randomNumber(2, false),
            'amperaje'  => $fk1->numberBetween(0, 3),
            'tiempo'    => $fk1->numberBetween(1, 10),
            'consumo'   => $fk1->randomNumber(3, false),
            'device_id' => $fk1->numberBetween(1,5)
        ];

        $sensor = Sensor::create($r1);
        $sensor2 = Sensor::create($r2);
        $sensor3 = Sensor::create($r3);
        $sensor4 = Sensor::create($r4);
        $sensor5 = Sensor::create($r5);
        $sensor6 = Sensor::create($r6);
        $sensor7 = Sensor::create($r7);
        $sensor8 = Sensor::create($r8);
        $sensor9 = Sensor::create($r9);
        $sensor10 = Sensor::create($r10);
    }
}

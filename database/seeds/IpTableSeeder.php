<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('ips')->insert([
            [
                'value'   => '178.219.186.12',
                'country' => 'Russia',
                'city'    => 'Moscow',
                'lat'     => 37.61842300,
                'long'    => 55.75124400,
            ],
            [
                'value'   => '195.208.131.1',
                'country' => 'Russia',
                'city'    => 'Novosibirsk',
                'lat'     => 55.018803,
                'long'    => 82.933952,
            ],
            [
                'value'   => '54.64.59.34',
                'country' => 'Japan',
                'city'    => 'Tokyo',
                'lat'     => 35.652832,
                'long'    => 139.839478,
            ],
        ]);
    }

}
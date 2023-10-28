<?php

namespace Database\Seeders;

use App\Models\Duty;
use Illuminate\Database\Seeder;

class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $duties = [
            ['period' => 'Morning Shift', 'duration' => '8-12 Noon'],
            ['period' => 'Afternoon Shift', 'duration' => '12 - 4pm'],
            ['period' => 'Night Shift', 'duration' => '4 - 8pm']
        ];

        // Iterate through the duties array and create Duty records
        foreach ($duties as $dutyData) {
            Duty::create([
                'shiftPeriod' => $dutyData['period'],
                'timePeriod' => $dutyData['duration']
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\DailyAyah;
use Illuminate\Support\Facades\DB;

class DailyAyahSeeder extends Seeder
{
    public function run(): void
    {
        // Clear the table before inserting new records
        DB::table('daily_ayahs')->truncate();

        $start = Carbon::createFromDate(2025, 1, 1);

        $ayatList = json_decode(file_get_contents(database_path('seeders/ayat.json')), true);

        foreach ($ayatList as $i => $ayahData) {
            DailyAyah::create([
                'date' => $start->copy()->addDays($i),
                'ayah' => $ayahData['text'],
                'surah' => $ayahData['surah'],
                'ayah_number' => $ayahData['ayah_number'],
                'translation' => $ayahData['translation'],
            ]);
        }
    }
}

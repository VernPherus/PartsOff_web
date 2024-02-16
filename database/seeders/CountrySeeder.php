<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phProvince = [
            "IN" => 'Ilocos Norte',
            "IS" => 'Ilocos Sur',
            "LU" => 'La Union',
            "PAN" => 'Pangasinan',
            "BAT" => 'Batanes',
            "CAG" => 'Cagayan',
            "IS" => 'Isabela',
            "QUI" => ' Quirino',
            "NV" => 'Nueva Vizcaya',
            "BEN" => 'Benguet',
            "AB" => 'Abra',
            "KAL" => 'Kalinga',
            "APA" => 'Apayao',
            "IFU" => 'Ifugao',
            "MP" => 'Mountain Province',
            "PAM" => 'Pampanga',
            "BN" => 'Bataan',
            "ZAM" => ' Zambales',
            "TAR" => 'Tarlac',
            "NE" => 'Nueva Ecija',
            "BUL" => 'Bulacan',
        ];
        $countries = [
            ['code' => 'ph', 'name' => 'Philippines', 'states' => json_encode($phProvince)],
        ];
        Country::insert($countries);
    }
}

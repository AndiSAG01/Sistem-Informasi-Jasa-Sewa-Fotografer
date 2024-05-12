<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueReservationDate implements Rule
{
    public function passes($attribute, $value)
    {
        $tables = ['resevasi_pres', 'resevasi_weds', 'resevasi_aqis', 'resevasi_engs', 'resevasi__pers', 'resevasi__gros', 'resevasi__fams'];

        foreach ($tables as $table) {
            $count = DB::table($table)->where('date', $value)->count();
            if ($count > 0) {
                return false; // Tanggal sudah ada di salah satu tabel
            }
        }

        return true; // Tanggal belum ada di tabel mana pun
    }

    public function message()
    {
        return 'Tanggal Tersebut Sudah Ada Yang Reservasi.';
    }
}

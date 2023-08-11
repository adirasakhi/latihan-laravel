<?php
// app/Exports/GurusExport.php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Guru;

class GurusExport implements FromCollection
{
    public function collection()
    {
        return Guru::all();
    }
}

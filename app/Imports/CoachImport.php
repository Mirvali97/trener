<?php

namespace App\Imports;

use App\Coach;
use Maatwebsite\Excel\Concerns\ToModel;

class CoachImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Coach([
            'fullname' => $row[1],
            'job' => $row[2],
            'type_sport' => $row[3],
            'year' => $row[4],
            'number_cert' => $row[5],
            'validate' => $row[6],
            'district' => $row[7],
            'region' => $row[8],
            'result' => $row[9],
        ]);
    }
}

<?php

namespace App\Imports;

use App\Pant;
use App\Shirt;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        var_dump($row);
        switch ($row[6]) {
            case 'Pants':
                return $this->getNewPantObject($row);
                break;
            case 'Shirts':
                return $this->getNewShirtObject($row);
                break;
        }
    }

    public function headingRow(): int
    {
        return 2;
    }

    protected function getNewPantObject($row)
    {
        return new Pant([
            'name' => $row[3],
            'brand' => $row[1],
            'lotNumber' => $row[2],
            'imageString' => $row[0] . '.jpg',
            'color' => $row[4],
            'gender' => $row[8],
            'notes' => $row[9],
        ]);
    }

    protected function getNewShirtObject($row)
    {
        return new Shirt([
            'name' => $row[3],
            'brand' => $row[1],
            'lotNumber' => $row[2],
            'imageString' => $row[0] . '.jpg',
            'color' => $row[4],
            'gender' => $row[8],
            'notes' => $row[9],
        ]);
    }
}

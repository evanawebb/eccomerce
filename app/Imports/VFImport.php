<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class VFImport implements ToModel, WithHeadingRow
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Inventory([
            'name' => $row['Product Name'],
            'brand' => $row['Brand'],
            'lotNumber' => $row['Lot Number'],
            'color' => $row['Red Kap Color'],
            'category' => $row['Red Kap Product Category'],
            'subCategory' => $row['Red Kap Product Sub Category'],
            'gender' => $row['Gender'],
            'image' => $row['Name'] . '.jpg',
            'notes' => $row['Notes']
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}

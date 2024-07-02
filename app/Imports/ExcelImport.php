<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\ExcelImp;

class ExcelImport implements ToCollection, ToModel
{
    private $current= 0;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

    }

    public function model(array $row)
    {
        $this->current++;
        if($this->current > 1)
        {
            $ExcelImp = new ExcelImp;

                $ExcelImp->eeid = $row[0];
                $ExcelImp->full_name = $row[1];
                $ExcelImp->job_title = $row[2];
                $ExcelImp->department = $row[3];
                $ExcelImp->business_unit = $row[4];
                $ExcelImp->gender = $row[5];
                $ExcelImp->ethnicity = $row[6];
                $ExcelImp->age = $row[7];
                $ExcelImp->hire_date = $row[8];
                $ExcelImp->anual_salary = $row[9];
                $ExcelImp->bonus = $row[10];
                $ExcelImp->country = $row[11];
                $ExcelImp->city = $row[12];
                $ExcelImp->exit_date = $row[13];

            $ExcelImp->save();

        }
    }
}

<?php

namespace App\Imports;

use Throwable;
use App\Channelpartnerpincode;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ChannelpartnerpincodesImport implements
                   ToModel,
                   WithHeadingRow,
                   SkipsOnError,
                   WithBatchInserts
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Channelpartnerpincode([
            'state' =>$row['state'],
            'district' =>$row['district'],
            'pincode' =>$row['pincode']
        ]);
    }



    public function onError(Throwable $error)
    {

    }

    public function batchSize(): int
    {
        return 1000;
    }
}

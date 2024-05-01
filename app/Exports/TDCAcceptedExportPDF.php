<?php

namespace App\Exports;

use App\Models\AcceptedList;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TDCAcceptedExportPDF implements FromQuery, WithHeadings, WithMapping, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return AcceptedList::where('course', 'like', '%'. 'TDC'. '%');
    }

    public function map($row): array
    {
        $fields = [
            $row->first_name,
            $row->last_name,
            $row->email,
            $row->contact,
            $row->age,
            $row->birthday,
            $row->course,
            $row->transmission,
            $row->date,
        ];
        return $fields;
    }

    public function headings(): array
    {
        return ['First Name', 'Last Name', 'Email', 'Contact', 'Age', 'Birthday', 'Course', 'Transmission', 'Date'];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}

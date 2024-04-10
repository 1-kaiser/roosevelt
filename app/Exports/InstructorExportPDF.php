<?php

namespace App\Exports;

use App\Models\Instructor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class InstructorExportPDF implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Instructor::all();
    }

    public function map($row): array
    {
        $fields = [
            $row->f_name,
            $row->l_name,
            $row->email,
            $row->contact,
            $row->gender,
            $row->age
        ];
        return $fields;
    }

    public function headings(): array
    {
        return ['First Name', 'Last Name', 'Email', 'Contact', 'Gender', 'Age'];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}

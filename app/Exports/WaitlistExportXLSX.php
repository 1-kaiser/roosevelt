<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class WaitlistExportXLSX implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer::all();
    }

    public function map($row): array
    {
        $fields = [
            $row->name,
            $row->email,
            $row->contact,
            $row->course,
            $row->transmission,
            $row->date,
        ];
        return $fields;
    }

    public function headings(): array
    {
        return ['name', 'email', 'contact', 'course', 'transmission', 'date'];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}

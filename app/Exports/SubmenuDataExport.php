<?php

namespace App\Exports;

use App\Models\SubmenuData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubmenuDataExport implements FromCollection, WithHeadings, WithMapping {
    protected $slug;

    public function __construct($slug) {
        $this->slug = $slug;
    }

    /**
     * Ambil data dari model SubmenuData berdasarkan slug dan urutkan menurut kode.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection() {
        return SubmenuData::where('slug', $this->slug)->orderBy('kode')->get();
    }

    /**
     * Tentukan header untuk file Excel.
     *
     * @return array
     */
    public function headings(): array {
        return [
            'Kode',
            'Elemen',
            'Data 2021',
            'Data 2022',
            'Data 2023',
            'Data 2024',
            'Satuan',
            'Sifat Data',
            'Status',
            'Otoritas'
        ];
    }

    /**
     * Mapping each row of data
     *
     * @param $row
     * @return array
     */
    public function map($row): array
    {
        return [
            $row->kode,
            $row->elemen,
            $row->data2021,
            $row->data2022,
            $row->data2023,
            $row->data2024,
            $row->satuan,
            $row->sifat_data,
            $row->status,
            $row->otoritas
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item1 = Item::create(['name' => 'Lingkungan Hidup', 'slug' => Str::slug('Lingkungan Hidup')]);
        $item1_1 = Item::create(['name' => 'Kasus Lingkungan Hidup', 'slug' => Str::slug('Kasus Lingkungan Hidup'), 'parent_id' => $item1->id]);
        $item1_2 = Item::create(['name' => 'Luas Ruang Terbuka Hijau', 'slug' => Str::slug('Luas Ruang Terbuka Hijau'), 'parent_id' => $item1->id]);
        $item1_3 = Item::create(['name' => 'Sarana Pengendali Lingkungan Hidup', 'slug' => Str::slug('Sarana Pengendali Lingkungan Hidup'), 'parent_id' => $item1->id]);
        $item1_4 = Item::create(['name' => 'Pemantauan Kualitas Udara', 'slug' => Str::slug('Pemantauan Kualitas Udara'), 'parent_id' => $item1->id]);
        $item1_5 = Item::create(['name' => 'Pemantauan Kualitas Air Sungai', 'slug' => Str::slug('Pemantauan Kualitas Air Sungai'), 'parent_id' => $item1->id]);
        $item1_6 = Item::create(['name' => 'Pemantauan Kualitas Air Laut', 'slug' => Str::slug('Pemantauan Kualitas Air Laut'), 'parent_id' => $item1->id]);
        $item1_7 = Item::create(['name' => 'Pemantauan Kualitas Air Sumur', 'slug' => Str::slug('Pemantauan Kualitas Air Sumur'), 'parent_id' => $item1->id]);
        $item1_8 = Item::create(['name' => 'Industri', 'slug' => Str::slug('Industri'), 'parent_id' => $item1->id]);
        $item1_9 = Item::create(['name' => 'Perusahaan Wajib Dokumen Lingkungan', 'slug' => Str::slug('Perusahaan Wajib Dokumen Lingkungan'), 'parent_id' => $item1->id]);
        $item1_10 = Item::create(['name' => 'Pelestarian Lingungan Hidup', 'slug' => Str::slug('Pelestarian Lingungan Hidup'), 'parent_id' => $item1->id]);
        $item1_11 = Item::create(['name' => 'Data Kinerja Dinas Lingkungan Hidup dan Kehutan', 'slug' => Str::slug('Data Kinerja Dinas Lingkungan Hidup dan Kehutan'), 'parent_id' => $item1->id]);
        $item1_12 = Item::create(['name' => 'Data IKK dan SPM Urusan Lingkungan Hidup', 'slug' => Str::slug('Data IKK dan SPM Urusan Lingkungan Hidup'), 'parent_id' => $item1->id]);
        $item1_13 = Item::create(['name' => 'Layanan Persampahan', 'slug' => Str::slug('Layanan Persampahan'), 'parent_id' => $item1->id]);

        $item2 = Item::create(['name' => 'Kehutanan', 'slug' => Str::slug('Kehutanan-main')]);
        $item2_1 = Item::create(['name' => 'Jumlah Izin Untuk Hak Pengusahaan Kehutanan', 'slug' => Str::slug('Jumlah Izin Untuk Hak Pengusahaan Kehutanan'), 'parent_id' => $item2->id]);
        $item2_2 = Item::create(['name' => 'Kehutanan', 'slug' => Str::slug('Kehutanan'), 'parent_id' => $item2->id]);
        $item2_3 = Item::create(['name' => 'Kawasan Hutan (luasan)', 'slug' => Str::slug('Kawasan Hutan (luasan)'), 'parent_id' => $item2->id]);
        $item2_4 = Item::create(['name' => 'Jumlah Polisi Hutan', 'slug' => Str::slug('Jumlah Polisi Hutan'), 'parent_id' => $item2->id]);
        $item2_5 = Item::create(['name' => 'Volume Kayu yang Dicuri', 'slug' => Str::slug('Volume Kayu yang Dicuri'), 'parent_id' => $item2->id]);
        $item2_6 = Item::create(['name' => 'Luas Lahan Pelestaraian Lingkungan Hidup', 'slug' => Str::slug('Luas Lahan Pelestaraian Lingkungan Hidup'), 'parent_id' => $item2->id]);
        $item2_7 = Item::create(['name' => 'Data Kinerja Dinas Lingkungan Hidup dan Kehutanan', 'slug' => Str::slug('Data Kinerja Dinas Lingkungan Hidup dan Kehutanan'), 'parent_id' => $item2->id]);
        $item2_8 = Item::create(['name' => 'Data IKK dan SPM Urusan Kehutanan', 'slug' => Str::slug('Data IKK dan SPM Urusan Kehutanan'), 'parent_id' => $item2->id]);
        $item2_9 = Item::create(['name' => 'Keusakan Hutan', 'slug' => Str::slug('Keusakan Hutan'), 'parent_id' => $item2->id]);
        $item2_10 = Item::create(['name' => 'Luas dan Penyebaran Lahan Kritis di DIY', 'slug' => Str::slug('Luas dan Penyebaran Lahan Kritis di DIY'), 'parent_id' => $item2->id]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SubmenuData;
use Illuminate\Http\Request;
use App\Exports\SubmenuDataExport;
use Maatwebsite\Excel\Facades\Excel;

class SubmenuController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'kode' => 'required|numeric|digits:3|unique:submenu_data,kode',
            'elemen' => 'required|string|max:255',
            'data2021' => 'nullable|numeric',
            'data2022' => 'nullable|numeric',
            'data2023' => 'nullable|numeric',
            'data2024' => 'nullable|numeric',
            'satuan' => 'nullable|string|max:50',
            'sifat_data' => 'required|string|max:50',
            'status' => 'required|string|in:tidak ada,sementara,tetap',
            'otoritas' => 'nullable|string|max:100',
            'verifikasi' => 'nullable|string|max:100',
            'slug' => 'required|string|max:255|exists:items,slug',
        ]);

        $slug = $request->input('slug');

        $submenuData = new SubmenuData($request->all());
        $submenuData->save();

        return redirect("/dataku/administrator/$slug")->with('success', 'Data berhasil ditambahkan!');
    }

    public function updateData(Request $request) {
        $request->validate([
            'data' => 'required|array',
            'data.*.kode' => 'required|string|max:3',
            'data.*.slug' => 'required|string',
            'data.*.data2024' => 'nullable|numeric',
            'data.*.status' => 'required|in:tidak ada,sementara,tetap',
        ]);
        
        foreach ($request->data as $item) {
            $data = SubmenuData::where('kode', $item['kode'])
                            ->where('slug', $item['slug'])
                            ->first();               
            if ($data) {
                $data->data2024 = $item['data2024'];
                $data->status = $item['status'];
                $data->save();
            }
        }

        return response()->json(['message' => 'All data updated successfully']);
    }

    public function export(Request $request) {
        $slug = $request->query('slug');
        return Excel::download(new SubmenuDataExport($slug), "$slug.xlsx");
    }

    public function search(Request $request) {
        $request->validate([
            'keyword' => 'required|string|max:255',
        ]);

        $keyword = $request->input('keyword');

        $results = SubmenuData::where('kode', 'LIKE', "%{$keyword}%")
            ->orWhere('kode', 'LIKE', "{$keyword}%")
            ->orWhere('kode', 'LIKE', "%{$keyword}")
            ->orWhere('elemen', 'LIKE', "%{$keyword}%")
            ->orWhere('elemen', 'LIKE', "%{$keyword}")
            ->orWhere('elemen', 'LIKE', "{$keyword}%")
            ->with('item')
            ->get();
        dd($results);
        return view('your_search_results_view', compact('results'));
    }
}

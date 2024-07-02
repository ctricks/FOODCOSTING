<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Imports\ExcelImport; 
use Excel;
use App\Models\ExcelImp;

class ExcelImportController extends Controller
{
    public function import_excel()
    {
        return view('pages.importExcel');
    }

    public function import_excel_post(Request $request)
    {
        // dd($request->file('excel_file'));
        Excel::import(new ExcelImport, $request->file('excel_file'));
        return redirect('importexcel')->with('success', 'File uploaded successfully.');
        
    }
}

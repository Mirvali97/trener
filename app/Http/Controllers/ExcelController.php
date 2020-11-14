<?php

namespace App\Http\Controllers;
use App\Coach;
use App\Imports\CoachImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ExcelController extends Controller
{
    public  function index(){
        $data = Coach::all();

   	// $yeartime =  Date::excelToDateTimeObject('42979');

        return view('welcome', compact('data'));
    }
    public function import(Request $request){
        Excel::import(new CoachImport, request()->file('file'));
        return back()->with('Success','Fayl Muafaqiyatli Yuklandi');
    }
}

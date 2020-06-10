<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\User;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function user()
    {
        $user = User::all();
        $pdf = PDF::loadView('adminlte/pages/report/user',['data' => $user]);
        return $pdf->download('user-report.pdf');


    }

    public function inventory()
    {
        $inventory = Inventory::all();
        $pdf = PDF::loadView('adminlte/pages/report/inventory',['data' => $inventory]);
        return $pdf->download('inventory.pdf');
    
    }
}

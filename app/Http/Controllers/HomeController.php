<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_data = User::latest()->get();
        $product_data = Product::latest()->get();
        // dd( $user_data);
        return view('dashboard.index',compact('user_data','product_data'));
    }
    public function rev_index(){
        $product_data = Product::latest()->get();
        return view('dashboard.revenue',compact('product_data'));
    }
    public function export() 
    {
        
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}

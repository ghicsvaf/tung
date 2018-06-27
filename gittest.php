<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;


class khachhangController extends Controller
{
    public function index()
    {
       return view('khachhang_index');
    }
    public function create()
    {
        return view('khachhang_create');
    }
    public function store(Request $request)
    {
        print_r($request->all());
    }
}
?>
edidtted
another changes wtf
hello mothe

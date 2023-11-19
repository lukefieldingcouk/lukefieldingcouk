<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestForm;
use DB;

class TestFormController extends Controller
{
    public function index()
    {
        return view('testform');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
        ]);
        $TestFormEntry = new TestForm();
        $TestFormEntry->name = $request->input('name');
        $TestFormEntry->number = $request->input('number');
        $TestFormEntry->save();

        return redirect()->back();
    }

    public function show()
    {
        $entry = DB::table('FormTable')->select('id', 'name', 'number')->get();

        return view('formdata', ['entry' => $entry]);
    }

}

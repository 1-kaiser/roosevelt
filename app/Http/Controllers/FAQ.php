<?php

namespace App\Http\Controllers;

use App\Models\FAQ as ModelsFAQ;
use Illuminate\Http\Request;

class FAQ extends Controller
{
    public function save(Request $request) {
        ModelsFAQ::create($request->all());
        session()->flash('success');
        return redirect('/customer');
    }
}

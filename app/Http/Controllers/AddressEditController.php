<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressEditController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('address.update', [
            'address' => $request->user()->address
        ]);
    }
}

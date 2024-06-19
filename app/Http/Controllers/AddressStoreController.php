<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->address()->create($request->only('line_1', 'line_2', 'city', 'state', 'zip_code'));

        return redirect('/address');
    }
}

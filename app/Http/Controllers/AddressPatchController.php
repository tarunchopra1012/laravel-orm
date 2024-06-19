<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressPatchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->address()->update([
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
        ]);

        return redirect('/address');
    }
}

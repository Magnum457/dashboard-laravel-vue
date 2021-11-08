<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;

class HomeController extends Controller
{
    public function index ()
    {
        $clientes = Client::all();

        return response()->json([
            'clients' => $clientes,
        ]);
    }
}

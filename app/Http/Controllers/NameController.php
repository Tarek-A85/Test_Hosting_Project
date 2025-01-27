<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index() :JsonResponse
    {
        $names = Name::get();

        return response()->json([
            'message' => "Here are all the names!",
            'data' => $names
        ]);
    }
}

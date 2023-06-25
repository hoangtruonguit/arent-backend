<?php
namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct()
    {
      //
    }

    public function index()
    {
        $plans =  Plan::whereNull('user_id')->orderBy('id', 'asc')->limit(4)->get();

        return response()->json([
            'status' => 'success',
            'plans' => $plans,
        ]);
    }


}

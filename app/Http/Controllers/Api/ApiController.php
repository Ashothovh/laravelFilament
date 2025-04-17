<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner;
use App\Models\Activity;

class ApiController extends Controller
{
    public function users()
    {
        return response()->json(User::with('partner')->get());
    }

    public function partners()
    {
        return response()->json(Partner::with('activities')->get());
    }

    public function activities()
    {
        return response()->json(Activity::with('partner')->get());
    }
}

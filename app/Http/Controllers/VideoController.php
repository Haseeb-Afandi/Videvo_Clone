<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function fetch()
    {
        $videos = Video::all();

        return response()->json($videos);
    }
}

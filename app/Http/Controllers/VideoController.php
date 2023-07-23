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
    // public function upload(Request $request) 
    // {
    // 	$data = $request->validate([
    //         'title' => 'required'
    //     ]);

    //     $temp = Video::create($data);

    //     return response()->json(['success'=>'Video Upload succesfully']);
    // }
}

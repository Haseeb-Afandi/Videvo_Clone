<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function fetch()
    {
        $videos = Video::all();

        return response()->json($videos);
    }
    public function upload(Request $request) 
    {
    	$data = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'Video' => ['required']
        ]);

        if($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if($request->hasFile('Video')) {

            $videoName = time().uniqid('', true).'.'.$request->Video->extension();  

            $request->Video->move(public_path('videos'), $videoName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        $temp = Video::create([
            'title' => $request->title,
            'Video' => $videoName,
        ]);

        return response()->json(['success'=> $videoName]);
    }
}

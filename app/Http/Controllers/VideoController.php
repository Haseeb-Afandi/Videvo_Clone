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
            'description' => ['required', 'string', 'max:255'],
            'clip_type' => ['required'],
            'Category' => ['required'],
            'Video' => ['required']
        ]);

        if ($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if ($request->hasFile('Video')) {

            $videoName = time() . uniqid('', true) . '.' . $request->Video->extension();

            $request->Video->move(public_path('videos'), $videoName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        $getID3 = new \getID3;
        $file = $getID3->analyze(realpath(public_path('videos/'.$videoName)));
        $duration = date('i:s', $file['playtime_seconds']);

        $temp = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $_SESSION['username'] ?? null,
            'clip_type' => $request->clip_type,
            'Category' => $request->Category,
            'Category2' => $request->Category2 ?? null,
            'duration' => $duration,
            'Video' => $videoName,
        ]);

        return response()->json(['success' => $videoName]);
    }
}
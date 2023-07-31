<?php

namespace App\Http\Controllers;

use App\Models\Videoa;
use App\Models\Videoas;
use App\Models\Videor;
use App\Models\VideosA;
use Response;
use App\Models\Video;
use App\Models\Videos_accepted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class VideoController extends Controller
{
    public function fetch_ua()
    {
        $videos = Video::all();

        return response()->json($videos);
    }
    public function fetch_r()
    {
        $videos = Videor::all();

        return response()->json($videos);
    }
    public function fetch()
    {
        $videos = Videoa::all();

        return response()->json($videos);
    }
    public function fetchFootage()
    {
        $videos = Videoa::all()->where('type','4K & HD Footage');

        return response()->json($videos);
    }
    public function fetchMotion()
    {
        $videos = Videoa::all()->where('type','Motion Graphics');

        return response()->json($videos);
    }
    public function upload(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'clip_type' => ['required'],
            'Category' => ['required'],
            'Video' => ['required'],
            'Thumbnail' => ['required']
        ]);

        if ($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if ($request->hasFile('Video')) {

            $videoName = time() . uniqid('', true) . '.' . $request->Video->extension();
            $request->Video->move(public_path('videos'), $videoName);

            // $Video = $request->Video->store('videos', 'Public');

        }
        if ($request->hasFile('Thumbnail')) {

            $thumbnailName = time() . uniqid('', true) . '.' . $request->Thumbnail->extension();
            $request->Thumbnail->move(public_path('thumbnails'), $thumbnailName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        $getID3 = new \getID3;
        $file = $getID3->analyze(realpath(public_path('videos/'.$videoName)));
        $duration = date('i:s', $file['playtime_seconds']);
        $resolution = $file['video']['resolution_x'] . " x " . $file['video']['resolution_y'];
        $format = $file['video']['dataformat'];
        
        $temp = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => Session::get('username'),
            'clip_type' => $request->clip_type,
            'Category' => $request->Category,
            'type' => $request->type,
            'Category2' => $request->Category2 ?? null,
            'resolution' => $resolution,
            'duration' => $duration,
            'Video' => $videoName,
            'thumbnail' => $thumbnailName,
            'format' => $format,
        ]);

        return redirect()->intended('/userdashboard');
    }
}
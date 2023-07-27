<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudioController extends Controller
{
    public function fetch()
    {
        $videos = Audio::all();

        return response()->json($videos);
    }
    public function upload(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'clip_type' => ['required'],
            'Category' => ['required'],
            'Audio' => ['required']
        ]);

        if ($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if ($request->hasFile('Audio')) {

            $AudioName = time() . uniqid('', true) . '.' . $request->Audio->extension();

            $request->Audio->move(public_path('Audios'), $AudioName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        $getID3 = new \getID3;
        $file = $getID3->analyze(realpath(public_path('Audios/'.$AudioName)));
        $duration = date('i:s', $file['playtime_seconds']);

        $temp = Audio::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $_SESSION['username'] ?? null,
            'clip_type' => $request->clip_type,
            'Category' => $request->Category,
            'Category2' => $request->Category2 ?? null,
            'duration' => $duration,
            'Audio' => $AudioName,
        ]);

        return response()->json(['success' => $AudioName]);
    }
}
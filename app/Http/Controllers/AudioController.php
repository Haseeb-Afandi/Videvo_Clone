<?php

namespace App\Http\Controllers;

use Response;
use Session;
use App\Models\Audio;
use App\Models\Audioa;
use App\Models\Audior;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudioController extends Controller
{
    public function fetch()
    {
        $videos = Audioa::all();

        return response()->json($videos);
    }
    public function fetchp()
    {
        $videos = Audio::all()->where('author', Session::get('username'))->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetchpa()
    {
        $videos = Audio::all()->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetcha()
    {
        $videos = Audioa::all()->where('author', Session::get('username'))->toArray();
        $videos = array_values($videos);


        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchr()
    {
        $videos = Audior::all()->where('author', Session::get('username'))->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetchWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Audioa::all()->whereIn('id', $tagsArray)->toArray();

            $videoArray = [];

            $videos = array_values($videos);

            $x = 0;
            while ($x < sizeof($videos)) {
                // print_r($videos[$x]);

                $videoArray[$x] = $videos[$x];
                $x++;
            }

            return response()->json($videos);
        } else {

            $videos = Audioa::all()->whereIn('Category', $array)->toArray();

            $videoArray = [];

            $videos = array_values($videos);

            $x = 0;
            while ($x < sizeof($videos)) {
                // print_r($videos[$x]);

                $videoArray[$x] = $videos[$x];
                $x++;
            }

            return response()->json($videos);
        }
    }
    public function fetchSEffects()
    {
        $videos = Audioa::all()->where('type', 'Sound Effects')->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchSEffectsWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Audioa::all()->whereIn('id', $tagsArray)->where('type', 'Sound Effects')->toArray();

            $videoArray = [];

            $videos = array_values($videos);

            $x = 0;
            while ($x < sizeof($videos)) {
                // print_r($videos[$x]);

                $videoArray[$x] = $videos[$x];
                $x++;
            }

            return response()->json($videos);
        } else {

            $videos = Audioa::all()->whereIn('Category', $array)->where('type', 'Sound Effects')->toArray();

            $videoArray = [];

            $videos = array_values($videos);

            $x = 0;
            while ($x < sizeof($videos)) {
                // print_r($videos[$x]);

                $videoArray[$x] = $videos[$x];
                $x++;
            }

            return response()->json($videos);
        }
    }
    public function upload(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'clip_type' => ['required'],
            'Category' => ['required'],
            'Audio' => ['required'],
            'Thumbnail' => ['required']
        ]);

        if ($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if ($request->hasFile('Audio')) {

            $AudioName = time() . uniqid('', true) . '.' . $request->Audio->extension();

            $request->Audio->move(public_path('Audios'), $AudioName);

            // $Video = $request->Video->store('videos', 'Public');

        }
        if ($request->hasFile('Thumbnail')) {

            $ThumbnailName = time() . uniqid('', true) . '.' . $request->Thumbnail->extension();

            $request->Thumbnail->move(public_path('Audios'), $ThumbnailName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        $getID3 = new \getID3;
        $file = $getID3->analyze(realpath(public_path('Audios/'.$AudioName)));
        $duration = date('i:s', $file['playtime_seconds']);

        $temp = Audio::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $_SESSION['username'] ?? null,
            'clip_type' => $request->clip_type,
            'Category' => $request->Category,
            'Category2' => $request->Category2 ?? null,
            'duration' => $duration,
            'Audio' => $AudioName,
            'thumbnail' => $ThumbnailName,
            'format' => $request->Audio->extension(),
        ]);

        return redirect()->back();
    }

    public function uploada(Request $request)
    {
        
        $id = $request->id;

        $data = Audio::all()->where('id', $id)->firstOrFail()->toArray();

        // $data = array_values($data);


        $temp = Audioa::create($data);

        $del = Audio::where('id', $id)->delete();


        return redirect()->intended('/admindashboard');
    }

    public function uploadr(Request $request)
    {
        
        $id = $request->id;

        $data = Audio::all()->where('id', $id)->firstOrFail()->toArray();

        // $data = array_values($data);


        $temp = Audior::create($data);

        $del = Audio::where('id', $id)->delete();


        return redirect()->intended('/admindashboard');
    }
}
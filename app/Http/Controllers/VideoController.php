<?php

namespace App\Http\Controllers;

use App\Models\Videoa;
use App\Models\Videoas;
use App\Models\Videor;
use App\Models\Tags;
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
    public function fetchp()
    {
        $videos = Video::all()->where('author', Session::get('username'))->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchpa()
    {
        $videos = Video::all()->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetcha()
    {
        $videos = Videoa::all()->where('author', Session::get('username'))->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchr()
    {
        $videos = Videor::all()->where('author', Session::get('username'))->toArray();

        return response()->json($videos);
    }
    public function fetchWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Videoa::all()->whereIn('id', $tagsArray)->toArray();

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

            $videos = Videoa::all()->whereIn('Category', $array)->toArray();

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
    public function fetchFootage()
    {
        $videos = Videoa::all()->where('type', '4K & HD Footage')->toArray();
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
    public function fetchFootageWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array)->toArray();
        $tags = array_values($tags);

        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Videoa::all()->whereIn('id', $tagsArray)->where('type', '4K & HD Footage')->toArray();

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

            $videos = Videoa::all()->whereIn('Category', $array)->where('type', '4K & HD Footage')->toArray();

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
    public function fetchMotion()
    {
        $videos = Videoa::all()->where('type', 'Motion Graphics')->toArray();
        $videoArray = [];

        $videos = array_values($videos);

        $x = 0;
        while ($x < sizeof($videos)) {
            // print_r($videos[$x]);

            $videoArray[$x] = $videos[$x];
            $x++;
        }

        // print_r($videoArray);


        return response()->json($videoArray);
    }
    public function fetchMotionWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array)->toArray();
        $tags = array_values($tags);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Videoa::all()->whereIn('id', $tagsArray)->where('type', 'Motion Graphics')->toArray();

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

            $videos = Videoa::all()->whereIn('Category', $array)->where('type', 'Motion Graphics')->toArray();

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
        $file = $getID3->analyze(realpath(public_path('videos/' . $videoName)));
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

        $VideoId = $temp->id;

        $tags = explode(',', $request->tags);

        if (sizeof($tags) > 0 && !is_null($tags)) {

            $x = 0;
            while ($x < sizeof($tags)) {

                $temp2 = Tags::create([
                    'product_id' => $VideoId,
                    'tag' => $tags[$x],
                ]);


                $x++;
            }

        }

        return redirect()->intended('/userdashboard');
    }
    public function uploada(Request $request)
    {
        
        $id = $request->id;

        $data = Video::all()->where('id', $id)->firstOrFail()->toArray();

        // $data = array_values($data);


        $temp = Videoa::create($data);

        $del = Video::where('id', $id)->delete();

        return redirect()->intended('/admindashboard');
    }
    public function uploadr(Request $request)
    {
        
        $id = $request->id;

        $data = Video::all()->where('id', $id)->firstOrFail()->toArray();

        $temp = Videor::create($data);

        $del = Video::where('id', $id)->delete();


        return redirect()->intended('/admindashboard');
    }
}
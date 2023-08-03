<?php

namespace App\Http\Controllers;

use Response;
use Session;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Templatea;
use Illuminate\Support\Facades\Validator;
use App\Models\Templater;
use App\Models\Tags;

class TemplateController extends Controller
{
    public function fetch()
    {
        $videos = Templatea::all();

        return response()->json($videos);
    }
    public function fetchp()
    {
        $videos = Template::all()->where('author', Session::get('username'))->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetchpa()
    {
        $videos = Template::all()->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetcha()
    {
        $videos = Templatea::all()->where('author', Session::get('username'))->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetchr()
    {
        $videos = Templater::all()->where('author', Session::get('username'))->toArray();
        $videos = array_values($videos);


        return response()->json($videos);
    }
    public function fetchWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Templatea::all()->whereIn('id', $tagsArray)->toArray();

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

            $videos = Templatea::all()->whereIn('Category', $array)->toArray();

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
    public function fetchAEWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Templatea::all()->whereIn('id', $tagsArray)->where('type', 'After')->toArray();

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

            $videos = Templatea::all()->whereIn('Category', $array)->where('type', 'After')->toArray();

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
    public function fetchPPWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Templatea::all()->whereIn('id', $tagsArray)->where('type', 'Premiere')->toArray();

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

            $videos = Templatea::all()->whereIn('Category', $array)->where('type', 'Premiere')->toArray();

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
    public function fetchDRWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Templatea::all()->whereIn('id', $tagsArray)->where('type', 'Davinci')->toArray();

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

            $videos = Templatea::all()->whereIn('Category', $array)->where('type', 'Davinci')->toArray();

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
    public function fetchFCWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Templatea::all()->whereIn('id', $tagsArray)->where('type', 'Final')->toArray();

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

            $videos = Templatea::all()->whereIn('Category', $array)->where('type', 'Final')->toArray();

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
    public function fetchMGWhere($array)
    {
        $tags = Tags::all()->whereIn('tag', $array);
        if (sizeof($tags) > 0) {
            $tagsArray = $tags[0]['product_id'];

            $videos = Templatea::all()->whereIn('id', $tagsArray)->where('type', 'Motion')->toArray();

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

            $videos = Templatea::all()->whereIn('Category', $array)->where('type', 'Motion')->toArray();

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
    public function fetchAE()
    {
        $videos = Templatea::all()->where('type', 'After')->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchPP()
    {
        $videos = Templatea::all()->where('type', 'Premiere')->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchDR()
    {
        $videos = Templatea::all()->where('type', 'Davinci')->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchFC()
    {
        $videos = Templatea::all()->where('type', 'Final')->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function fetchMG()
    {
        $videos = Templatea::all()->where('type', 'Motion')->toArray();

        $videos = array_values($videos);

        return response()->json($videos);
    }
    public function upload(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'clip_type' => ['required'],
            'Category' => ['required'],
            'Template' => ['required'],
            'Thumbnail' => ['required'],
            'Preview' => ['required']
        ]);

        if ($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if ($request->hasFile('Template')) {

            $TemplateName = time() . uniqid('', true) . '.' . $request->Template->extension();

            $request->Template->move(public_path('templates'), $TemplateName);

            // $Video = $request->Video->store('videos', 'Public');

        }
        if ($request->hasFile('Thumbnail')) {

            $ThumbnailName = time() . uniqid('', true) . '.' . $request->Thumbnail->extension();

            $request->Thumbnail->move(public_path('thumbnails'), $ThumbnailName);

            // $Video = $request->Video->store('videos', 'Public');

        }
        if ($request->hasFile('Preview')) {

            $PreviewName = time() . uniqid('', true) . '.' . $request->Preview->extension();

            $request->Preview->move(public_path('videos'), $PreviewName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        // $getID3 = new \getID3;
        // $file = $getID3->analyze(realpath(public_path('templates/'.$TemplateName)));
        // $duration = date('i:s', $file['playtime_seconds']);

        $temp = Template::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $_SESSION['username'] ?? null,
            'clip_type' => $request->clip_type,
            'Category' => $request->Category,
            'Category2' => $request->Category2 ?? null,
            // 'duration' => $duration,
            'Template' => $TemplateName,
            'thumbnail' => $ThumbnailName,
            'preview' => $PreviewName
        ]);

        return redirect()->back();
    }

    public function uploada(Request $request)
    {
        
        $id = $request->id;

        $data = Template::all()->where('id', $id)->firstOrFail()->toArray();

        // $data = array_values($data);


        $temp = Templatea::create($data);

        $del = Template::where('id', $id)->delete();

        return redirect()->intended('/admindashboard');
    }
    public function uploadr(Request $request)
    {
        
        $id = $request->id;

        $data = Template::all()->where('id', $id)->firstOrFail()->toArray();

        // $data = array_values($data);


        $temp = Templater::create($data);

        $del = Template::where('id', $id)->delete();


        return redirect()->intended('/admindashboard');
    }
}
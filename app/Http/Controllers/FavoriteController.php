<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Videoa;
use App\Models\Audioa;
use App\Models\Templatea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class FavoriteController extends Controller
{
    public function add(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'productID' => 'required',
            'product_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        } else {

            $temp = Favorite::create([
                'userID' => Session::get('userid'),
                'productID' => $request->productID,
                'product_type' => $request->product_type,
            ]);

            if ($request->product_type == "video") {

                $data = Videoa::all()->where('id', $request->productID)->firstOrFail();

                Videoa::where('id', $request->productID)->update(['likes' => ($data->likes + 1)]);

            } else if ($request->product_type == "audio") {

                $data = Audioa::all()->where('id', $request->productID)->firstOrFail();

                Audioa::where('id', $request->productID)->update(['likes' => ($data->likes + 1)]);

            } else if ($request->product_type == "template") {

                $data = Templatea::all()->where('id', $request->productID)->firstOrFail();

                templatea::where('id', $request->productID)->update(['likes' => ($data->likes + 1)]);
            }

        }

        return response()->json(['success' => "yes"]);
    }

    public function fetchVideo()
    {

        $fav = Favorite::all()->where('userID', Session::get('userid'))->where('product_type', 'video')->toArray();

        $fav = array_values($fav);

        $videoArray = [];
        $x = 0;

        while ($x < sizeof($fav)) {

            $videos = Videoa::all()->where('id', $fav[$x]['productID'])->toArray();

            $videos = array_values($videos);

            $videoArray[$x] = $videos[0];
            $x++;
        }

        $videoArray = array_values($videoArray);

        return response()->json($videoArray);
    }
    public function fetchAudio()
    {

        $fav = Favorite::all()->where('userID', Session::get('userid'))->where('product_type', 'audio')->toArray();

        $fav = array_values($fav);

        $videoArray = [];
        $x = 0;

        while ($x < sizeof($fav)) {

            $videos = Audioa::all()->where('id', $fav[$x]['productID'])->toArray();

            $videos = array_values($videos);

            $videoArray[$x] = $videos[0];
            $x++;
        }

        $videoArray = array_values($videoArray);

        return response()->json($videoArray);
    }
}
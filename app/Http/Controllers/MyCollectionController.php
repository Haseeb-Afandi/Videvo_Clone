<?php

namespace App\Http\Controllers;

use App\Models\MyCollection;
use App\Models\MyCollectionProduct;
use App\Models\Videoa;
use App\Models\Audioa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class MyCollectionController extends Controller
{
    public function add(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'productID' => 'required',
            'product_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        } else {

            $temp = MyCollection::create([
                'userID' => Session::get('userid'),
                'name' => $request->name,
            ]);

            $collectionId = $temp->id;
            $temp2 = MyCollectionProduct::create([
                'collectionID' => $collectionId,
                'productID' => $request->productID,
                'product_type' => $request->product_type
            ]);

        }

        return redirect()->back();

    }

    public function fetch()
    {

        $fav = MyCollection::all()->where('userID', Session::get('userid'))->toArray();

        $fav = array_values($fav);


        $a = 0;

        $dataArray = [];

        while ($a < sizeof($fav)) {

            $name = $fav[$a]['name'];
            $id = $fav[$a]['id'];


            $videoArray = [];
            $y = 0;

            while ($y < sizeof($fav)) {

                $videos = MyCollectionProduct::all()->where('collectionID', $fav[$y]['id'])->toArray();

                $videos = array_values($videos);

                $videoArray[$y] = $videos[0];
                $y++;
            }

            $videoArray = array_values($videoArray);

            $dataArray[$a] = [
                'id' => $id,
                'name' => $name,
                'size' => sizeof($videoArray)
            ];

            $a++;
        }

        // $x = 0;

        // while ($x < sizeof($fav)) {

        //     $videos = Audioa::all()->where('id', $fav[$x]['productID'])->toArray();

        //     $videos = array_values($videos);

        //     $videoArray[$x] = $videos[0];
        //     $x++;
        // }

        

        return response()->json($dataArray);
    }

    public function fetchVideo($id)
    {

        $fav = MyCollectionProduct::all()->where('collectionID', $id)->where('product_type', 'video')->toArray();

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
    public function fetchAudio($id)
    {

        $fav = MyCollectionProduct::all()->where('collectionID', $id)->where('product_type', 'audio')->toArray();

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
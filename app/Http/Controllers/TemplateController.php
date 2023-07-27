<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    public function fetch()
    {
        $videos = Template::all();

        return response()->json($videos);
    }
    public function upload(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'clip_type' => ['required'],
            'Category' => ['required'],
            'Template' => ['required']
        ]);

        if ($data->fails()) {
            return response()->json(['code' => 400, 'msg' => $data->errors()->first()]);
        }

        if ($request->hasFile('Template')) {

            $TemplateName = time() . uniqid('', true) . '.' . $request->Template->extension();

            $request->Template->move(public_path('Templates'), $TemplateName);

            // $Video = $request->Video->store('videos', 'Public');

        }

        // $getID3 = new \getID3;
        // $file = $getID3->analyze(realpath(public_path('Templates/'.$TemplateName)));
        // $duration = date('i:s', $file['playtime_seconds']);

        $temp = Template::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $_SESSION['username'] ?? null,
            'clip_type' => $request->clip_type,
            'Category' => $request->Category,
            'Category2' => $request->Category2 ?? null,
            // 'duration' => $duration,
            'Template' => $TemplateName,
        ]);

        return response()->json(['success' => $TemplateName]);
    }
}
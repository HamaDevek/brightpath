<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function getData($type)
    {
        $data = Article::where('type', $type)->get();

        return view('settings.pages.articles.index')->with(['data' => $data, 'type' => $type]);
    }
    public function getRecoard($id)
    {
        $data = Article::findOrFail($id);
        // dd($data);
        return view('settings.pages.articles.update')->with(['data' => $data]);
    }
    public function changeState($id)
    {
        $data = Article::findOrFail($id);
        $data->state = !$data->state;
        $data->save();
        return redirect()->back();
    }
    public function updateRecoard(Request $request, $id)
    {
        // dd($request->type);
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'state' => 'sometimes|in:on,null',
            'button' => 'sometimes|max:255',
            'link' => 'sometimes|max:255',
            // 'multi' => 'sometimes|in:on,null',
            'imgs' => 'image|mimes:jpeg,png,jpg,gif|max:8192'
        ]);

        $data = Article::findOrFail($id);
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->more = $request->more;
        $data->extra = $request->extra;
        $data->button = $request->button;
        $data->link = $request->link;
        $data->state = $request->state == 'on' ? 1 : 0;
        if (isset($request->imgs)) {
            foreach (json_decode($data->image,true) as $key => $value) {
                Storage::delete('public/' .$value );
            }
        }
        $data->image = isset($request->imgs) ? json_encode([$request->imgs->store('uploads', 'public')]) : $data->image;
        $data->save();
        return redirect()->back()->withSuccess('Updated succesfully !');
    }
    public function deleteRecoard($id)
    {
        $data = Article::findOrFail($id);
        foreach (json_decode($data->image,true) as $key => $value) {
            Storage::delete('public/' .$value );
        }
        $data->delete();
        return redirect()->back()->withSuccess('Deleted succesfully !');
    }
    public function addArticle(Request $request, $type)
    {
        // dd($request->type);
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'state' => 'sometimes|in:on,null',
            'button' => 'sometimes|max:255',
            'link' => 'sometimes|max:255',
            'imgs' => 'image|mimes:jpeg,png,jpg,gif|max:8192'
        ]);
        $data = new Article;
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->more = $request->more;
        $data->button = $request->button;
        $data->link = $request->link;
        $data->extra = $request->extra;
        $data->type = $type;
        $data->multi = ($type == 'news' ||  $type == 'work') ? 1 : 0;
        // dd($request->input());
        $data->state = $request->state == 'on' ? 1 : 0;
        $data->image = isset($request->imgs) ? json_encode([$request->imgs->store('uploads', 'public')]) : json_encode([]);
        $data->save();
        return redirect()->back()->withSuccess('Added succesfully !');
    }
    public function newArticle($type)
    {
        return view('settings.pages.articles.insert')->with(['type' => $type]);
    }
    public function addImage(Request $request, $id)
    {
        $request->validate([
            'imgs' => 'required|mimes:mp4,jpeg,png,jpg,gif|max:8192'
        ]);
        $data = Article::findOrFail($id);
        if (!$data->multi) {
            return redirect()->back()->withErrors('Some things wrong !');
        }
        if (is_null($data->image)) {
            $data->image = json_encode([$request->imgs->store('uploads', 'public')]);
            $data->save();
            return redirect()->back()->withSuccess('Added succesfully !');
        }
        $json = json_decode($data->image);
        array_push($json, $request->imgs->store('uploads', 'public'));
        $data->image = $json;
        $data->save();
        return redirect()->back()->withSuccess('Added succesfully !');
    }
    public function article($id)
    {
        $data = Article::findOrFail($id);
        return view('settings.pages.contact')->with(['data' => $data]);
    }
    public function deleteImage(Request $request, $id)
    {
        $data = Article::findOrFail($id);
        $data->image = array_diff(json_decode($data->image, true), [$request->imgs]);
        Storage::delete('public/' . $request->imgs);
        $data->save();
        return redirect()->back()->withSuccess('Deleted succesfully !');
    }
    public function updateArticle(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'sometimes|max:255',
            'map' => 'sometimes',
            // 'lat' => 'regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/',
            // 'long' => 'regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/',
        ]);
        $data = Article::findOrFail($id);
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->button = $request->phone;
        $data->link = $request->email;
        $data->extra = $request->address;
        $data->image = json_encode($request->map) ?? $request->map;
        $data->save();
        return redirect()->back()->withSuccess('Updated succesfully !');
    }
}

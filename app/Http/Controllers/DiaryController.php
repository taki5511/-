<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Models\Diary;
use Cloudinary;

class DiaryController extends Controller
{
    public function index(Diary $diary)
    {
        return view('diaries.diary_index')->with(['diaries' => $diary->getPaginateByLimit(1)]);
    }
    
    public function show(Diary $diary)
    {
       return view('diaries.diary_show')->with(['diary' => $diary]);
    } 
    
    public function create()
    {
        return view('diaries.diary_create');
    }
    
    public function store(DiaryRequest $request, Diary $diary)
    {
        $input = $request['diary'];
        if($request->file('image')){
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        }
        $input["user_id"]=auth()->user()->id;
        $diary->fill($input)->save();
        return redirect('/diaries/' . $diary->id);
    }
    
    public function edit(Diary $diary)
    {
        return view('diaries.diary_edit')->with(['diary' => $diary]);
    }
    
     public function update(DiaryRequest $request, Diary $diary)
    {
        $input_diary = $request['diary'];
        $input["user_id"]=auth()->user()->id;
        $diary->fill($input_diary)->save();
        return redirect('/diaries/' . $diary->id);
    }
    
     public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/diary');
    }
}

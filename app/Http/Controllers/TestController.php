<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use App\Models\Test;
use Cloudinary;

class TestController extends Controller
{
    public function index(Test $test)
    {
        return view('tests.test_index')->with(['tests' => $test->get()]);
    }
    
    public function title(Test $test)
    {
        return view('tests.test_title')->with(['tests' => $test->getPaginateByLimit(10)]);
    }
    
    public function show(Test $test)
    {
       return view('tests.test_show')->with(['test' => $test]);
    } 
    
    public function create()
    {
        return view('tests.test_create');
    }
    
     public function store(TestRequest $request, Test $test)
    {
        $input = $request['test'];
        if($request->file('image')){
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        }
        $input["user_id"]=auth()->user()->id;
        $test->fill($input)->save();
        return redirect('/tests/' . $test->id);
    }
    
     public function edit(Test $test)
    {
        return view('tests.test_edit')->with(['test' => $test]);
    }
    
     public function update(TestRequest $request, Test $test)
    {
        $input_test = $request['test'];
        $input["user_id"]=auth()->user()->id;
        $test->fill($input_test->save());
        return redirect('/tests/' . $test->id);
    }
    
    public function answer(Test $test)
    {
       return view('tests.test_answer')->with(['test' => $test]);
    } 
    
     public function delete(Test $test)
    {
        $test->delete();
        return redirect('/tests/title');
    }
    
}

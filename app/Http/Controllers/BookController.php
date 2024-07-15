<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function index(){
        $books = DB::table('books')->join('categories','cate_id','=','categories.id')
                    ->select('books.*','name')->limit(10)->orderByDesc('id')->get();
        return view('books.index',compact('books'));
    }

    //Hien thi form them
    public function create(){
        $categories = DB::table('categories')->get();
        return view('books.create',compact('categories'));
    }
    //xu ly du lieu
    public function store(Request $request){
        $data = $request->except('_token');
        DB::table('books')->insert($data);
        // dd($data);

        return redirect()->route('book.index');
    }
    //Form sua
    public function edit($id){
        $book = DB::table('books')->where('id',$id)->first();
        $cate = DB::table('categories')->get();
        return view('books.edit',compact('book','cate'));
    }
    //Sua
    public function update(Request $request){
        $data = $request->except('_token','_method');
        DB::table('books')->where('id',$request['id'])->update($data);
        return redirect()->route('book.index');
    }

    //xoa
    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }
}

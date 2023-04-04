<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroge;
use App\Http\Requests\BookRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;


class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        if($request->has('search')){
            $data = Books::where('books', 'LIKE', "%$request->search%")->paginate(5);
        }else{
            $data = Books::paginate(5);
        }
         return view('buku', compact('data'));
    }

    

    public function create(){
        return view('create');
    }

    public function insertdata(Request $request){

       $data = Books::create($request->validate([
            'books' => 'required',
            'author' => 'required',
            'images' => 'required',
            'dokumen' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
       ]));
       if($request->hasFile('images')){
        $request->file('images')->move('coverbook/', $request->file('images')->getClientOriginalName());
        $data->images = $request->file('images')->getClientOriginalName();
        $data->save();

        $dokumen = $request->file('dokumen');
        $doc_name = 'FT' .date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
        $dokumen->move('dokumen/', $doc_name);
       }

       return redirect('/databuku')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function viewdata($id){
        $data = Books::find($id);
       return view('edit', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Books::find($id);
        $data->update($request->validate([
            'books' => 'required',
            'author' => 'required',
            'images' => 'mimes:jpeg,jpg,png',
            'dokumen' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
       ]));

        if($request->hasFile('images')){
            $destination = 'coverbook/'.$data->images;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('images')->move('coverbook/', $request->file('images')->getClientOriginalName());
            $data->images = $request->file('images')->getClientOriginalName();
           }

           $data->save();
        return redirect('/databuku')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id){
        $data = Books::find($id);
        $data->delete();
        return redirect('/databuku')->with('success', 'Data Berhasil Dihapus');
    }

    public function dataBuku(){
        $data = Books::all();
        return view('dashuser', compact('data'));
    }
    public function lovePage(){
        return view('favorite');
    }
// ---profile page----
   



}
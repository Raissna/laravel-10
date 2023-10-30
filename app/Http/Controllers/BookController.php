<?php

namespace App\Http\Controllers;
use \App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function databuku(){
        $data = Book::orderBy('id','desc')->get();
        return view('siswa.book', compact('data'));
    }
    public function addbuku(){
        return view ('siswa.addbuku');
    }
    public function buat(Request $request){
            Book :: create([
                    'nama_buku' => $request->nama_buku,
                    'jml_hal' => $request->jml_hal,
                    'penerbit' => $request->penerbit,
            ]);
            return redirect()->route('admin.databuku');

        }
        public function mengubah($id){
           $data = Book::where('id', $id)->first();
            return view ('mengubah', compact('data'));
        }

        public function update(Request $request){
            Book::where('id',$request->id)->update([
                'nama_buku'=>$request->nama_buku,
                'jml_hal' => $request->jml_hal,
                'penerbit' => $request->penerbit,
            ]);
            return redirect()->route('admin.databuku');
        }

        public function hapus($id){
            Book::where('id', $id)->delete();
            return redirect()->route('admin.databuku');
        }
}

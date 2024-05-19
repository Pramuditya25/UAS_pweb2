<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'contact' => contact::all()
        ) ;
        return view('back.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $contact = new contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->pesan = $request->pesan;
            $contact->save();
            return redirect('/')->with(['success' => 'your message has been sent']);
        }
        return view('portofolio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact  = contact::find($request->id);
        $data = array(
            'contact' => $contact
        );

        if($request->isMethod('post')){
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->pesan = $request->pesan;
            $contact->save();
            return redirect('/dashboard')->with(['success' => 'Update successful']);
        }
        return view('portofolio',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $contact = contact::find($request->id);
        $contact->delete();
        return redirect('/dashboard')->with(['delete' => 'data has been successfully deleted']);
    }
    public function cari(Request $request)
    {
        if($request->has('cari')){
            $contact = contact::where('name','LIKE','%'.$request->cari.'%')->orwhere('email','LIKE','%'.$request->cari.'%')->paginate(5);

        }else{
            $contact = contact::all();
        }
        return view('back.cari',compact('contact'));
    }
}
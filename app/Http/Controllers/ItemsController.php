<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $items =  Item::orderBy('created_at', 'asc')->paginate(10);
        return view('items.index')->with('items', $items);
    }


    public function create()
    {
        return view('items.create');
    }


    public function store(Request $request)
    {
        $this -> validate($request, [
            'Name' => 'required',
            'body' => 'required'
        ]);

        $item = new Item();
        $item -> Name = $request -> input('Name');
        $item -> Body = $request -> input('body');
        $item -> user_id = auth()->user()->id;
        $item -> save();

        return redirect('/items')->with('success', 'Item added');

    }


    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show')->with('item', $item);
    }


    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit')->with('item', $item);
    }


    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'Name' => 'required',
            'body' => 'required'
        ]);

        $item = Item::find($id);
        $item -> Name = $request -> input('Name');
        $item -> Body = $request -> input('body');
        $item -> save();

        return redirect('/items')->with('success', 'Item updated');
    }


    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items')->with('success', 'Post removed');
    }
}

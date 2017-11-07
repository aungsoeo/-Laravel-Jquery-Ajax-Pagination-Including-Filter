<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ItemAjaxController extends Controller
{
    public function manageItemAjax()
    {
    	return view('item');
    }

    public function index(Request $request)
    {
        $items = Item::orderBy('id', 'DESC')->paginate(5);
        return response()->json($items);
    }
    
    public function store(Request $request)
    {
        $create = Item::create($request->all());
        return response()->json($create);
    }

    public function update(Request $request, $id)
    {
        $edit = Item::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function destroy($id)
    {
        Item::find($id)->delete();
        return response()->json(['done']);
    }

    public function search()
    {
        var_dump($_POST);
        $search = $_POST['search'];
        $items = Item::where('title','like','%'.$search.'%')->orderBy('id', 'DESC')->paginate(5);
        return response()->json($items);
    }

}

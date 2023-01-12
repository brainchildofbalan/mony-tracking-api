<?php

namespace App\Http\Controllers;

use App\Models\ItemList as ModelsItemList;
use Illuminate\Http\Request;


class ItemList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsItemList::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item_list = new ModelsItemList;
        $item_list->item_name = $request->name ?? '';
        $item_list->item_qty = $request->qty ?? '';
        $item_list->item_description = $request->description ?? '';
        $item_list->item_price = $request->amount ?? 0;
        $item_list->item_old_price = $request->oldPrice ?? '';
        $item_list->item_subs = $request->subs ?? '';
        $item_list->item_location = $request->location ?? '';
        $item_list->item_tags = $request->tag ?? '';
        $item_list->item_isWishlist = $request->isWishlist ?? false;
        $item_list->item_isPending = $request->isPending ?? false;
        $item_list->item_isOverLoad = $request->isOverLoad ?? false;
        $item_list->item_isNew = $request->isNew ?? false;
        $item_list->item_isDisabled = $request->isDisabled ?? false;
        $item_list->save();  
        return ModelsItemList::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsItemList::where('id', $id)->delete();
        return ModelsItemList::all();
    }
}

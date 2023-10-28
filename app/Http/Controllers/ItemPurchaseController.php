<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemPurchaseStoreRequest;
use App\Http\Requests\ItemPurchaseUpdateRequest;
use App\Models\ItemPurchase;
use App\PurchaseItem;
use Illuminate\Http\Request;

class ItemPurchaseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemPurchases = ItemPurchase::all();

        return view('itemPurchase.index', compact('itemPurchases'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('itemPurchase.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ItemPurchase $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ItemPurchase $itemPurchase)
    {
        return view('itemPurchase.show', compact('itemPurchase'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ItemPurchase $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ItemPurchase $itemPurchase)
    {
        return view('itemPurchase.edit', compact('itemPurchase'));
    }

    /**
     * @param \App\Http\Requests\ItemPurchaseUpdateRequest $request
     * @param \App\Models\ItemPurchase $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(ItemPurchaseUpdateRequest $request, ItemPurchase $itemPurchase)
    {
        $itemPurchase->update($request->validated());

        $request->session()->flash('itemPurchase.id', $itemPurchase->id);

        return redirect()->route('itemPurchase.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ItemPurchase $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ItemPurchase $itemPurchase)
    {
        $itemPurchase->delete();

        return redirect()->route('itemPurchase.index');
    }

    /**
     * @param \App\Http\Requests\ItemPurchaseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemPurchaseStoreRequest $request)
    {
        $purchaseItem = PurchaseItem::create($request->validated());

        return redirect()->route('Purchase.index');
    }
}

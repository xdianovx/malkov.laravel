<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Block\StoreRequest;
use App\Http\Requests\Block\UpdateRequest;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $blocks = Block::orderBy('id', 'DESC')->paginate(10);
        return view('admin.blocks.index', compact('blocks', 'user'));
    }

    public function show($block_id)
    {
        $user = Auth::user();
        $item = Block::whereId($block_id)->firstOrFail();
        return view('admin.blocks.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.blocks.create', compact('user'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Block::firstOrCreate($data);

        return redirect()->route('admin.blocks.index')->with('status', 'item-created');
    }
    public function edit($block_id)
    {
        $user = Auth::user();
        $item = Block::whereId($block_id)->firstOrFail();
        return view('admin.blocks.edit', compact('user', 'item',));
    }
    public function update(UpdateRequest $request, $block_id)
    {
        $block = Block::whereId($block_id)->firstOrFail();
        $data = $request->validated();
        $block->update($data);

        return redirect()->route('admin.blocks.index')->with('status', 'item-updated');
    }

    public function destroy($block_id)
    {
        $block = Block::whereId($block_id)->firstOrFail();
        $block->delete();
        return redirect()->route('admin.blocks.index')->with('status', 'item-deleted');
    }

}

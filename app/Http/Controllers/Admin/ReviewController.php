<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Review\StoreRequest;
use App\Http\Requests\Review\UpdateRequest;
use App\Models\Review;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $reviews = Review::orderBy('id', 'DESC')->paginate(10);
        return view('admin.reviews.index', compact('reviews', 'user'));
    }

    public function show($review_id)
    {
        $user = Auth::user();
        $item = Review::whereId($review_id)->firstOrFail();

        return view('admin.reviews.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $specialists = Specialist::all();
        return view('admin.reviews.create', compact('user', 'specialists'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if (!array_key_exists('is_active', $data)) {
            $data['is_active'] = 'off';
          }
        Review::firstOrCreate($data);

        return redirect()->route('admin.reviews.index')->with('status', 'item-created');
    }
    public function edit($review_id)
    {
        $user = Auth::user();
        $specialists = Specialist::all();
        $item = Review::whereId($review_id)->firstOrFail();

        return view('admin.reviews.edit', compact('user', 'item', 'specialists'));
    }
    public function update(UpdateRequest $request, $review_id)
    {
        $review = Review::whereId($review_id)->firstOrFail();
        $data = $request->validated();
        if (!array_key_exists('is_active', $data)) {
            $data['is_active'] = 'off';
          }
        $review->update($data);
        return redirect()->route('admin.reviews.index')->with('status', 'item-updated');
    }

    public function destroy($review_id)
    {
        $review = Review::whereId($review_id)->firstOrFail();
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $reviews = Review::orderBy('id', 'DESC')->paginate(10);
        else :
            $reviews = Review::filter()->paginate(10);
        endif;
        return view('admin.reviews.index', compact('reviews', 'user'));
    }
}

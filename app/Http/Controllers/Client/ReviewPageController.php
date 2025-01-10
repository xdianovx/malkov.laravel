<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\StoreRequest;
use App\Models\Block;
use App\Models\Page;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewPageController extends Controller
{
    public function index()
    {
        $page = Page::whereSlug('otzyvy')->firstOrFail();
        $reviews = Review::where('is_active', 'on')->orderBy('id', 'DESC')->paginate(8)->withQueryString();
        $block_callback_form = Block::whereId(5)->firstOrFail();
        $block_questions = Block::whereId(1)->firstOrFail();
        return view('reviews', compact(
            'reviews',
            'page',
            'block_callback_form',
            'block_questions'
        ));
    }

    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'title' => ['required', 'max:70'],
            'description'=> ['required', 'max:1000'],
            'rating'=> ['numeric', 'max:5']
        ], [
            'title.required' => 'Поле "Имя" обязательно для заполнения',
            'title.max' => 'Поле "Имя" должно быть не более 70 символов',
            'description.required' => 'Поле "Текст отзыва" обязательно для заполнения',
            'description.max' => 'Поле "Текст отзыва" должно быть не более 1000 символов',
            'rating.numeric' => 'Поле "Рейтинг" должно быть числом',
            'rating.max' => 'Поле "Рейтинг" должно быть не более 5'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->messages()]);
        }

        $data = $request->all();
        $data['date'] = date('Y-m-d');
        $data['is_active'] = 'off';
        $data = Review::create($data);
        return response()->json(['status' => 'item-created']);

    }
    // public function show($news_slug)
    // {
    //     $item = Review::whereSlug($news_slug)->firstOrFail();
    //     $reviews = Review::orderBy('id', 'DESC')->take(8)->get();
    //     $block_callback_form = Block::whereId(5)->firstOrFail();
    //     $block_articles_news = Block::whereId(2)->firstOrFail();

    //     return view('news-single', compact(
    //         'item',
    //         'reviews',
    //         'block_callback_form',
    //         'block_articles_news'
    //     ));
    // }
}

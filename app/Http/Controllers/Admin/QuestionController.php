<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreRequest;
use App\Http\Requests\Question\UpdateRequest;
use App\Models\Block;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function show( $block_id, $question_id )
    {
        $user = Auth::user();
        $item = Question::whereId($question_id)->firstOrFail();
        return view('admin.blocks.questions.show', compact('item', 'user'));
    }

    public function create($block_id)
    {
        $user = Auth::user();
        $block = Block::whereId($block_id)->firstOrFail();
        return view('admin.blocks.questions.create', compact('user', 'block'));
    }
    public function store(StoreRequest $request, $block_id)
    {
        $data = $request->validated();
        $block = Block::whereId($block_id)->firstOrFail();

        $block->questions()->create($data);

        return redirect()->route('admin.blocks.show', $block_id)->with('status', 'question-created');
    }
    public function edit($block_id, $question_id)
    {
        $user = Auth::user();
        $block = Block::whereId($block_id)->firstOrFail();
        $item = Question::whereId($question_id)->firstOrFail();
        return view('admin.blocks.questions.edit', compact('user', 'item', 'block'));
    }
    public function update(UpdateRequest $request,$block_id, $question_id)
    {
        $question = Question::whereId($question_id)->firstOrFail();
        $data = $request->validated();

        $question->update($data);
        return redirect()->route('admin.blocks.show', $block_id)->with('status', 'question-updated');
    }

    public function destroy( $block_id, $question_id )
    {
        $question = Question::whereId($question_id)->firstOrFail();
        $question->delete();
        return redirect()->route('admin.blocks.show', $block_id)->with('status', 'question-deleted');
    }
}

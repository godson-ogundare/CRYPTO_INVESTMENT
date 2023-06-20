<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;

class Comments extends Component
{
    public $comments;

    public $newComment;

    public $creator;

    public function mount()
    {
        $initialComments = $comments = Comment::latest()->take(3)->get();
        $this->comments = $initialComments;
    }

    public function updated($field)
    {
        $this->validate([
            'newComment' => 'required | max:50 | min:10',
        ]);
    }

    public function addComment()
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            session()->flash('message', 'You must be logged in to comment.');
            return;
        }

        $this->validate([
            'newComment' => 'required | max:50 | min:10',
        ]);

        $createdComment = Comment::create([
            'body' => $this->newComment,
            'user_id' => Auth::user()->id
        ]);

        // array_unshift($this->comments, [
        //     'creator' => 'Godson Ogundare',
        //     'created_at' => Carbon::now()->diffForHumans(),
        //     'body' => $this->newComment,
        // ]);

        $this->comments->prepend($createdComment);

        $this->newComment = "";

        session()->flash('message', 'Comment added successfullly');
    }

    public function render()
    {
        return view('livewire.comments');
    }
}

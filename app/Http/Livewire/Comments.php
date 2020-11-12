<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Comment;
use Session;

class Comments extends Component
{
    public $comments;

    public $newComment;
    public $comment_id; 
    public $updateComment;
    public $updateMode = false;


    public function mount(){
        $initialComments = Comment::latest()->get();
        $this->comments = $initialComments;
    }

    public function addComment(){
       
        $this->validate([
            'newComment' => 'required|min:6'
        ]);
        
        $createdComment = Comment::create([
            'comments' => $this->newComment, 'user_id' => 1
        ]);

        $this->comments->prepend($createdComment);
        $this->newComment = "";

        session()->flash('message', 'Comment Added successfully!');
    }

    public function remove($commentId){
        $comment = Comment::find($commentId);
        $comment->delete();
        $this->comments = $this->comments->except($commentId);

        session()->flash('message', 'Comment Deleted successfully!');
    }

    public function edit($id){
        $fcomment = Comment::findOrFail($id);
        $this->comment_id = $id;
        $this->updateComment = $fcomment->comments;
        $this->updateMode = true;
    }

    public function mComment(){
        $ucomment = Comment::find($this->comment_id);
        $ucomment->update([
            'comments' => $this->updateComment,
            'user_id' => 1
        ]);
        $this->updateMode = false;
        session()->flash('message', 'Comment Updated Successfully.');
        $this->updateComment = "";
    }

    public function render(){
        return view('livewire.comments');
    }
}

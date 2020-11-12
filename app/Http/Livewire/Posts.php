<?php

namespace App\Http\Livewire;

use App\Http\Livewire\helpers\PostsHelper;
use Livewire\Component;
use App\Post;

class Posts extends Component
{
    public $code;
    public $posts, $title, $body, $post_id;
    public $updateMode = false;
    public $searchMode = false;
    public $items = [];

    public function mount(){

    }
    public function render(){
        $this->posts = Post::all();
        return view('livewire.posts');
    }
    public function cancel(){
        $this->updateMode = false;
        $this->resetInputFields();
        $this->searchMode = false;
    }
    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
        $this->post_id = '';
        $this->code = '';
    }

    public function foo(){
        $p = '%' .$this->code. '%';
        $d = Post::where('id', 'like', $p)->first();
        if(!empty($d)){
            $this->searchMode = true;
            $this->post_id = $d->id;
            $this->title = $d->title;
            $this->body = $d->body;
        }else{
            session()->flash('message_error', 'No post found with this barcode!');
        }
    }

    public function addItem(){
        $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $helper = new PostsHelper();
        $helper->title = $this->title;
        $helper->body = $this->body;
        $helper->post_id = $this->post_id;
        array_push($this->items, (array)$helper);
        $this->resetInputFields();
        $this->searchMode = false;
    }

    public function store(){
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create($validatedDate);
        session()->flash('message', 'Post Created Successfully.');
        $this->resetInputFields();
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->updateMode = true;
    }

    public function update(){
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id){
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function remove($id){

        foreach ($this->items as $key => $val){
            if ($val['post_id'] == $id) {
                unset($this->items[$key]);
            }
        }

        session()->flash('message', 'Item Deleted successfully!');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    public $record, $comment, $hotel_id, $rate;

    public function mount($id){
        $this->record = Hotel::findOrFail($id);
        $this->hotel_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.comment');
    }

    private function resetInput(){
        $this->comment = null;
        $this->hotel_id = null;
        $this->rate = null;
        $this->ip = null;
    }

    public function store(){
        $this->validate([
            'comment' => 'required|min:10',
            'rate' => 'required'
        ]);

        \App\Models\Comment::create([
            'hotel_id' => $this->hotel_id,
            'user_id' => Auth::id(),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'rate' => $this->rate,
            'comment' => $this->comment
        ]);

        session()->flash('message','Comment Send Successfully');
        $this->resetInput();
    }
}

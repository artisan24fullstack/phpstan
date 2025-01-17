<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class PostComments extends Component
{
    use WithPagination;

    public Post $post;
    #[Rule('required|min:3|max:200')]
    public string $comment;

    public function postComment(){

        if(auth()->guest()){
            return ;
        }
        $this->validateOnly('comment');

        $this->post->comments()->create([
            'comment'=> $this->comment,
            'user_id'=> auth()->id()
        ]);

        $this->reset('comment');
    }

    #[Computed()]
    public function comments(){

        /**
         * select * from "users" where "users"."id" = 102 limit 1
         * select * from "users" where "users"."id" = 2 limit 1
         * select * from "users" where "users"."id" = 101 limit 1
         * select * from "users" where "users"."id" = 101 limit 1
         *
         * select * from "users" where "users"."id" in (2, 101, 102)
         */
        //return $this?->post->comments()->with('user')->latest()->paginate(5);
        // phpcs:disable LaravelStan.NullSafeOperatorUsage
        return $this->post->comments()->with('user')->latest()->paginate(5);
        // phpcs:enable LaravelStan.NullSafeOperatorUsage

    }

    public function render()
    {
        return view('livewire.post-comments');
    }
}

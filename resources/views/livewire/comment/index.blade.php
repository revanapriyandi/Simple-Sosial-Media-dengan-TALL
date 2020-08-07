<div>
    @if($status->comments_count)
    <div class="mb-5 ml-5 mr-5 -mt-8 border rounded-lg bg-cool-gray-50 border-cool-gray-200">
        @foreach($comments as $comment)
        <div class="flex p-5">
            <div class="flex-shrink-0 mr-3">
                <img class="object-cover object-center w-10 h-10 rounded-full" src="{{ $comment->user->gravatar() }}">
            </div>
            <div>
                <div class="font-semibold">{{ $comment->user->name }}</div>
                <div class="mb-2 text-sm text-cool-gray-600">{{ $comment->created_at->diffForHumans() }}</div>
                <div class="leading-relaxed text-cool-gray-700">{!! nl2br($comment->body) !!}</div>
                <div class="flex items-center mt-2 text-sm text-cool-gray-600">
                    <div class="mr-3">
                        {{ $comment->children_count }} {{ Str::plural('Reply', $comment->children_count) }}
                    </div>
                    <button onClick="window.location.href='#showReplyForm'"
                        wire:click.prevent="showReplyForm({{ $comment->id }})" class="focus:outline-none">Add
                        reply</button>
                </div>
            </div>
        </div>

        @if($comment->children_count)
        <div class="mb-5 ml-5">
            @foreach($comment->children as $comment)
            <div class="flex py-2 pl-10">
                <div class="flex-shrink-0 mr-3">
                    <img class="object-cover object-center w-10 h-10 rounded-full"
                        src="{{ $comment->user->gravatar() }}">
                </div>
                <div>
                    <div class="font-semibold">{{ $comment->user->name }}</div>
                    <div class="mb-2 text-sm text-cool-gray-600">{{ $comment->created_at->diffForHumans() }}</div>
                    <div class="leading-relaxed text-cool-gray-700">{!! nl2br($comment->body) !!}</div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        @endforeach
        <div id="showReplyForm">
            <form wire:submit.prevent="reply">
                <textarea wire:model="body"
                    class="w-full bg-white border-0 border-t border-gray-200 rounded-t-none rounded-b-lg resize-none form-textarea focus:shadow-none focus:border-cool-gray-200 focus:outline-none"
                    placeholder="Reply the comment here . . ."></textarea>
                <button type="submit"
                    class="w-full py-2 text-center text-white bg-blue-500 rounded-b-lg hover:bg-blue-600">Reply</button>
            </form>
        </div>
    </div>
    @endif
</div>

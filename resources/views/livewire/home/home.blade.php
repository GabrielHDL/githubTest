<div>
    <input class="mt-20 rounded-full ml-4" wire:model.live="search" type="text">
    
    @forelse ($posts as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->body}}</p>
        <br/>
    @empty
        
    @endforelse
</div>

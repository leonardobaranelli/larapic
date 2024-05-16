<div class="card pub_image">
    <div class="card-header">

        @if($image->user->image)
        <div class="avatar-container">        
            <img src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" alt="image" class="avatar" />
        </div>
        @endif

        <div class="data-user">
            <a href="{{ route('profile', ['id' => $image->user->id]) }}">
                {{ $image->user->name.' '.$image->user->surname }}
                <span class="nickname">
                    {{' | @'.$image->user->nick }}
                </span>
            </a>    
        </div>
    </div>
    <div class="card-body">                            
        <div class="image-container">
            <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" alt="" />   
        </div>                        
        <div class="description">
            <span class="nickname">{{ '@'.$image->user->nick }}</span>
            <span class="nickname date">{{' | '.app('formatTime')->LongTimeFilter($image->created_at) }}</span>
            
            <p>{{ $image->description }}</p>
        </div>

        <div class="likes">                            
            @php $user_like = false; @endphp
            @foreach($image->likes as $like)
                @if($like->user->id == Auth::user()->id)
                    @php $user_like = true; @endphp
                @endif
            @endforeach    

            @if($user_like)
                <img src="{{ asset('img/heart-red.png') }}" data-id="{{ $image->id }}" alt="like" class="btn-dislike">                                
            @else    
                <img src="{{ asset('img/heart-black.png') }}" data-id="{{ $image->id }}" alt="like" class="btn-like">
            @endif
            
            <span class="number_likes">{{ count($image->likes) }}</span>
        </div>
        
        <div class="comments">
            <a href="{{ route('image.detail', ['id' => $image->id]) }}" class="btn btn-sm btn-warning btn-comments">
                Comments ({{count($image->comments)}})
            </a>
        </div>
    </div>
</div>
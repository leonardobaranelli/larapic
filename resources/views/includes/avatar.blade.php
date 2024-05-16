@if(Auth::user()->image)
    <div class="avatar-container">        
        <img src="{{ route('user.avatar', ['filename' => Auth::user()->image]) }}" alt="image" class="avatar">                                
    </div>
@endif
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>People</h1>
            <form method="GET" id="search-form" action="{{ route('user.index') }}">
                <div class="search-container">
                    <div class="col-md-8 input-search">                    
                        <input type="text" id="search-input" name="search" class="form-control" />                    
                    </div>
                    <div class="col-md-8 col btn-search">
                        <input type="submit" value="Search" class="btn btn-success">
                    </div>
                </div>
            </form>

            @foreach($users as $user)
                <hr>
                <div class="profile-user">                
                    @if($user->image)
                        <div class="avatar-container">        
                            <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="image" class="avatar" />
                        </div>
                    @endif               
                    
                    <div class="user-info">
                        <h2>{{'@'.$user->nick }}</h2>
                        <h3>{{ $user->name.' '.$user->surname }}</h3>
                        <p>{{'Joined '.app('formatTime')->LongTimeFilter($user->created_at) }}</p>
                        <a href="{{ route('profile', ['id' => $user->id]) }}" class="btn btn-success">See profile</a>
                    </div>
                </div>               
            @endforeach

            <div class="clearfix">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

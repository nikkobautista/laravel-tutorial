@layout('layouts/main')

@section('navigation')
@parent
<li><a href="user/logout">Logout</a></li>
@endsection

@section('content')
<div class="row">
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Followers</li>
            </ul>
            <div style="margin-left: 10px">
                @forelse (Auth::user()->followers as $follower)
                    <div style="float: left; width: 30px; margin: 0px 3px 3px 5px;">
                        <img src="http://gravatar.com/avatar/{{ md5(strtolower(trim($follower->email))) }}?s=25&d=retro" alt="Follower" title="{{ $follower->email }}" />
                    </div>
                @empty
                    <div>You have no followers.</div>
                @endforelse
                <div style="clear: both"></div>
            </div>
            
            <ul class="nav nav-list">
                <li class="nav-header">Following</li>
            </ul>
            <div style="margin-left: 10px">
                @forelse (Auth::user()->following as $following)
                    <div style="float: left; width: 30px; margin: 0px 3px 3px 5px;">
                        <img src="http://gravatar.com/avatar/{{ md5(strtolower(trim($following->email))) }}?s=25&d=retro" alt="Following" title="{{ $following->email }}" />
                    </div>
                @empty
                    <div>You are not following anybody.</div>
                @endforelse
                <div style="clear: both"></div>
            </div>
        </div>
    </div>
    <div class="span9">
        <h1>Your Photos</h1>
        @forelse ($photos as $photo)
        <div class="well" style="text-align: center">
            <img src="{{ $photo->location }}" alt="{{ $photo->description }}" title="{{ $photo->description }}" />
            <p>{{ $photo->description }}</p>
        </div>
        @empty
        <div class="alert alert-info">
            <h4 class="alert-heading">Awww!</h4>
            <p>Seems like you don't have any photos yet. <a href="#">Upload a new one?</a></p>
        </div>
        @endforelse
    </div>
</div>
@endsection
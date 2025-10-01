@extends('layouts.app')

@section('content')

    <div class="page-content">

        <h2 class="page-name">Followers</h2>

        <div class="follower-list">
            @if ($followers->isEmpty())
                <p class="text-danger bolder">No Followers</p>

            @else
                @foreach ($followers as $follower)
                    <div class="follower-card">
                        <div class="follower-card-img">
                            <img src="{{asset('asset/img/about.jpg')}}" alt="{{$follower->username}}">
                        </div>
                        <div class="follower-card-stats">
                            <span class="username">{{ $follower->username }}</span>

                            <div class="profile-stats">
                                <div class="stat-item" id="projects">
                                    <span class="stat-count">25</span>
                                    <span class="stat-label">Projects</span>
                                </div>
                                <div class="stat-item" id="following">
                                    <span class="stat-count">80</span>
                                    <span class="stat-label">Following</span>
                                </div>
                            </div>

                            <div class="follower-card-actions-btn">


                                <div class="follower-toogle-button">

                                    <form action="{{route('tooglefollow', $follower->username)}}" method="POST">
                                        @csrf
                                        <button type="submit" id="btn-toogle-follow">
                                            @if(auth()->user()->following->contains($follower->id))
                                                <span>
                                                    Unfollow
                                                </span>
                                            @else
                                                <span>
                                                    Follow
                                                </span>
                                            @endif
                                        </button>
                                    </form>
                                </div>

                                <div class="view-follower-btn">
                                    <a href="#"><span>VisitProfile</span></a>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach

            @endif
        </div>

    </div>

@endsection

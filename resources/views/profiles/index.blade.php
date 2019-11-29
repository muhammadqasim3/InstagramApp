@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5"><img src="/images/fcc-main-img.png" class="rounded-circle" style="height: 200px;">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <h4><a href="#" class="btn btn-primary">Add Post</a></h4>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>245</strong>posts</div>
                    <div class="pr-5"><strong>34.7k</strong>followers</div>
                    <div class="pr-5"><strong>232</strong>following</div>
                </div>
                <div class="font-weight-bold pt-4">{{$user->profile->title }}</div>
                <div>{{$user->profile->description }}</div>
                <div><a href="www.freecodecamp.org" target="_blank">{{$user->profile->url }}</a></div>
            </div>
        </div>
        <hr>
        <div class="row pt-4">
            <div class="col-md-4"><img
                        src="https://instagram.fkhi11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.117.937.937a/s640x640/71233631_155827915641506_3528218586857808024_n.jpg?_nc_ht=instagram.fkhi11-1.fna.fbcdn.net&_nc_cat=102&oh=b3c11780b0f22a65345431a760b1108e&oe=5E6CBBC3"
                        alt="" class="w-100"></div>
            <div class="col-md-4"><img
                        src="https://instagram.fkhi11-1.fna.fbcdn.net/v/t51.2885-15/e35/c127.0.496.496a/71842560_179815429869179_5569562397308320476_n.jpg?_nc_ht=instagram.fkhi11-1.fna.fbcdn.net&_nc_cat=111&oh=2de5125fcca3b3e25ccd82aab55dc695&oe=5E6CEDCC"
                        alt="" class="w-100"></div>
            <div class="col-md-4"><img
                        src="https://instagram.fkhi11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/72198998_839595896436498_2648248194530244572_n.jpg?_nc_ht=instagram.fkhi11-1.fna.fbcdn.net&_nc_cat=106&oh=d66fc60d9d04485508f66ba16f3039b3&oe=5E8C7F8F"
                        alt="" class="w-100"></div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                {{ Auth::user()->name }}<br>
                    {{ Auth::user()->email }}<br>
                    {{ Auth::user()->type }}
                </div>
                <div class="card-body">
                    <p>image</p>
                    @if(Auth::user()->image)
                                 <img class="image rounded-circle" src="{{asset('/storage/images/'.auth()->user()->image)}}" alt="profile_image" 
                                 style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
                                @endif
                    <form action="{{route('admin.home')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

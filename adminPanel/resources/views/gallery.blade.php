@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Image List of companies') }}</div>

                <div class="card-body">
                    <!-- Admin is able to view images that are stored within public folder -->
                        <!--======================================= Image Field ================================================-->
                        <ul>
                        @foreach ($images as $image)
                            <li style="width:80px;display:inline-block;margin:5px 0px">
                                <p>{{ $image->getFilename() }}</p>
                                <img src="{{ asset('images/' . $image->getFilename()) }}" width="50" height="50">
                            </li>
                        @endforeach
                        </ul>
                        <!--====================================================================================================-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.default')
@section('title') 404 NOT FOUND
@endsection
    <section class="home-section home-parallax home-fade home-full-height bg-dark bg-dark-30" id="home" data-background="{{assets('images/404notfoundimage.jpg')}}">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-4">Error 404</div>
                <div class="font-alt">The requested URL was not found on this server.<br/>That is all we know.
                </div>
                <div class="font-alt mt-30"><a class="btn btn-border-w btn-round" href="{{url('home')}}">Back to home page</a></div>
            </div>
        </div>
    </section>
@section('footer')

@endsection

@section('foot')

@endsection

@extends('adminView.default')
@section('title')
    ANASAYFA
@endsection
@section('content')
    <div class="box-">
        <h1>
            Settings
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">

        <div class="col-sm-8">
            <form id="settingsForm" role="form" method="post" action="">
                <div class="form-group">
                    <label for="websitename">Name</label>
                    <input class="form-control" type="text" id="websitename" name="websitename" placeholder="Site Adı"/>
                </div>
                <div class="form-group">
                    <label for="title">Site Title</label>
                    <input class="form-control" type="text" id="title" name="title"
                           placeholder="Site Title"/>
                </div>
                <div class="form-group">
                    <label for="description">Site Description</label>
                    <input class="form-control" type="text" id="description" name="description"
                           placeholder="Site Description"/>
                </div>
                <div class="form-group">
                    <label for="keywords">Site Keywords</label>
                    <input class="form-control" type="text" id="keywords" name="keywords"
                           placeholder="Site Keywords"/>
                </div>
                <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">GÖNDER
                    </button>
                </div>
            </form>
            <div class="ajax-response" id="settingsFormResponse"></div>
        </div>
    </div>




    {{--            <form action="" method="post" class="form label">--}}
    {{--                <ul>--}}
    {{--                    <li>--}}
    {{--                        <label>Site Title</label>--}}
    {{--                        <div class="form-content">--}}
    {{--                            <input type="text" name="websitename">--}}
    {{--                        </div>--}}
    {{--                    </li>--}}


    {{--                    <li>--}}
    {{--                        <label>Site Description</label>--}}
    {{--                        <div class="form-content">--}}
    {{--                            <input type="text" name="description">--}}
    {{--                        </div>--}}
    {{--                    </li>--}}

    {{--                    <li>--}}
    {{--                        <label>Site Keywords</label>--}}
    {{--                        <div class="form-content">--}}
    {{--                            <input type="text" name="keywords">--}}
    {{--                        </div>--}}
    {{--                    </li>--}}

    {{--                    <li class="submit">--}}
    {{--                        <input type="hidden" name="submit" value="1">--}}
    {{--                        <button type="submit">Kaydet</button>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </form>--}}
    </div>
@endsection



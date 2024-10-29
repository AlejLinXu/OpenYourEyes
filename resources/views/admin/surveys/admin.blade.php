@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="list-group">
                <!--<a href="{{ url('admin/translators') }}" class="list-group-item list-group-item-action disabled">Translators</a>-->
                
                <a href="" class="list-group-item list-group-item-action ">Surveys</a>
                <!--  <a href="{{ url('admin/images') }}" class="list-group-item list-group-item-action ">Images</a>-->
                
                <!--  <a href="#" class="list-group-item list-group-item-action">Map</a>
                <a href="#" class="list-group-item list-group-item-action">Digital Book</a>-->
            </div>
        </div>
        <div class="col-md-10">


            @yield('admin_panel')


        </div>

    </div>
</div>
@endsection

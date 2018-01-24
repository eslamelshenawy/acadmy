@extends('backEnd.layout')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3>{{ trans('backLang.courses') }}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                    <a href="">{{ trans('backLang.courses') }}</a>
                </small>
            </div>
            <div class="row p-a">
                <div class="col-sm-12">
                    <a class="btn btn-fw primary" href="{{url('admin')}}/create/Courses">
                        <i class="material-icons">&#xe02e;</i>
                        &nbsp; {{ trans('backLang.addcourses') }}</a>
                </div>
            </div>
            @if($WebmasterSections->total() == 0)
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center light ">
                            {{ trans('backLang.noData') }}
                        </div>
                    </div>
                </div>
            @endif


        </div>
    </div>
@endsection
@section('footerInclude')

@endsection

@extends('layouts.master')
@section('css')

@section('title')
    {{trans('Grades-trans.title_page')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{trans('Grades-trans.Grades')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{trans('Grades-trans.Grades')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
   <!-- main body -->
   <div class="row">
    <div class="col-xl-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered p-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('Grades-trans.Name') }}</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Home</td>
                    <td>Home</td>
                    <td>Home</td>
                    <td>Home</td>
                    <td>Home</td>
                    <td>Home</td>
                </tr>


            </tbody>
         </table>
        </div>
        </div>
      </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection

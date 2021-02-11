@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Изменить Цены
    <small>приятные слова..</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Изменить Цены</h3>
    </div>
    @include('admin.errors')
    {{Form::open(['route' => ['prices.update', $price->id], 'method' => 'put'])}}
    <div class="box-body">
        <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$price->title}}">
        </div>
        <div class="form-group">
            <label>Сервис</label>
            {{Form::select('service_id', 
            $services,
            $price->service->id, 
            ['placeholder' => 'выберите сервис', 'class' => 'form-control select2'])
            }}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Цена</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" value="{{$price->price}}">
        </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="{{route('prices.index')}}" class="btn btn-default">Назад</a>
        <button class="btn btn-success pull-right">Изменить</button>
    </div>
    <!-- /.box-footer-->
    {{Form::close()}}
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
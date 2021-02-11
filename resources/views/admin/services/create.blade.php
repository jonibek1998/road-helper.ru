@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Добавить категорию
    <small>приятные слова..</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Добавляем категорию</h3>
    </div>
    @include('admin.errors')

    {{Form::open(['route' => 'services.store', 'files' => true])}}
    <div class="box-body">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Цена</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Лицевая Иконка</label>
            <input type="file" name="icon" id="exampleInputFile">

        </div>
        <div class="form-group">
            <label for="exampleInputFile">Обложка</label>
            <input type="file" name="image" id="exampleInputFile">

        </div>
    </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="{{route('services.index')}}" class="btn btn-default">Назад</a>
        <button class="btn btn-success pull-right">Добавить</button>
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
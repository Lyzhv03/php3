@extends('layout.master')
@section('title' , 'Create Books')
@section('content')

    <div class="container">
        <h1>Thêm mới sách</h1>
        <form action="{{ route('book.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Title</label>
              <input type="text" class="form-control" id="" name="title" >
            </div>
            <div class="mb-3">
              <label for="" class="form-label"> URL Thumbnail</label>
              <input type="text" class="form-control" id="" name="thumbnail" >
            </div>
            <div class="row">
            <div class="col mb-3">
              <label for="" class="form-label">Author</label>
              <input type="text" class="form-control" id="" name="author" >
            </div>

            <div class="col mb-3">
              <label for="" class="form-label">Publisher</label>
              <input type="text" class="form-control" id="" name="publisher" >
            </div>
          </div>
            <div class="mb-3">
              <label for="" class="form-label">Publication</label>
              <input type="date" class="form-control" id="" name="publication" >
            </div>
            <div class="row">
            <div class="col mb-3">
              <label for="" class="form-label">Price</label>
              <input type="number" step="0.1" class="form-control" id="" name="price" >
            </div>
            <div class="col mb-3">
              <label for="" class="form-label">Quantity</label>
              <input type="number"  class="form-control" id="" name="quantity" >
            </div>
          </div>
            <div class="mb-3">
              <label for="" class="form-label">Thể loại</label>
              <select name="cate_id" class="form-control" id="">
                @foreach ($categories as $item )
                    <option value="{{ $item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{route('book.index')}}" class="btn btn-primary"> Quay lại</a>
          </form>
    </div>

@endsection

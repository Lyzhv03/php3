@extends('layout.master')
@section('title', 'Edit Books')
@section('content')

    <div class="container">
        <h1>Sửa sách</h1>
        <form action="{{ route('book.update', $book->id) }}" method="post">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $book->id }}">
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" id="" name="title" value="{{ $book->title }}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> URL Thumbnail</label>
                <input type="text" class="form-control" id="" name="thumbnail" value="{{ $book->thumbnail }}">
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="" class="form-label">Author</label>
                    <input type="text" class="form-control" id="" name="author" value="{{ $book->author }}">
                </div>

                <div class="col mb-3">
                    <label for="" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="" name="publisher"
                        value="{{ $book->publisher }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publication</label>
                <input type="date" class="form-control" id="" name="publication"
                    value="{{ $book->publication }}">
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" step="0.1" class="form-control" id="" name="price"
                        value="{{ $book->price }}">
                </div>

                <div class="col mb-3">
                    <label for="" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="" name="quantity" value="{{ $book->quantity }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Thể loại</label>
                <select name="cate_id" class="form-control" id="">
                    @foreach ($cate as $item)
                        <option value="{{ $item->id }}" @if ($item->id === $book->cate_id) selected @endif>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('book.index') }}" class="btn btn-primary"> Quay lại</a>
        </form>
    </div>

@endsection

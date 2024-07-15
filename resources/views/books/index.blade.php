@extends('layout.master')
@section('title' , 'List Books')
@section('content')

<h1> Danh sách Book</h1>
<a href="{{ route('book.create') }}" class="btn btn-primary">Thêm sách</a>
<table class="table">
    <thead>
      <tr  class="table-primary">
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Thumbnail</th>
        <th scope="col">Author</th>
        <th scope="col">Publisher</th>
        <th scope="col">Publication</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Name</th>
        <th scope="col">Acction</th>
      </tr>
    </thead>
    @foreach ($books as $item )

    <tbody>
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td><img src="{{$item->thumbnail}}" alt="" width="100" height="50"></td>
        <td>{{$item->author}}</td>
        <td>{{$item->publisher}}</td>
        <td>{{$item->publication}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->name}}</td>
        <td>
            <a href="{{route('book.edit',$item->id)}}"class='btn btn-primary'>Sửa</a>
            <form action="{{route('book.destroy',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
            </form>
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
@endsection

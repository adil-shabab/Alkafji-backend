@extends('admin/base')
@section('title')
Messages | Hiraya
@endsection
@section('content')

<div class="row mt-5 px-5">
@foreach ($messages as $data)
<form action="{{url('account/delete-message',$data->id)}}" method="POST" class="mt-3 col-md-4 col-12 px-3">
   <div class="msg_box">
        @csrf
        @method('DELETE')
        <p>NAME: {{$data->name}}</p>
        <p>EMAIL: {{$data->email}}</p>
        <p>PHONE: {{$data->number}}</p>
        <p class="mt-4">MESSAGE</p>
        <p class="msg_txt">{{$data->content}}</p>
        <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </div>
</form>
@endforeach
</div>

<script>
  active = document.getElementById('messages')
  active.classList.add('mm-active')
</script>
@endsection

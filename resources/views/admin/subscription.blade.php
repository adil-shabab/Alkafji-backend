@extends('admin/base')
@section('title')
Subscription | Alkhafji
@endsection
@section('content')
<div class="row mt-5 px-5">
@foreach ($subscription as $data)
<form action="{{url('account/delete-subscription',$data->id)}}" method="POST" class="mt-3 col-md-4 col-12 img_gl_box px-3">
    <div class="inner__box" style="background: lightblue; padding: 25px; font-size: 17px;">
        <p class="name_email">Name: {{$data->name}}</p>
        <p class="name_email">Email: {{$data->email}}</p>
    </div>
    @csrf
    @method('DELETE')

    <button style="position: absolute; left: unset; top: 16px; right: 30px; background: white; color: black; border: none; padding: 10px 15px; border-radius: 50%;" type="submit"><i class="fa-solid fa-trash"></i></button>
</form>
@endforeach
</div>


<script>
  active = document.getElementById('subscription_page')
  active.classList.add('mm-active')
</script>
@endsection

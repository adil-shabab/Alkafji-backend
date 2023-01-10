@extends('admin/base')
@section('title')
Messages | Form
@endsection
@section('content')
<form method="POST" action="{{ url('account/add-message') }}" enctype="multipart/form-data" class="row mt-5 px-5">
    @csrf
    <input type="text" name="name" placeholder="Enter your Name" class="form-control">
    <input type="email" name="email" placeholder="Enter your Email" class="form-control">
    <input type="number" name="number" placeholder="Enter your Number" class="form-control">
    <input type="text" name="content" placeholder="Enter your Message" class="form-control">


    <button type="submit" class="btn btn-primary px-5 py-3" >Submit</button>
</form>
</div>

<script>
  active = document.getElementById('gallery_page')
  active.classList.add('mm-active')
</script>
@endsection

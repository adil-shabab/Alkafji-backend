@extends('admin/base')
@section('title')
Dashboard | Alkafji
@endsection
@section('content')

<div class="row mb-5">
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2 style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Paper Products</h2>
            <span style="font-size:40px; font-weight:bold">{{$paper}}</span>
        </div>
    </div>
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Plastic Products</h2>
            <span style="font-size:40px; font-weight:bold">{{$plastic}}</span>
        </div>
    </div>
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Foam Products</h2>
            <span style="font-size:40px; font-weight:bold">{{$foam}}</span>
        </div>
    </div>
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Aluminium Products</h2>
            <span style="font-size:40px; font-weight:bold">{{$aluminium}}</span>
        </div>
    </div>
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Hygiene & Protection Products</h2>
            <span style="font-size:40px; font-weight:bold">{{$protection}}</span>
        </div>
    </div>
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Food Products</h2>
            <span style="font-size:40px; font-weight:bold">{{$food}}</span>
        </div>
    </div>
    <div class="mt-3 col-4">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px; min-height: 198px">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Messages</h2>
            <span style="font-size:40px; font-weight:bold">{{$contact}}</span>
        </div>
    </div>
</div>

<script>
  active = document.getElementById('dashboard')
  active.classList.add('mm-active')
</script>
@endsection

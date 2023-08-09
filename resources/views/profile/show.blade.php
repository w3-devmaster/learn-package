@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>แก้ไขข้อมูลบัญชี</h4>
                <hr>
                <img class="rounded-circle" src="{{ $profile->getFirstMedia('profile-image')?->getFullUrl('preview') }}" alt="Avatar">
               <p> ชื่อ : {{ $profile->firstname }}</p>
               <p> นามสกุล : {{ $profile->lastname }}</p>
               <p> อายุ : {{ $profile->age }} ปี</p>
               <hr>
               <img class="img-fluid" src="{{ $profile->getFirstMediaUrl('profile-image') ?? '' }}" alt="Avatar">
            </div>
        </div>
    </div>
@endsection

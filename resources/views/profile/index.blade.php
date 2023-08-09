@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row m-0">
            <div class="col-12 mt-3">
                <h4><i class="far fa-fw fa-user-edit mr-2"></i> แก้ไขข้อมูลบัญชี</h4>
                <hr>
                {{-- <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </form> --}}
                {!! Form::open(['route' => 'profile.store','method' => 'post','files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('firstname','ชื่อ') !!}
                    {!! Form::text('firstname',old('firstname'),['class' => 'form-control form-control-border']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('lastname','นามสกุล') !!}
                    {!! Form::text('lastname',old('lastname'),['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('age','อายุ') !!}
                    {!! Form::number('age',old('age'),['class' => 'form-control','min' => 1]) !!}
                </div>
                {{-- <div class="form-group">
                    {!! Form::label('gender','เพศ') !!}
                    {!! Form::select('gender',[0 => 'ชาย',1 => 'หญิง'],1,['class' => 'form-control']) !!}
                </div> --}}
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            {!! Form::file('avatar',['class' => 'custom-file-input','id' => 'exampleInputFile']) !!}
                            {!! Form::label('avatar','เลือกไฟล์',['class' => 'custom-file-label']) !!}
                        </div>
                    </div>
                </div>

                {!! Form::submit('บันทึกข้อมูล',['class' => 'btn btn-outline-success btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

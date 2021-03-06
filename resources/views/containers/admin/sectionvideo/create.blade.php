@extends('layouts.app')

@section('navbar')
    @include('../components.admin.navbar')
@endsection

@section('main-sidebar')
    @include('../components.admin.main-sidebar')
@endsection

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

        @include('inc.messages')

        <div class="card-header">
        <div class="row">
            <div class="col-md-8">
            <h3 class="card-title">Add a videos</h3>
            </div>
            
            <div class="col-md-4">
                    <a class="btn btn-warning"href="/admin/sections/create" >
                    <i class="fas fa-plus-circle"></i> Back 
                    </a>
            </div>
        </div>
        </div>

        <div class="card">
         <div class="card-body ">
            {!! Form::open(['action' => 'App\Http\Controllers\Admin\SectionVideoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                
               
                <div class="form-group">

                    <label for="section-content">Select Section</label>

                        <div class="row">
                            <div class="col-md-8">
                                <select name="section_id" class="form-control">
                                
                                @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->name}}</option>
                                @endforeach

                                </select>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-warning"href="/admin/sections/create" >
                                <i class="fas fa-plus-circle"></i> Create Section
                                </a>
                            </div>
                        </div>
                    
                        {{Form::label('video_name', 'Video File')}}<br>
                   
                   <div class="form-group">
                   <input type="file" class="form-control-file" name="video_name[]" multiple>
                   </div>

                   



               {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
           {!! Form::close() !!}
           </div>

                </div>
                

                  

        </div>
                

        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection


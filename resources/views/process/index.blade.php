@extends('layouts.app')

@section('title', 'Process Invitations')
@section('content')
       <div class="container">
        <div class="row  shadow-sm my-3 mx-auto bg-white rounded" style="min-height:80vh">
            <form action="" class="col-12 p-3">
                <div class="form-group">
                    <label for="school">Name of school/institution</label>
                    <input type="text" class="form-control" placeholder="Name of the school" name="school" required>  
                </div>
                <div class="form-group">
                    <label for="names">Student Names <small>Comma separated</small></label>
                    <textarea name="names" id="" cols="30" rows="10" class="form-control" placeholder="Enter student Names separated by commas"></textarea>
                </div>

                <h4 class="text-center mx-auto w-100">Or</h4>
                <div class="row">
                    <div class="col-9 mx-auto my-3">
                        <button class="btn btn-primary py-4 btn-block mt-4" type="button" style="border-radius: 40px;" data-target="#uploadCsv" data-toggle="modal">Upload CSV</button>
                    </div>
                </div>
                @include('process.partials.upload')
            </form>
        </div>
    </div>
@endsection
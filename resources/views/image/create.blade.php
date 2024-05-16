@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Upload new image
                </div>
                
                <div class="card-body">
                    <form action="{{ route('image.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf                        
                        <div class="row mb-3">
                            <label for="image_path" class="col-md-3 col-form-label" style="text-align: right;">Image</label>

                            <div class="col-md-7">
                                <input id="image_path" type="file" name='image_path' class="form-control {{ $errors->has('image_path') ? 'is-invalid' : '' }}" required />

                                @if($errors->has('image_path'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-3 col-form-label" style="text-align: right;">Description</label>
                            
                            <div class="col-md-7">
                                <textarea id="description" name='description' class="form-control" {{ $errors->has('description') ? 'is-invalid' : '' }} required ></textarea>

                                @if($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" value="Upload image">
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
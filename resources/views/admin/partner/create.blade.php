@extends('admin.layout')

@section('title', __('shard.create'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.create-partner') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.partner.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name') }}"
                                        name="name" class="form-control" value="{{ old('name') }}">
                                        <x-error-form name="name"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name_ar') }}"
                                        name="name_ar" class="form-control" value="{{ old('name_ar') }}">
                                        <x-error-form name="name_ar"></x-error-form>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="custom-file form-group">
                                    <label for="">{{ __('shard.image') }}</label>
                                    <input type="file" id="example-fileinput" name="image" class="form-control"
                                        value="{{ old('title') }}">
                                        <x-error-form name="image"></x-error-form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href=""
                                class="btn btn-primary">{{ __('shard.add') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

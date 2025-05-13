@extends('admin.layout')

@section('title', __('shard.edit'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.edit-service') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.service.update', ['service' => $service]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.title') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.title') }}"
                                        name="title" class="form-control" value="{{ $service->title }}">
                                    <x-error-form name="title"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.title_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.title_ar') }}"
                                        name="title_ar" class="form-control" value="{{ $service->title_ar }}">
                                    <x-error-form name="title_ar"></x-error-form>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.icon') }}</label>
                                    <input type="text" id="icon" placeholder="{{ __('shard.icon') }}"
                                        class="form-control" name="icon" value="{{ $service->icon }}">
                                    <x-error-form name="icon"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('shard.description') }}">{{ $service->description }}</textarea>
                                    <x-error-form name="description"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description_ar') }}</label>
                                    <textarea name="description_ar" class="form-control" placeholder="{{ __('shard.description_ar') }}">{{ $service->description_ar }}</textarea>
                                    <x-error-form name="description_ar"></x-error-form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href=""
                                class="btn btn-primary">{{ __('shard.edit-service') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

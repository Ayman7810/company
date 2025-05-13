@extends('admin.layout')

@section('title', __('shard.show-service'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.show-service') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.title') }}</label>
                                <input type="text" id="simpleinput" placeholder="{{ __('shard.title') }}" name="title"
                                    class="form-control" disabled value="{{ $service->title }}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.title_ar') }}</label>
                                <input type="text" id="simpleinput" disabled placeholder="{{ __('shard.title_ar') }}" name="title_ar"
                                    class="form-control" value="{{ $service->title_ar }}">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.icon') }}</label>
                                <input type="text" id="icon" disabled placeholder="{{ __('shard.icon') }}"
                                    class="form-control" name="icon" value="{{ $service->icon }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file form-group">
                                <label for="" class="d-block">{{ __('shard.image') }}</label>
                                <img src='{{ asset("storage/services/$service->image") }}' alt="" height="50px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description') }}</label>
                                <textarea name="description" disabled class="form-control" placeholder="{{ __('shard.description') }}">{{ $service->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description_ar') }}</label>
                                <textarea name="description_ar" disabled class="form-control" placeholder="{{ __('shard.description_ar') }}">{{ $service->description_ar }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layout')

@section('title', __('shard.show-certificate'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.show-certificate') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.name') }}</label>
                                <p class="form-control">{{ $certificate->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.name_ar') }}</label>
                                <p class="form-control">{{ $certificate->name_ar }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.job') }}</label>
                                <p class="form-control">{{ $certificate->job }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.job_ar') }}</label>
                                <p class="form-control">{{ $certificate->job_ar }}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description') }}</label>
                                <textarea disabled class="form-control">{{ $certificate->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description_ar') }}</label>
                                <textarea disabled class="form-control">{{ $certificate->description_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="d-block">{{ __('shard.image') }}</label>
                            <img width="10%" src='{{ asset("storage/certificates/$certificate->image") }}'
                                alt="{{ $certificate->name }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

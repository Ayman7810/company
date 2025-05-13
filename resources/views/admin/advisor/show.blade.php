@extends('admin.layout')

@section('title', __('shard.show-advisor'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.show-advisor') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.name') }}</label>
                                <p class="form-control">{{ $advisor->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.name_ar') }}</label>
                                <p class="form-control">{{ $advisor->name_ar }}</p>
                            </div>
                        </div> 
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description') }}</label>
                                <textarea disabled class="form-control">{{ $advisor->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description_ar') }}</label>
                                <textarea disabled class="form-control">{{ $advisor->description_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="d-block">{{ __('shard.image') }}</label>
                            <img width="10%" src='{{ asset("storage/advisors/$advisor->image") }}'
                                alt="{{ $advisor->name }}">
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.insta') }}</label>
                                <p class="form-control">{{ $advisor->insta }}</p>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.feac') }}</label>
                                <p class="form-control">{{ $advisor->feac }}</p>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.twit') }}</label>
                                <p class="form-control">{{ $advisor->twit }}</p>
                            </div>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

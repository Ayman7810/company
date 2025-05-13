@extends('admin.layout')

@section('title', __('shard.show-feature'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.show-feature') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">

                                <label for="">{{ __('shard.title') }}</label>
                                <p class="form-control">{{ $feature->title }}</p>

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">

                                <label for="">{{ __('shard.icon') }}</label>
                                <p class="form-control">{{ $feature->icon }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">

                                <label for="">{{ __('shard.description') }}</label>
                                <p class="form-control">{{ $feature->description }}</p>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

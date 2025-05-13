@extends('admin.layout')

@section('title', __('shard.show-project'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.show-project') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.title') }}</label>
                                <p class="form-control">{{ $project->title }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.title_ar') }}</label>
                                <p class="form-control">{{ $project->title_ar }}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{ __('shard.description') }}</label>
                                <p class="form-control">{{ $project->description }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="d-block">{{ __('shard.category') }}</label>
                            @if ($language == 'ar')
                                <p class="form-control">{{ $project->category->title_ar }}</p>
                            @else
                                <p class="form-control">{{ $project->category->title }}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="" class="d-block">{{ __('shard.image') }}</label>
                            <img width="10%" src='{{ asset("storage/projects/$project->image") }}'
                                alt="{{ $project->name }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

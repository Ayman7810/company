@extends('admin.layout')

@section('title', __('shard.edit'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.edit-project') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.project.update', ['project' => $project]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.title') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.title') }}"
                                        name="title" class="form-control" value="{{ $project->title }}">
                                    <x-error-form name="title"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.title_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.title_ar') }}"
                                        name="title_ar" class="form-control" value="{{ $project->title_ar }}">
                                    <x-error-form name="title_ar"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.select-category') }}</label>
                                    <select class="custom-select" name="category_id" id="custom-select">
                                        <option value="{{ $project->category->id }}" selected>{{ $project->category->title }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-error-form name="category_id"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-file form-group">
                                    <label for="">{{ __('shard.image') }}</label>
                                    <input type="file" id="example-fileinput" name="image" class="form-control"
                                        value="{{ $project->image }}">
                                    <x-error-form name="image"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('shard.description') }}">{{ $project->description }}</textarea>
                                    <x-error-form name="description"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description_ar') }}</label>
                                    <textarea name="description_ar" class="form-control" placeholder="{{ __('shard.description_ar') }}">{{ $project->description_ar }}</textarea>
                                    <x-error-form name="description_ar"></x-error-form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href="" class="btn btn-primary">{{ __('shard.edit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

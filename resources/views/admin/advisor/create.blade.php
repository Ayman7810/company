@extends('admin.layout')

@section('title', __('shard.create'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.create-advisor') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.advisor.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name') }}"
                                        name="name" class="form-control" value="{{ old('name') }}">
                                    <x-error-form name="name"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name_ar') }}"
                                        name="name_ar" class="form-control" value="{{ old('name_ar') }}">
                                    <x-error-form name="name_ar"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('shard.description') }}">{{ old('description') }}</textarea>
                                    <x-error-form name="description"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description_ar') }}</label>
                                    <textarea name="description_ar" class="form-control" placeholder="{{ __('shard.description_ar') }}">{{ old('description_ar') }}</textarea>
                                    <x-error-form name="description_ar"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="custom-file form-group">
                                    <label for="">{{ __('shard.image') }}</label>
                                    <input type="file" id="example-fileinput" name="image" class="form-control"
                                        value="{{ old('title') }}">
                                    <x-error-form name="image"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.insta') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.insta') }}"
                                        name="insta" class="form-control" value="{{ old('insta') }}">
                                    <x-error-form name="insta"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.feac') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.feac') }}"
                                        name="feac" class="form-control" value="{{ old('feac') }}">
                                    <x-error-form name="feac"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.twit') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.twit') }}"
                                        name="twit" class="form-control" value="{{ old('twit') }}">
                                    <x-error-form name="twit"></x-error-form>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href="" class="btn btn-primary">{{ __('shard.add') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

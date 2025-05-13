<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('shard.title') }}</th>
            <th>{{ __('shard.description') }}</th>
            {{-- <th>{{ __('shard.icon') }}</th> --}}
            <th width='15%'>{{ __('shard.actions') }}</th>

        </tr>
    </thead>
    <tbody>

        @if (count($services) > 0)
            @foreach ($services as $key => $service)
                <tr>
                    <td>{{ $services->firstItem() + $loop->index }}</td>
                    @if ($language == 'ar')
                        <td>{{ $service->title_ar }}</td>
                        <td>{{ Str::words($service->description_ar, 10, '...') }}</td>
                    @else
                        <td>{{ $service->title }}</td>
                        <td>{{ Str::words($service->description, 10, '...') }}</td>
                    @endif
                    {{-- <td><span class="fe fe-24 {{ $service->icon }}"></span> </td> --}}
                    <td>
                        <x-action-button href=" {{ route('admin.service.show', ['service' => $service]) }} "
                            type="show"></x-action-button>

                        <x-action-button href=" {{ route('admin.service.edit', ['service' => $service]) }} "
                            type="edit"></x-action-button>
                        <x-delete-form-button id="{{ $service->id }}"
                            href="{{ route('admin.service.destroy', ['service' => $service]) }}"></x-delete-form-button>
                    </td>
                </tr>
            @endforeach
        @else
            <x-empty-alert></x-empty-alert>
        @endif

    </tbody>
</table>


@if($services->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $services->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif
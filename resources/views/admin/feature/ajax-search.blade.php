<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('shard.title') }}</th>
            <th>{{ __('shard.description') }}</th>
            <th>{{ __('shard.icon') }}</th>
            <th width='15%'>{{ __('shard.actions') }}</th>

        </tr>
    </thead>
    <tbody>
        @if (count($features) > 0)
            @foreach ($features as $key => $feature)
                <tr>
                    <td>{{ $features->firstItem() + $loop->index }}</td>
                    @if ($language =='ar')
                        
                    <td>{{ $feature->title_ar }}</td>
                    <td>{{ Str::words($feature->description_ar, 10, '...')  }}</td>
                    @else
                    <td>{{ $feature->title }}</td>
                    <td>{{ Str::words($feature->description, 10, '...')  }}</td>
                        
                    @endif

                    <td><span class="fe fe-24 {{ $feature->icon }}"></span> </td>
                    <td>
                        <x-action-button
                            href=" {{ route('admin.feature.show', ['feature' => $feature]) }} "
                            type="show"></x-action-button>

                        <x-action-button
                            href=" {{ route('admin.feature.edit', ['feature' => $feature]) }} "
                            type="edit"></x-action-button>
                        <x-delete-form-button
                            href="{{ route('admin.feature.destroy', ['feature' => $feature]) }}" id="{{ $feature->id }}"></x-delete-form-button>

                    </td>
                </tr>
            @endforeach
        @else
            <x-empty-alert></x-empty-alert>
        @endif

    </tbody>
</table>

@if($features->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $features->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif
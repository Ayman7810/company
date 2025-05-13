<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('shard.title') }}</th>
            <th>{{ __('shard.category') }}</th>
            <th>{{ __('shard.description') }}</th>
            <th width='15%'>{{ __('shard.actions') }}</th>

        </tr>
    </thead>
    <tbody>
        @if (count($projects) > 0)
            @foreach ($projects as $key => $project)
                <tr>
                    <td>{{ $projects->firstItem() + $loop->index }}</td>
                    @if ($language == 'ar')
                    <td>{{ $project->title_ar }}</td>
                    <td>{{ $project->category->title_ar }}</td>
                    <td>{{ Str::words($project->description_ar, 10, '...')  }}</td>
                    @else
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category->title }}</td>
                    <td>{{ Str::words($project->description, 10, '...')  }}</td>
                    @endif
                    <td>
                        <x-action-button
                            href=" {{ route('admin.project.show', ['project' => $project]) }} "
                            type="show"></x-action-button>

                        <x-action-button
                            href=" {{ route('admin.project.edit', ['project' => $project]) }} "
                            type="edit"></x-action-button>

                        <x-delete-form-button
                            href="{{ route('admin.project.destroy', ['project' => $project]) }}" id='{{ $project->id }}'></x-delete-form-button>
                    </td>
                </tr>
            @endforeach
        @else
            <x-empty-alert></x-empty-alert>
        @endif

    </tbody>
</table>

@if($projects->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $projects->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif
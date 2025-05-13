                   
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('shard.title') }}</th>
                                <th>{{ __('shard.category') }}</th>
                                <th>{{ __('shard.description') }}</th>
                                <th>{{ __('shard.user') }}</th>
                                <th width='15%'>{{ __('shard.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($blogs->isEmpty())
                                <tr>
                                    <td colspan="100%">
                                        <x-empty-alert></x-empty-alert>
                                    </td>
                                </tr>
                            @else
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        @if ($language == 'ar')
                                            <td>{{ $blog->title_ar }}</td>
                                            <td>{{ $blog->category->title_ar ?? 'بدون تصنيف' }}</td>
                                            <td>{{ Str::limit($blog->description_ar, 50) }}</td>
                                            @else
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category->title ?? 'بدون تصنيف' }}</td>
                                            <td>{{ Str::limit($blog->description, 50) }}</td>
                                        @endif
                                        <td>{{ Auth::user()->name ?? 'مجهول' }}</td>
                                        <td>
                                            <x-action-button href="{{ route('front.blog-detail', ['blog' => $blog]) }}"
                                                type="show"></x-action-button>

                                            <x-action-button href="{{ route('admin.blog.edit', ['blog' => $blog]) }}"
                                                type="edit"></x-action-button>

                                            <x-delete-form-button
                                                href="{{ route('admin.blog.destroy', ['blog' => $blog]) }}" id='{{ $blog->id }}'></x-delete-form-button>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>

                    @if($blogs->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $blogs->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                    </div>
                    @endif
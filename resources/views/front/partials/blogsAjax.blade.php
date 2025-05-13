
@if (count($blogs))
    @foreach ($blogs as $blog)
        <div class="post-01__style-02 md-text-center">
            <div class="post-01__media"><a href="{{ route('front.blog-detail', ['blog' => $blog]) }}"><img
                        src='{{ asset("storage/blogs/$blog->image") }}' alt="{{ $blog->title }}" /></a>
            </div>
            <div>
                @if ($language == 'ar')
                    <ul class="post-01__categories">
                        <li><a href=''>{{ $blog->category->title_ar }}</a></li>
                    </ul>
                    <h2 class="post-01__title"><a
                            href="{{ route('front.blog-detail', ['blog' => $blog]) }}">{{ $blog->title_ar }}</a>
                    </h2>
                    <div class="post-01__time">{{ $blog->created_at->format('d M y') }}</div>
                    <div class="post-01__note"> {{ Auth::user()->name ?? 'الادمن' }} بواسطة </div>
                @else
                    <ul class="post-01__categories">
                        <li><a href=''>{{ $blog->category->title }}</a></li>
                    </ul>
                    <h2 class="post-01__title"><a
                            href="{{ route('front.blog-detail', ['blog' => $blog]) }}">{{ $blog->title }}</a>
                    </h2>
                    <div class="post-01__time">{{ $blog->created_at->format('d M y') }}</div>
                    <div class="post-01__note">by {{ Auth::user()->name ?? 'admin' }}</div>
                @endif

            </div>
        </div>
    @endforeach

    <!-- pagination -->
    {{ $blogs->render('pagination::my-pagination') }}
@endif

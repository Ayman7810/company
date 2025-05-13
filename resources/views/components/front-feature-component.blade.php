@if (count($features))
    <div class="row">
        @foreach ($features as $feature)
            <div class="col-sm-6 col-md-6 col-lg-3 ">
                <div class="iconbox iconbox__style-02">
                    <div class="iconbox__icon"><i class="{{ $feature->icon }}"></i></div>
                    <div>
                        @if ($language == 'ar')
                            <h2 class="iconbox__title"><a href="#">{{ $feature->title_ar }}</a></h2>
                            <div class="iconbox__description">{{ $feature->description_ar }}</div>
                        @else
                            <h2 class="iconbox__title"><a href="#">{{ $feature->title }}</a></h2>
                            <div class="iconbox__description">{{ $feature->description }}</div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

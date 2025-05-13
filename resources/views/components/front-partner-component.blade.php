@if (count($partners))
    <section class="md-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                    <!-- title-01 -->
                    <div class="title-01">
                        <h2 class="title-01__title">{{__('shard.our-partner')}}</h2>
                    </div><!-- End / title-01 -->

                </div>
            </div>

            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel"
                data-options='{"loop":true,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":2},"768":{"items":3},"992":{"items":5}}}'>

                <!--  -->
                @foreach ($partners as $partner)
                    
                <div>
                    <div class="brand-01__image"><img src='{{ asset("storage/partners/$partner->image") }}' alt="{{ $partner->name }}" />
                    </div>
                </div>
                @endforeach

            </div><!-- End / carousel__element owl-carousel -->

        </div>
    </section>
@endif


<div class="form-01 consult-form js-consult-form__content">

    <h2 class="form-01__title">{{__('shard.give-us-your-feedback')}}</h2>
    @if (session('success-feedback'))
        <div class="alert alert-success mt-4" style="color: red" id="success-alert">
            {{ session('success-feedback') }}
        </div>
    @endif
    <form action="{{ route('front.contact.feedback') }}" method="POST" class="form-01__form">
        @csrf
        <div class="form__item form__item--03">
            <input type="text" name="name" placeholder="{{__('shard.Your name')}}" />
        </div>
        <div class="form__item form__item--03">
            <input type="email" name="email" placeholder="{{__('shard.Your Email')}}" />
        </div>
        <div class="form__item">
            <textarea rows="3" name="message" placeholder="{{__('shard.Your message')}}"></textarea>
        </div>
        <div class="form__button">
            <button type="submit" class="btn btn-primary btn-w180">{{__('shard.send-message')}}</button>
        </div>
    </form>
</div>
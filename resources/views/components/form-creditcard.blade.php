<form method="POST" action="{{ route('creditcard') }}">

    @csrf

    <div>
        <x-label for="name" value="{{ __('Name On Card') }}" />
        <x-input style="text-transform: capitalize;" class="block mt-1 w-full" type="text" name="holdername"
            value="{{ Auth::user()->name }}" />
    </div>

    <div class="row">
        <div class="mt-4 col-8 col-md-6">
            <x-label for="name" value="{{ __('Card Number') }}" />
            <x-input id="cr_no" class="block mt-1 w-full" type="text" name="cardnum"
                placeholder="0000-0000-0000-0000" minlength="19" maxlength="19" />
        </div>

        <div class="mt-4 col-4 col-md-6">
            <x-label for="name" value="{{ __('CV') }}" />
            <x-input id="cv_no" class="block mt-1 w-full" type="password" name="cv"
                placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3" />
        </div>
    </div>

    <div class="row">
        <div class="mt-4 col-8 col-md-6">
            <x-label for="date" value="{{ __('Date of Expiry') }}" />
            <x-input id="" class="block mt-1 w-full" type="month" name="exp" min="2023-06"
                value="2023-06" />
        </div>

        <div class="mt-4 col-4 col-md-6">
            <x-label for="name" value="{{ __('Amount ($)') }}" />
            <x-input id="am_no" class="block mt-1 w-full" type="text" name="amount" value="10"
                minlength="1" maxlength="4" />
        </div>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4" type="submit">
            {{ __('Submit') }}
        </x-button>
    </div>

</form>

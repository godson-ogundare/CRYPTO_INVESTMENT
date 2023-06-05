<form method="POST" action="{{ route('paypal') }}">
    @csrf

    <div>
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input style="text-transform: capitalize;" id="name" class="block mt-1 w-full" type="text"
            name="name" />
    </div>

    <div class="mt-4">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Amount ($)') }}" />
        <x-input class="block mt-1 w-full" id="cr_no" type="text" name="amount" maxlength="4" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4" type="submit">
            {{ __('Submit') }}
        </x-button>
    </div>
</form>

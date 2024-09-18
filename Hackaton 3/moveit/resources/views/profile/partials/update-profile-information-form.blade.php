<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6">
        @csrf
        @method('patch')

        <div class="mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="btn btn-link">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-success">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <!-- first_name -->
        <div class="mb-3">
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" name="first_name" type="text" class="form-control" :value="old('first_name', $user->first_name)" required autocomplete="first_name" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
        </div>

        <!-- last_name -->
        <div class="mb-3">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" name="last_name" type="text" class="form-control" :value="old('last_name', $user->last_name)" required autofocus autocomplete="last_name" />
            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
        </div>

        <!--birthday -->
        <div class="mb-3">
            <x-input-label for="birthday" :value="__('Birthday')" />
            <x-text-input id="birthday" name="birthday" type="date" class="form-control" :value="old('birthday', $user->birthday)" required autofocus autocomplete="birthday" />
            <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
        </div>

        <!-- height -->
        <div class="mb-3">
            <x-input-label for="height" :value="__('Height')" />
            <x-input-label for="height" :value="__('Height')" />
            <x-text-input id="height" name="height" type="number" step="0.01" class="form-control" :value="old('height', $user->height)" required autofocus autocomplete="height" />
            <x-input-error class="mt-2" :messages="$errors->get('height')" />
        </div>

        <!-- weight -->
        <div class="mb-3">
            <x-input-label for="weight" :value="__('Weight')" />
            <x-text-input id="weight" name="weight" type="number" class="form-control" :value="old('weight', $user->weight)" required autofocus autocomplete="weight" />
            <x-input-error class="mt-2" :messages="$errors->get('weight')" />
        </div>

        <!-- interests -->
        <div class="mb-3">
            <x-input-label for="interests" :value="__('Interests')" />
            <x-text-input id="interests" name="interests" type="text" class="form-control" :value="old('interests', $user->interests)" required autofocus autocomplete="interests" />
            <x-input-error class="mt-2" :messages="$errors->get('interests')" />
        </div>

        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
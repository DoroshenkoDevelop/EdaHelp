<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a class="navbar-brand" href="">
                <p class="text-center mb-1 text-inter h3 text-inter text-dark">ЕДА</p>
                <hr class="hr">
                <p class="text-center mt-1 text-inter h3 text-inter h3 text-dark">HELP</p>
            </a>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="cuprum">
                <x-jet-label for="name" value="{{ __('Имя') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 cuprum">
                <x-jet-label for="email" value="{{ __('Емайл') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4 cuprum">
                <x-jet-label for="password" value="{{ __('Пароль') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 cuprum">
                <x-jet-label for="password_confirmation" value="{{ __('Повторите пароль') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4 cuprum">
                    <x-jet-label for="terms">
                        <div class="flex items-center cuprum">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2 cuprum">
                                {!! __('Я согласен с: условиями обслуживания и: политикой конфиденциальности', [
                                        'Условия использования' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Условия использования').'</a>',
                                        'Политика конфиденциальности' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Политика конфиденциальности').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4 cuprum">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>

                <button class="ml-4 btn btn-success margin cuprum">
                    {{ __('Регистрация') }}
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

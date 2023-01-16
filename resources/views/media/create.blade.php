<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NEW USER') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Upload File') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Upload new file.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('media.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" required autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />                               
                            </div>
                            <div>
                                <x-input-label for="encoded_file" :value="__('File')" />
                                <x-text-input id="encoded_file" name="encoded_file" type="file" class="mt-1 block w-full" required autocomplete="encoded_file" />
                                <x-input-error class="mt-2" :messages="$errors->get('encoded_file')" />                               
                            </div>
                            

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
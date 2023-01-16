<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DASHBOARD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900">
                <a href="{{ route('media.create') }}"><x-primary-button>{{ __('Upload New File') }}</x-primary-button></a>
                    <table class="border-collapse table-fixed w-full">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($medias as $media)
                            <tr>
                                <td><a href="{{ url('/media', $media->id) }}">{{ $media->name }}</a></td>
                                <td><a href="{{ url('/media', $media->id) }}">{{ $media->email }}</a></td>
                                <td>{{ Str::limit($media->encoded_file, 30) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $medias->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

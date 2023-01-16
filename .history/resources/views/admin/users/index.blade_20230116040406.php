<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('USERS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900">
                <a href=""><x-primary-button>{{ __('New User') }}</x-primary-button></a>
                    <table class="border-collapse table-fixed w-full">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><a href="{{ url('/admin/users', $user->id) }}">{{ $user->name }}</a></td>
                                <td><a href="{{ url('/admin/users', $user->id) }}">{{ $user->email }}</a></td>
                                <td>{{ $user->getRoleNames() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

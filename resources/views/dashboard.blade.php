<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @if(request()->user()->hasRole('root'))
                    Welcome, Your role is Root
                    @endif
                    @if(request()->user()->hasRole('admin'))
                        Welcome, Your role is Admin
                    @endif
                    @if(request()->user()->hasRole('user'))
                        Welcome, Your role is User
                    @endif
                </h1>
            </div>
        </div>
    </div>
</x-app-layout>

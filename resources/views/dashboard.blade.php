<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <h1 class="h2">
            @if(request()->user()->hasRole('root'))
                Welcome, Your role is <div class="text-success d-inline"> Root </div>
            @endif
            @if(request()->user()->hasRole('admin'))
                Welcome, Your role is <div class="text-success d-inline"> Admin </div>
            @endif
            @if(request()->user()->hasRole('user'))
                Welcome, Your role is <div class="text-success d-inline"> User </div>
            @endif
        </h1>
    </div>
    <x-jet-welcome />
</x-app-layout>
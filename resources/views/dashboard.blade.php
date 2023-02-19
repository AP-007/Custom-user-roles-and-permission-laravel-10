<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @role('admin')
                Admin
            @endrole
            
            @role('editor')
            Editor
            @endrole
            
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @role('admin')
                    {{ __("This is only visible if you are assigned as an admin") }}
                    @endrole

                    @role('editor')
                    {{ __("This is only visible if you assigned as an editor") }}
                    @endrole
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

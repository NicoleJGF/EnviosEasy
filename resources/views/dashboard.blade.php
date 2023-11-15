<x-app-layout>

    @if(Auth::user()->acceso == 'adminT')
                
        @livewire('admin.dashboard')

    @else
        
        @livewire('users.user')

    @endif
    
</x-app-layout>

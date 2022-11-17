<x-filament::widget>
    <x-filament::card>
        <div class="relative pb-2" x-data>
            <img src="{{ asset('images/calima.png') }}" alt="Calima Solutions" class="h-10 w-auto block" />
            <div style="position: absolute; right: 0; top: 0; height: 100%; display: flex; justify-content: flex-end; align-items: center;">
                <a href="https://calimasolutions.com/contacts/" style="background: black; height: 3rem; width: 3rem; border-radius: 0.25rem; color: white; display: flex; justify-content: center; align-items: center;" aria-label="{{ __('Contactar') }}" x-tooltip.raw="{{ __('Contactar') }}" target="_blank" rel="noopener noreferrer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </a>
                <a href="https://calimasolutions.com/portfolio/" style="background: black; height: 3rem; width: 3rem; border-radius: 0.25rem; margin-left: 0.25rem; color: white; display: flex; justify-content: center; align-items: center;" aria-label="{{ __('Ver proyectos') }}"  x-tooltip.raw="{{ __('Ver proyectos') }}" target="_blank" rel="noopener noreferrer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </a>
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>

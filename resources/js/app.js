require('./bootstrap');

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'

if (window.Livewire) {
    window.Livewire.start();
}
    
Alpine.plugin(focus);

window.Alpine = Alpine;

Alpine.start();
require('./bootstrap');
import 'bootstrap/dist/css/bootstrap.min.css';
import Vue from 'vue';
import PokemonTable from './src/PokemonTable.vue';

new Vue({
    el: '#root',
    template: 'hello',
    components: {
        PokemonTable,
    },
});

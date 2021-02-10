require('./bootstrap');
import Vue from 'vue';
import 'bootstrap/dist/css/bootstrap.min.css';
import PokemonTable from './src/PokemonTable.vue';

const app = new Vue({
    el: '#root',
    components: {
        'pokemon-table': PokemonTable
    }
});


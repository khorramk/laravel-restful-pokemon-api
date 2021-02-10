<template>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    #1
                </th>
                <th>
                    picture
                </th>
                <th>
                    name
                </th>
                <th>
                    weight
                </th>
                <th>
                    height
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(monster, i) in pokemon" :key="i">
                <td>
                    {{i}}
                </td>
                <td>
                    <img :src="monster.imgUrl" :alt="monster.name">
                </td>
                <td>
                    {{monster.name}}
                </td>
                <td>
                    {{monster.weight}}
                </td>
                <td>
                    {{monster.height}}
                </td>
            </tr>
        </tbody>

    </table>
</template>

<script>
export default {
    data(){
        return {
            pokemons: [],
            pokemonsURl: [],
            pokemon: []
        };
    },
    mounted() {
        axios.get('/api/pokemons')
            .then((response) => {
                // console.log(response);
                this.pokemonsURl = response.data.data;
                this.runPokemonRequest();
            })

    },
    methods: {
        runPokemonRequest() {
            for (let index = 0; index < this.pokemonsURl.length; index++) {
                const url = this.pokemonsURl[index]['url'];
                console.log(url);
                axios.get(url).then(resp => {
                    console.log(resp);
                    let pokemon = {};
                    pokemon.name = this.pokemonsURl[index]['name'];

                    pokemon.weight = resp.data.weight;
                    pokemon.height = resp.data.height;
                    pokemon.imgUrl = resp.data.sprites.back_default;
                    this.pokemon.push(pokemon);
                });

            }
        }
    }
}
</script>


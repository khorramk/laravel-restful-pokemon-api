<?php

namespace App\Console\Commands;

use App\Models\Pokemon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PokeMonCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pokemon:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'pokemon cron excuted and it will update the pokemon in db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/?offset=0&limit=151');
        $results = $response->json()['results'];

        DB::transaction(function () use ($results) {
            foreach ($results as $pokemonData) {
                $pokemon = Pokemon::firstOrCreate([
                    'name' => $pokemonData['name'],
                    'url'  => $pokemonData['url']
                ]);

                $pokemon->save();
            }
        });

        $this->info('commands excuted');
    }
}

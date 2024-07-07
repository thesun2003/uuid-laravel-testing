<?php

namespace App\Console\Commands;

use App\Models\IdInteger\User as IdIntegerUser;
use App\Models\UuidString\User as UuidStringUser;
use App\Models\IdInteger\Organisation as IdIntegerOrganisation;
use App\Models\UuidString\Organisation as UuidStringOrganisation;
use Illuminate\Console\Command;

class Testing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:testing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected int $count = 1;

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->createData(IdIntegerUser::class);
        $this->createData(UuidStringUser::class);

        $this->createData(IdIntegerOrganisation::class);
        $this->createData(UuidStringOrganisation::class);
    }

    protected function createData(string $className): float
    {
        // Grab the start time
        $start = microtime(true);

        $className::factory()->count($this->count)->create();

        // Grab the end time
        $end = microtime(true);

        // Subtract the start from the end
        $elapsed = $end - $start;

        echo "Script executed in $elapsed seconds\n";

        return $elapsed;
    }
}

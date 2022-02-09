<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Version;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 10; $i++) {
        //     Version::create([
        //         'versionname'=>'2.1.'.$i,
        //     ]);
        // }

        // for ($i=0; $i < 10; $i++) {
        //     Content::create([
        //         'contname'=>'Content-'.($i+1),
        //         'verid'=>$i+1,
        //     ]);
        // }

        // Version::where('id',1)->update([
        //     'id'=>333,
        // ]);

        Version::where('id',333)->delete();

    }
}

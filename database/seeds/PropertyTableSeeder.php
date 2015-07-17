<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * read xls file : get sample data from xls file
     * @param $file string
     * @return array
     **/
    private function get_data($file = "") {

        $Reader = new SpreadsheetReader($file);
        $Sheets = $Reader->Sheets();

        foreach ($Sheets as $Index => $Name)
        {
            $Reader->ChangeSheet($Index);
            foreach ($Reader as $i => $Row)
            {

                // disregard header
                if($i == 0) {
                    continue;
                }
                $c = array();
                $c['name']    = $Row[0];
                $c['price']    = floatval($Row[1]);
                $c['bedrooms']    = $Row[2];
                $c['bathrooms']    = $Row[3];
                $c['storeys']    = $Row[4];
                $c['garages']    = $Row[5];

                DB::table('properties')->insert($c);
                $this->command->info($i.'. '.$c['name']);

            }
        }
    }

    /**
     * Run the Property seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection()->disableQueryLog();
        DB::table('properties')->delete();

        $file = dirname(__FILE__).'/property-data.csv';
        $this->get_data($file);

    }
}

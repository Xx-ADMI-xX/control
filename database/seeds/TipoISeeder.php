<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoingresos')->insert(['tpI_Nombre'=>'Mantenimientos']);
        DB::table('tipoingresos')->insert(['tpI_Nombre'=>'Sueldo']);
        DB::table('tipoingresos')->insert(['tpI_Nombre'=>'Venta empanadas de verde']);
        DB::table('tipoingresos')->insert(['tpI_Nombre'=>'Venta de longaniza']);
        DB::table('tipoingresos')->insert(['tpI_Nombre'=>'Manicura']);
        DB::table('tipoingresos')->insert(['tpI_Nombre'=>'Pedicura']);
    }
}

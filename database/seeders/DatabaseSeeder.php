<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(SucursalTableSeeder::class);
        $this->call(TipoCargaVehiculoTableSeeder::class);
        $this->call(TipoDiagramaTableSeeder::class);
        $this->call(TipoTerrenoVehiculoTableSeeder::class);
        $this->call(TipoVehiculoTableSeeder::class);       
        $this->call(AnchoTableSeeder::class);
        $this->call(AplicacionTableSeeder::class);
        $this->call(AreaDefectoTableSeeder::class);
        $this->call(CargaVehiculoTableSeeder::class);
        $this->call(CondicionTableSeeder::class);
        $this->call(CondicionCauchoTableSeeder::class);
        $this->call(CondicionVehiculoTableSeeder::class);
        $this->call(CorrelativoTableSeeder::class);
        $this->call(DatoscamposTableSeeder::class);
        $this->call(DefectoBolsaVulcanizacionTableSeeder::class);
        $this->call(DefectoCamaraTableSeeder::class);
        $this->call(DefectoDvbTableSeeder::class);
        $this->call(DefectoEnvelopExternoTableSeeder::class);
        $this->call(DefectoEnvelopInternoTableSeeder::class);
        $this->call(DefectoProtectorTableSeeder::class);
        $this->call(DiagramaAreaDefectoTableSeeder::class);
        $this->call(DiagramaCauchoTableSeeder::class);
        $this->call(DisenoAnchoTableSeeder::class);
        $this->call(DisenoBandaTableSeeder::class);
        $this->call(DisenoMoldeTableSeeder::class);
        $this->call(DisenoProfundidadTableSeeder::class);
        $this->call(EjeVehiculoTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(EstatusTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MarcaCamaraTableSeeder::class);
        $this->call(MarcaCauchoTableSeeder::class);
        $this->call(MarcaCauchoIndustrialTableSeeder::class);
        $this->call(MarcaProtectorTableSeeder::class);
        $this->call(MarcaVehiculoTableSeeder::class);
        $this->call(MedidaCamaraTableSeeder::class);
        $this->call(GuiaTableSeeder::class);
        $this->call(MedidaCauchoTableSeeder::class);
        $this->call(MedidaCauchoIndustrialTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(InformacionProductoTableSeeder::class);
        $this->call(ModeloCamaraTableSeeder::class);
        $this->call(ModeloCauchoTableSeeder::class);
        $this->call(ModeloProtectorTableSeeder::class);
        $this->call(ModeloVehiculoTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProfundidadTableSeeder::class);
        $this->call(RechazoTableSeeder::class);
        $this->call(RechazoCausaTableSeeder::class);
        $this->call(RechazoRecomendacionTableSeeder::class);
        $this->call(RechazoZonasTableSeeder::class);
        $this->call(RolTableSeeder::class);
    }
}

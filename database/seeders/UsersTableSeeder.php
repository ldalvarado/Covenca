<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idSucursal' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i.cR5sz3Mcbsg4lOg.zgYOQA9ngehn6NNpwyI9e4mmTXfbXaaTiyi',
                'estado' => 0,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
                'idRole' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'idSucursal' => 3,
                'name' => 'alirio',
                'email' => 'aliriojmarquez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QasDOdPMjU51i3HG5CYOO./ChVnC2H26HQ753mu2YR2fj7ToCpKoC',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 17:49:43',
                'updated_at' => '2022-01-10 13:15:19',
                'idRole' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'idSucursal' => 1,
                'name' => 'admin',
                'email' => 'covenca@covenca.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wSXYh19ChLCdpSlq0wHcIuCtV27ABeDeBSkFXq110b/NtZnft7cJ.',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-10-27 16:40:38',
                'updated_at' => '2021-10-27 16:40:38',
                'idRole' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'idSucursal' => 1,
                'name' => 'Alirio Márquez',
                'email' => 'amarqu2012@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lmIfHawXt0orxWS4cI9YqepXVetfJYI3IltUa2.qGogxHwBykjQLy',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-11-02 15:31:17',
                'updated_at' => '2022-01-20 09:33:50',
                'idRole' => 5,
            ),
            4 => 
            array (
                'id' => 12,
                'idSucursal' => 3,
                'name' => 'adminAnita',
                'email' => 'adminanita@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jPM/B4SeofoVq.t8wuFA4e7UjHkG6Yxzhch0ghOl2tGh0w55GWXjy',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-11-08 16:38:53',
                'updated_at' => '2021-11-08 16:38:53',
                'idRole' => 1,
            ),
            5 => 
            array (
                'id' => 21,
                'idSucursal' => 3,
                'name' => 'administradorAnita',
                'email' => 'a.marqu2012@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SZ4/uScY4/BA9HVa0cLVk.K2RHKKZwXz.uvL2QGudW5UEtpTP0.56',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-11-23 07:05:02',
                'updated_at' => '2021-11-23 09:41:32',
                'idRole' => 1,
            ),
            6 => 
            array (
                'id' => 22,
                'idSucursal' => 3,
                'name' => 'Raul',
                'email' => 'morello.raul@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qlY5bk2UN019lPquhcsoI.L8MWAwuA5Lg0ch6HbyeqlO9KwQgFet.',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-11-23 09:54:12',
                'updated_at' => '2021-11-23 09:55:22',
                'idRole' => 5,
            ),
            7 => 
            array (
                'id' => 23,
                'idSucursal' => 9,
                'name' => 'Alirio',
                'email' => 'am.arqu2012@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dSmHBb1ORmjzuA74YyaXUuNmuQM11j43ZvepImL/5WmymoVqZAbs6',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-17 17:19:17',
                'updated_at' => '2022-01-17 17:19:17',
                'idRole' => 5,
            ),
            8 => 
            array (
                'id' => 24,
                'idSucursal' => 27,
                'name' => 'Admin Rack Tires',
                'email' => 'adminracktires@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qKbZojBn96jyrli0YaeCp.fdpaF1t6OPmpWhUS6v6rSlRnQ.FL186',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-18 15:18:43',
                'updated_at' => '2022-01-18 15:18:43',
                'idRole' => 1,
            ),
            9 => 
            array (
                'id' => 25,
                'idSucursal' => 27,
                'name' => 'Alirio Marquez',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$heSGUW86SEH/yaca0L4pDuOv7IGwexFQEFZ.JNaqiItJEsEgMoUpy',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-18 15:26:45',
                'updated_at' => '2022-01-18 15:26:45',
                'idRole' => 5,
            ),
            10 => 
            array (
                'id' => 26,
                'idSucursal' => 9,
                'name' => 'Alirio Márquez',
                'email' => 'amarqu@hotmail',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jjm2LFaamY3W653vl3MjKeevc.u56eUAfEaB/NlCMMYqBxM3jVfpe',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-23 12:59:36',
                'updated_at' => '2022-01-23 19:18:51',
                'idRole' => 5,
            ),
            11 => 
            array (
                'id' => 27,
                'idSucursal' => 9,
                'name' => 'Nuevacadiz',
                'email' => 'adminnuevacadiz@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DphsnJwVjcO15gSePNMo8O4LR/VyLFXCarNqqbStHvI2roL3oVFP.',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-23 21:32:22',
                'updated_at' => '2022-01-23 21:32:22',
                'idRole' => 1,
            ),
            12 => 
            array (
                'id' => 28,
                'idSucursal' => 9,
                'name' => 'Alirio Junior',
                'email' => 'a.liriojmarquez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ftOGy8ykJ7qktLDZKCkEE.mMBjG9Hc/TUBIMVxqRF/AeJUkP75TKa',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-23 21:35:11',
                'updated_at' => '2022-01-23 21:35:11',
                'idRole' => 5,
            ),
            13 => 
            array (
                'id' => 29,
                'idSucursal' => 28,
                'name' => 'servicalp',
                'email' => 'adminservicalp@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OF5fdgceDMojs4vYYT3T1uR33By51fqtMv8bAY/QLe8dk/qEEziHu',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 05:49:54',
                'updated_at' => '2022-01-25 05:49:54',
                'idRole' => 1,
            ),
            14 => 
            array (
                'id' => 30,
                'idSucursal' => 20,
                'name' => 'adminmpcaucho',
                'email' => 'adminmpcaucho@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0O59Vx6kW4fpSMT51Bdneek89hGQeI4nDpQIP8WOybFKn30SpIxjO',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 05:54:12',
                'updated_at' => '2022-01-25 05:54:12',
                'idRole' => 1,
            ),
            15 => 
            array (
                'id' => 31,
                'idSucursal' => 32,
                'name' => 'admindelui',
                'email' => 'admindelui@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6V6WPUaQBUIf4oaYjJgwJu75uOh2RmJClw0JqCD6pPc.Q6MwRWLSC',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 05:57:21',
                'updated_at' => '2022-01-25 05:57:21',
                'idRole' => 1,
            ),
            16 => 
            array (
                'id' => 32,
                'idSucursal' => 26,
                'name' => 'adminpipecauchos',
                'email' => 'adminpipecauchos@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WWD7/DcLezOWTF.KI6SwmulHCXQ7/Tev8fqnW7G3ekPlsRtlmznOK',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 05:59:14',
                'updated_at' => '2022-01-25 05:59:14',
                'idRole' => 1,
            ),
            17 => 
            array (
                'id' => 33,
                'idSucursal' => 17,
                'name' => 'admincortrucaucho',
                'email' => 'admincortrucaucho@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pOqKRqCc2jytwYQZ70kVpe2vtUMmgf4vpUXnuZu18oWK3JAwf6oY.',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 06:03:19',
                'updated_at' => '2022-01-25 06:03:19',
                'idRole' => 1,
            ),
            18 => 
            array (
                'id' => 34,
                'idSucursal' => 11,
                'name' => 'adminsurdellago',
                'email' => 'adminsurdellago@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ocBEYBJOu6VcQw.BGBQj/OY89DVrSFHm7FTzsWfkHGdVtFDSZQCgq',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 06:04:47',
                'updated_at' => '2022-01-25 06:04:47',
                'idRole' => 1,
            ),
            19 => 
            array (
                'id' => 35,
                'idSucursal' => 5,
                'name' => 'admincentrooccidente',
                'email' => 'admincentrooccidente@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tsG/vlpFxPMjRJcC5GxTQevy.VYAvHTtdHNVefRlJv8kyeAJnVAKS',
                'estado' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-01-25 06:06:06',
                'updated_at' => '2022-01-25 06:06:06',
                'idRole' => 1,
            ),
        ));
        
        
    }
}
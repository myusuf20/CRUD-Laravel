<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class PertanyaanModel {
        public static function get_all(){
            $pertanyaan = DB::table('pertanyaan')->get();
            return $pertanyaan;
        }

        public static function save($data){
            $now = date_create()->format('Y-m-d H:i:s');
            return DB::table('pertanyaan')->insert([
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }

?>

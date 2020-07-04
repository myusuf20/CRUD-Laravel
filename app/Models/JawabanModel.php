<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class JawabanModel {
        public static function get_all(){
            $jawaban = DB::table('jawaban')->get();
            return $jawaban;
        }

        public static function save($data){
            $now = date_create()->format('Y-m-d H:i:s');
            return DB::table('jawaban')->insert([
                'isi' => $data['isi'],
                'created_at' => $now,
                'updated_at' => $now,
                'is_selected' => 0
            ]);
        }
    }

?>

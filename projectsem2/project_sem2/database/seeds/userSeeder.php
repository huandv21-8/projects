<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        
        // DB::table('users')->insert([
        //     'name' => 'huan',
        //     'age'=>19,
        //     'gender' => 'nam',
        //     'phone' => '0971075145',
        //     'identity_cart'=>'14578954',
        //     'wards'=>'Dinh Du',
        //     'district'=> 'Van Lam',
        //     'city'=>'Hung Yen',
        //     'email'=>'kaka@gmail.com',
        //     'password'=>'123456',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
            
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'hai',
        //     'age'=>19,
        //     'gender' => 'nam',
        //     'phone' => '0971075145',
        //     'identity_cart'=>'14578954',
        //     'wards'=>'Tu Dinh',
        //     'district'=> 'Long Bien',
        //     'city'=>'Ha Noi',
        //     'email'=>'hihi@gmail.com',
        //     'password'=>'123456',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
            
        // ]);

        DB::table('roles')->insert([
            'name_roles'=>'admin',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            
        ]);
        DB::table('roles')->insert([
            'name_roles'=>'customer',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            
        ]);
        DB::table('roles')->insert([
            'name_roles'=>'employee',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            
        ]);

        DB::table('position')->insert([
            'id_user'=>2,
            'id_roles'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            
        ]);
        DB::table('position')->insert([
            'id_user'=>3,
            'id_roles'=>2,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            
        ]);
        DB::table('position')->insert([
            'id_user'=>5,
            'id_roles'=>3,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            
        ]);

        // for ($i=0; $i <4; $i++) { 
        //     DB::table('image_product')->insert([
        //         'id_product'=>2,
        //         'link_image'=>'//laz-img-sg.alicdn.com/p/e3ed81ddc5ec4378ea4c486103805171.jpg_720x720q80.jpg_.webp',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
                
        //     ]);
        // }
        // for ($i=0; $i <4; $i++) { 
        //     DB::table('image_product')->insert([
        //         'id_product'=>5,
        //         'link_image'=>'//laz-img-sg.alicdn.com/p/e3ed81ddc5ec4378ea4c486103805171.jpg_720x720q80.jpg_.webp',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
                
        //     ]);
        // }
        // for ($i=0; $i <4; $i++) { 
        //     DB::table('image_product')->insert([
        //         'id_product'=>6,
        //         'link_image'=>'//laz-img-sg.alicdn.com/p/e3ed81ddc5ec4378ea4c486103805171.jpg_720x720q80.jpg_.webp',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
                
        //     ]);
        // }
        // for ($i=0; $i <4; $i++) { 
        //     DB::table('image_product')->insert([
        //         'id_product'=>7,
        //         'link_image'=>'//laz-img-sg.alicdn.com/p/e3ed81ddc5ec4378ea4c486103805171.jpg_720x720q80.jpg_.webp',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
                
        //     ]);
        // }
        // for ($i=0; $i <10 ; $i++) { 
        //     DB::table('product')->insert([
        //         'id_user'=>2,
        //         'id_category'=>1,
        //         'name_product'=>'Dulex Luxury',
        //         'Inventory_number'=> 50,
        //         'Inventory_sold'=>30,
        //         'describe'=> 'address in USA',
        //         'price'=>50,
        //         'image'=>'https://lh3.googleusercontent.com/uucnWcE5ReETrOdxta4K9AG_py5cfCfvbVtzMXbY5GsL0uoFxQMNCdkUDQuTNpaF3c8feHiuM4AtUtxK4Js=w185',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
                
        //     ]);
        // }


 



    }
}

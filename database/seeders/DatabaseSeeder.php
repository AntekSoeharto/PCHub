<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipment;
use App\Models\Product;
use App\Models\DetailOrder;
use App\Models\Admin;

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

        Customer::create([
            'email' => 'ojan@gmail.com',
            'name' => 'Ojan',
            'password' => bcrypt('12345'),
            'phone' => '081325654789'
        ]);

        Customer::create([
            'email' => 'Tinus@gmail.com',
            'name' => 'Tinus',
            'password' => bcrypt('12345'),
            'phone' => '081325654789'
        ]);

        Customer::create([
            'email' => 'dave@gmail.com',
            'name' => 'Dave',
            'password' => bcrypt('12345'),
            'phone' => '081325654789'
        ]);

        //Customer::factory(5)->create();

        Order::create([
            'customer_id' => '1',
            'total_price' => '8900000',
        ]);

        Order::create([
            'customer_id' => '2',
            'total_price' => '1500000',
        ]);

        Order::create([
            'customer_id' => '3',
            'total_price' => '1500000',
        ]);

        Order::create([
            'customer_id' => '1',
            'total_price' => '1500000',
        ]);

        Order::create([
            'customer_id' => '3',
            'total_price' => '1500000',
        ]);


        //Order::factory(10)->create();

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '1'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '2'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '3'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '4'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '5'
        ]);



        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '1'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '2'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '3'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '4'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '5'
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Ram 5 GB Kingston',
            'price' => '450000',
            'image' => 'Kingston 5 GB RAM.png',
            'vendor' => 'Kingston Indonesia',
            'category' => 'RAM',
            'description' => 'Kingston DDR2 Memori PC [5 GB/PC-6400] merupakan memory RAM PC berkapasitas 5 GB dengan chipset PC2-6400.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Processor Intel I5 11th Gen',
            'price' => '8000000',
            'image' => 'Intel I5 11th Gen.png',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Prosesor',
            'description' => 'The 11th Generation Intel Core i5-1135G7 is a typical 2020 mid-range laptop processor.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'GIGABYTE GEFORCE RTX 3060 8GB',
            'price' => '15000000',
            'image' => 'GIGABYTE GEFORCE RTX 3060 8GB.jpg',
            'vendor' => 'NVIDIA',
            'category' => 'VGA',
            'description' => 'The RTX 3060 lets you play the latest games using the power of Ampere, NVIDIAs 2nd generation RTX architecture.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'HYPERX FURY RGB DDR4 2X8GB',
            'price' => '15000000',
            'image' => 'HYPERX FURY RGB DDR4 2X8GB.jpg',
            'vendor' => 'Kingston Indonesia',
            'category' => 'RAM',
            'description' => 'HyperX Fury Beast KF432C16BBAK2/16 is a kit of two 1G x 64-bit (8GB) DDR4-3200 CL16 SDRAM (Synchronous DRAM) 1Rx8.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'Intel Core i5-9400F',
            'price' => '2300000',
            'image' => 'Intel Core i5-9400F.jpg',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Prosesor',
            'description' => 'The Core i5-9400F processor from Intel has a 2.9 GHz base clock speed and a 4.1 GHz maximum boost speed.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'Intel Core i5-10400F',
            'price' => '2400000',
            'image' => 'Intel Core i5-10400F.jpg',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Prosesor',
            'description' => 'The Intel Core i5-10400F is a mid-range processor for desktops with six cores based on the Comet Lake architecture.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'MasterFan MF120 Prismatic',
            'price' => '935000',
            'image' => 'MasterFan MF120 Prismatic.png',
            'vendor' => 'Cooler Master Indonesia',
            'category' => 'Fan',
            'description' => 'It features a tri-loop Addressable RGB lighting with distinctive crystallization on both sides.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'MASTERLIQUID ML240L',
            'price' => '1141000',
            'image' => 'MASTERLIQUID ML240L.jpg',
            'vendor' => 'Cooler Master Indonesia',
            'category' => 'Fan',
            'description' => 'New Generation Dual Chamber Pump, Larger Radiator Surface Area, New SickleFlow 120 RGB, Reinforced Seal for Anti-leak Prevention.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'MWE Gold 850 - V2 Full Modular',
            'price' => '2007000',
            'image' => 'MWE Gold 850 - V2 Full Modular.jpg',
            'vendor' => 'Cooler Master Indonesia',
            'category' => 'PSU',
            'description' => 'The MWE Gold - V2 (Full Modular) is the next step in the evolution of Cooler Masters entry level 80 PLUS Gold power supply unit line.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'RAZER RAPTOR 27',
            'price' => '17000000',
            'image' => 'RAZER RAPTOR 27.png',
            'vendor' => 'Razer',
            'category' => 'Monitor',
            'description' => 'Razer Raptor is now faster than ever with up to 165Hz refresh rate and new THX® Certified visual clarity.',
            'stock' => 150
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'ROG MAXIMUS XI HERO',
            'price' => '6000000',
            'image' => 'ROG MAXIMUS XI HERO.jpg',
            'vendor' => 'Asus',
            'category' => 'Motherboard',
            'description' => 'Intel Z390 ATX Gaming motherboard with M.2 heatsink, Aura Sync RGB LED, DDR4 4400MHz, dual M.2, SATA 6Gb/s, and USB 3.1 Gen 2',
            'stock' => 150
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'SEAGATE BARRACUDA 120 SSD 1TB',
            'price' => '2000000',
            'image' => 'SEAGATE BARRACUDA 120 SSD 1TB.jpg',
            'vendor' => 'Seagate',
            'category' => 'SSD',
            'description' => 'BarraCuda solid state drives are perfect for ultra thin and ultra small laptops, mini PCs, and desktop PCs that need next-level SSD speed for accelerated applications and multitasking.',
            'stock' => 150
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'RAZER TOMAHAWK GAMING CHASSIS',
            'price' => '3600000',
            'image' => 'RAZER TOMAHAWK GAMING CHASSIS.jpg',
            'vendor' => 'Razer',
            'category' => 'Case',
            'description' => 'Mid-tower ATX Gaming Chassis with Razer Chroma RGB, Dual-sided tempered glass swivel doors, Powered by Razer Chroma™ RGB, Ventilated top panel and dust filters',
            'stock' => 50
        ]);

        DetailOrder::create([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => 2,
            'price' => 900000
        ]);

        DetailOrder::create([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => 2,
            'price' => 8000000
        ]);

        DetailOrder::factory(20)->create();



        Admin::create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => '12345',
            'admin_code' => 1
        ]);
    }
}

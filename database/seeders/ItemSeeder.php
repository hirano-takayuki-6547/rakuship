<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            ['name'=>'毛布',
            'seller_id'=>1,
            'category_id'=>6,
            'price'=>1500,
            'description'=>'抽選会でもらった賞品ですが、好みに合わないため出品'],
            ['name'=>'トースター',
            'seller_id'=>1,
            'category_id'=>6,
            'price'=>1500,
            'description'=>'自炊しないため、ほぼ未使用品の状態で出品'],
            ['name'=>'ギター',
            'seller_id'=>1,
            'category_id'=>4,
            'price'=>10000,
            'description'=>'ギターをやめたので出品します'],
            ['name'=>'ワイングラス',
            'seller_id'=>1,
            'category_id'=>6,
            'price'=>1000,
            'description'=>'使わなくなったため出品します'],
            ['name'=>'ソファベッド',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>10000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ペット服',
            'seller_id'=>1,
            'category_id'=>8,
            'price'=>1000,
            'description'=>'サイズが合わなかったため出品します'],
            ['name'=>'【SMAPライブ】DVD',
            'seller_id'=>1,
            'category_id'=>3,
            'price'=>1500,
            'description'=>'見なくなったため出品します'],
            ['name'=>'【君の名は】Blu-ray',
            'seller_id'=>1,
            'category_id'=>3,
            'price'=>800,
            'description'=>'子供が飽きたため出品します'],
            ['name'=>'テーブル',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>7000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'椅子',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>5500,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'本棚',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>8500,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ベッド',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>5000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'デスク',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>3500,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'クローゼット',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>4000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'食器棚',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>6600,
            'description'=>'サイズが合わなかったため出品します'],
            ['name'=>'シェルフ',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>4900,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ベンチ',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>2000,
            'description'=>'リフォームため出品します'],
            ['name'=>'ワードローブ',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>3000,
            'description'=>'サイズが合わないため出品します'],
            ['name'=>'ドレッサー',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>6000,
            'description'=>'使い慣れないため出品します'],
            ['name'=>'キッチンカウンター',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>9000,
            'description'=>'リフォームため出品します'],
            ['name'=>'タンス',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>2800,
            'description'=>'リフォームため出品します'],
            ['name'=>'コタツ',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>2000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'キャビネット',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>9600,
            'description'=>'リフォームため出品します'],
            ['name'=>'ハンガーラック',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>2700,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ベンチ',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>3000,
            'description'=>'ほぼ使わないため出品します'],
            ['name'=>'オットマン',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>2000,
            'description'=>'購入間違えたため出品します'],
            ['name'=>'チェスト',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ハンモック',
            'seller_id'=>1,
            'category_id'=>9,
            'price'=>3000,
            'description'=>'キャンプしなくなったため出品します'],
            ['name'=>'ピアノ',
            'seller_id'=>1,
            'category_id'=>4,
            'price'=>28000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'キッチンアイランド',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>30000,
            'description'=>'リフォームのため出品します'],
            ['name'=>'パラソル',
            'seller_id'=>1,
            'category_id'=>9,
            'price'=>4500,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ガーデンチェア',
            'seller_id'=>1,
            'category_id'=>9,
            'price'=>2000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'照明器具',
            'seller_id'=>1,
            'category_id'=>5,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'コンソールテーブル',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>2000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ベビーベッド',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>6000,
            'description'=>'使わなくなったため出品します'],
            ['name'=>'ウォールシェルフ',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ロッキングチェア',
            'seller_id'=>1,
            'category_id'=>2,
            'price'=>6000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'あいみょんライブタオル',
            'seller_id'=>1,
            'category_id'=>1,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'あいみょんライブパーカー',
            'seller_id'=>1,
            'category_id'=>1,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'アイドル缶バッジセット',
            'seller_id'=>1,
            'category_id'=>1,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'折り畳み扇風機',
            'seller_id'=>1,
            'category_id'=>5,
            'price'=>1500,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ラブライブフィギュア',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>2300,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'癒し音楽CD',
            'seller_id'=>1,
            'category_id'=>3,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ポーチ',
            'seller_id'=>1,
            'category_id'=>1,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ショルダーバッグ',
            'seller_id'=>1,
            'category_id'=>1,
            'price'=>1000,
            'description'=>'断捨離のため出品します'],
            ['name'=>'お菓子作りキット',
            'seller_id'=>1,
            'category_id'=>6,
            'price'=>1000,
            'description'=>'お菓子作りしなくなったため出品します'],
            ['name'=>'砂遊びセット',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>1000,
            'description'=>'砂遊びしなくなったため出品します'],
            ['name'=>'サッカーボール',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>3000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ぬいぐるみ',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'絵本セット',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>1000,
            'description'=>'読まなくなったため出品します'],
            ['name'=>'お絵描きセット',
            'seller_id'=>1,
            'category_id'=>10,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
            ['name'=>'ヘルメット',
            'seller_id'=>1,
            'category_id'=>6,
            'price'=>5000,
            'description'=>'サイズが合わないため出品します'],
            [ 'name' => "ワンピース",
            'seller_id'=>1,
            'category_id'=>1,
            'price'=>1000,
            'description'=>'引っ越しのため出品します'],
        ];
        \DB::table('items')->insert($item);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $products = [
      [
        'name' => 'Abacate',
        'price' => 3.45,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'abacate.png',
        'weight' => '230 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Abacaxi',
        'price' => 13.19,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'abacaxi.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Abóbora',
        'price' => 20.00,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'abobora.png',
        'weight' => '1.3 Kg',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Abobrinha',
        'price' => 3.68,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'abobrinha.png',
        'weight' => '350 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Agrião',
        'price' => 3.89,
        'unit' => 'unidade',
        'category' => 'verdura',
        'image' => 'agriao.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Alecrim',
        'price' => 3.89,
        'unit' => 'unidade',
        'category' => 'tempero',
        'image' => 'alecrim.png',
        'weight' => '6 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Alface',
        'price' => 4.39,
        'unit' => 'unidade',
        'category' => 'verdura',
        'image' => 'alface.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Alho Roxo',
        'price' => 2.15,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'alho-roxo.png',
        'weight' => '70 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Ameixa',
        'price' => 2.20,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'ameixa.png',
        'weight' => '100 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Banana',
        'price' => 1.29,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'banana.png',
        'weight' => '110 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Batata Doce',
        'price' => 2.79,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'batata-doce.png',
        'weight' => '300 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Batata Inglesa',
        'price' => 1.49,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'batata-inglesa.png',
        'weight' => '150 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Berinjela',
        'price' => 3.30,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'berinjela.png',
        'weight' => '300 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Beterraba',
        'price' => 2.64,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'beterraba.png',
        'weight' => '200 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Blueberry',
        'price' => 15.39,
        'unit' => 'caixa',
        'category' => 'fruta',
        'image' => 'blueberry.png',
        'weight' => '125 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Brócolis',
        'price' => 8.79,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'brocolis.png',
        'weight' => '300 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Caju',
        'price' => 2.49,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'caju.png',
        'weight' => '150 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Caqui',
        'price' => 2.50,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'caqui.png',
        'weight' => '113 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Cebola Roxa',
        'price' => 0.89,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'cebola-roxa.png',
        'weight' => '230 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Cebola',
        'price' => 7.50,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'cebola.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Cebolinha',
        'price' => 4.95,
        'unit' => 'maço',
        'category' => 'tempero',
        'image' => 'cebolinha.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Cenoura',
        'price' => 3.99,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'cenoura.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Chuchu',
        'price' => 3.55,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'chuchu.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Coco',
        'price' => 7.50,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'coco.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Coentro',
        'price' => 19.69,
        'unit' => 'maço',
        'category' => 'tempero',
        'image' => 'coentro.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Couve Flor',
        'price' => 15.495,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'couve-flor.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Couve',
        'price' => 5.89,
        'unit' => 'maço',
        'category' => 'verdura',
        'image' => 'couve.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Espinafre',
        'price' => 9.95,
        'unit' => 'maço',
        'category' => 'verdura',
        'image' => 'espinafre.png',
        'weight' => '230 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Figo',
        'price' => 16.50,
        'unit' => 'bandeja',
        'category' => 'fruta',
        'image' => 'figo.png',
        'weight' => '230 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Framboesa',
        'price' => 29.49,
        'unit' => 'bandeja',
        'category' => 'fruta',
        'image' => 'framboesa.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Gengibre',
        'price' => 12.39,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'gengibre.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Goiaba',
        'price' => 2.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'goiaba.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Graviola',
        'price' => 52.19,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'graviola.png',
        'weight' => '3.5 kg',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Hortelã',
        'price' => 13.69,
        'unit' => 'maço',
        'category' => 'tempero',
        'image' => 'hortela.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Inhame',
        'price' => 8.59,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'inhame.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Jiló',
        'price' => 9.75,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'jilo.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Kiwi',
        'price' => 2.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'kiwi.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Laranja',
        'price' => 1.79,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'laranja.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Limão',
        'price' => 0.69,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'limao.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Maçã Verde',
        'price' => 2.99,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'maca-verde.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Maçã',
        'price' => 2.35,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'maca.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Mamão',
        'price' => 9.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'mamao.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Manga',
        'price' => 9.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'manga.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Manjericão',
        'price' => 9.50,
        'unit' => 'maço',
        'category' => 'tempero',
        'image' => 'manjericao.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Maracujá',
        'price' => 9.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'maracuja.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Melancia',
        'price' => 17.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'melancia.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Melão',
        'price' => 19.95,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'melao.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Milho',
        'price' => 11.59,
        'unit' => 'bandeja',
        'category' => 'vegetal',
        'image' => 'milho.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Morango',
        'price' => 14.50,
        'unit' => 'bandeja',
        'category' => 'fruta',
        'image' => 'morango.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pepino',
        'price' => 3.95,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'pepino.png',
        'weight' => '500g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pera',
        'price' => 2.29,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'pera.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pêssego',
        'price' => 2.35,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'pessego.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pimenta Cumari',
        'price' => 14.49,
        'unit' => 'bandeja',
        'category' => 'vegetal',
        'image' => 'pimenta-cumari.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pimentão Amarelo',
        'price' => 6.50,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'pimentao-amarelo.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pimentão Verde',
        'price' => 2.99,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'pimentao-verde.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pimentão Vermelho',
        'price' => 6.75,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'pimentao-vermelho.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pinha',
        'price' => 9.50,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'pinha.png',
        'weight' => '400 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Pitaya',
        'price' => 6.99,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'pitaya.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Quiabo',
        'price' => 15.95,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'quiabo.png',
        'weight' => '500 g',
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Repolho Roxo',
        'price' => 12.60,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'repolho-roxo.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Repolho Verde',
        'price' => 8.50,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'repolho-verde.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Salsinha',
        'price' => 6.99,
        'unit' => 'maço',
        'category' => 'tempero',
        'image' => 'salsinha.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Tangerina',
        'price' => 2.55,
        'unit' => 'unidade',
        'category' => 'fruta',
        'image' => 'tangerina.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Tomate',
        'price' => 9.95,
        'unit' => 'unidade',
        'category' => 'vegetal',
        'image' => 'tomate.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Uva Thompson',
        'price' => 14.95,
        'unit' => 'bandeja',
        'category' => 'fruta',
        'image' => 'uva-thompson.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
      [
        'name' => 'Uva Vitória',
        'price' => 12.95,
        'unit' => 'bandeja',
        'category' => 'fruta',
        'image' => 'uva-vitoria.png',
        'weight' => null,
        'discount' => null,
        'discount_price' => null,
      ],
    ];

    DB::table('products')->insert($products);
  }
}

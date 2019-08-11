<?php

use Illuminate\Database\Seeder;

class FarmQuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('quotes')->insert([
            'quote' => 'Farming looks mighty easy when your plow is a pencil and you\'re a thousand miles from the corn field.'
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Urban farming is not only possible, it is crucial. But it can\'t be like the farming techniques of yore. '
        ]);

        DB::table('quotes')->insert([
            'quote' => 'The ultimate goal of farming is not the growing of crops, but the cultivation and perfection of human beings.'
        ]);

        DB::table('quotes')->insert([
            'quote' => 'So organic farming practices are something that, to me, are interlinked with the idea of using biodiesel. '
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Farming with live animals is a 7 day a week, legal form of slavery.'
        ]);

        DB::table('quotes')->insert([
            'quote' => 'It is thus with farming: if you do one thing late, you will be late in all your work.'
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Farming is a most senseless pursuit, a mere laboring in a circle. You sow that you may reap, and then you reap that you may sow. Nothing ever comes of it.  '
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Life on a farm is a school of patience; you can\'t hurry the crops or make an ox in two days.'
        ]);

        DB::table('quotes')->insert([
            'quote' => 'The discovery of agriculture was the first big step toward a civilized life.  '
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Agriculture not only gives riches to a nation, but the only riches she can call her own. '
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Agriculture looks different today - our farmers are using GPS and you can monitor your irrigation systems over the Internet.'
        ]);

        DB::table('quotes')->insert([
            'quote' => 'To make agriculture sustainable, the grower has got to be able to make a profit. '
        ]);

        DB::table('quotes')->insert([
            'quote' => 'Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals, and happiness.  '
        ]);
    }
}

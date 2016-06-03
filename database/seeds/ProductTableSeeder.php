<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product0= new \App\Product([
            'imagePath'=>'http://archeddoorway.com/wp-content/uploads/2012/01/01_fea_name-of-the-wind.jpg',
            'title'=>'Name Of The Wind',
            'description'=>'Told in Kvothe\'s own voice, this is the tale of the magically gifted young man who grows to be the most notorious wizard his world has ever seen.

                        The intimate narrative of his childhood in a troupe of traveling players, his years spent as a near-feral orphan in a crime-ridden city, his daringly brazen yet successful bid to enter a legendary school of magic, and his life as a fugitive after the murder of a king form a gripping coming-of-age story unrivaled in recent literature.

                        A high-action story written with a poet\'s hand, The Name of the Wind is a masterpiece that will transport readers into the body and mind of a wizard.',
            'price'=>12
        ]);
        $product0->save();

        $product1= new \App\Product([
            'imagePath'=>'http://d.gr-assets.com/books/1391535251l/17332218.jpg',
            'title'=>'Stormlight Archive',
            'description'=>'The Stormlight Archive is an ongoing epic fantasy series written by American author Brandon Sanderson. Planned as a ten book series, the first book, The Way of Kings, was published on August 31, 2010 by Tor Books in the United States. The release of the second book, Words of Radiance, was delayed until March 2014 due to Sanderson\'s commitment to writing the final book of The Wheel of Time.',
            'price'=>15
        ]);
        $product1->save();

        $product2= new \App\Product([
            'imagePath'=>'http://aradanicostumes.com/news/wp-content/uploads/2014/03/wotlogo.jpg',
            'title'=>'Wheel Of Time',
            'description'=>'The Wheel of Time is a series of high fantasy novels written by American author James Oliver Rigney Jr., under the pen name Robert Jordan. Originally planned as a six-book series, The Wheel of Time spanned fourteen volumes, in addition to a prequel novel and a companion book. Jordan began writing the first volume, The Eye of the World, in 1984. It was published in January 1990.',
            'price'=>16
        ]);
        $product2->save();

        $product3= new \App\Product([
            'imagePath'=>'https://en.wikipedia.org/wiki/The_Witcher#/media/File:Andrzej_Sapkowski_-_The_Last_Wish.jpg',
            'title'=>'The Witcher',
            'description'=>'The Witcher (Polish: Wiedźmin, Polish pronunciation: [ˈvʲɛd͡ʑmʲin]), by Polish writer Andrzej Sapkowski, is a fantasy series of short stories and novels about the witcher Geralt of Rivia. In Sapkowski\'s books, "Witchers" are monster hunters who (with training and body modification) develop supernatural abilities at a young age to battle deadly monsters. The books have been adapted into a film, a television series, video-games, graphic novel series, and the series of novels is known as the Witcher Saga. The short stories and novels have been translated into several languages, including English.',
            'price'=>10
        ]);
        $product3->save();

        $product4= new \App\Product([
            'imagePath'=>'https://en.wikipedia.org/wiki/Mistborn_series#/media/File:MistbornTrilogy.jpg',
            'title'=>'Mistborn',
            'description'=>'Mistborn is a series of epic fantasy novels written by American author Brandon Sanderson and published by Tor Books. The first series, published between 2006 and 2008, consists of The Final Empire, The Well of Ascension, and The Hero of Ages.

To prepare readers for the second trilogy, Sanderson wrote a transitional sequel, The Alloy of Law, which then turned into the first installment in the four-book Wax and Wayne series set 300 years later.[1][2] The Wax and Wayne book titles are: The Alloy of Law,[1][3][4][5] released on November 8, 2011, Shadows of Self, released on October 6, 2015, The Bands of Mourning, published on January 26, 2016, and The Lost Metal (working title), currently in production.',
            'price'=>18
        ]);
        $product4->save();

    }
}

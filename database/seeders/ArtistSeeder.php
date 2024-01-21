<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::create([
            'name' => 'Sunny Day Real Estate',
            'description' => "Sunny Day Real Estate was an American band formed in Seattle, Washington in 1992. The band helped bring the emo subgenre from an underground musical phenomenon to a wider audience. The band's lineup is Jeremy Enigk (vocals, guitars), Dan Hoerner (guitar), Nate Mendel (bass) and William Goldsmith (drums).",
            'country' => 'United States',
            'formation_year' => '1992',
        ]);
        
        Artist::create([
            'name' => 'Alice in Chains',
            'description' => "Alice in Chains is an American grunge/ alternative metal band from Seattle, Washington, formed in 1987 by guitarist/vocalist Jerry Cantrell and drummer Sean Kinney, who then recruited bassist Mike Starr and lead vocalist Layne Staley. Starr was replaced by Mike Inez in 1993. William DuVall joined the band in 2006 as co-lead vocalist and rhythm guitarist, replacing Staley, who died in 2002. The band took its name from Staley's previous group, the glam metal band Alice N' Chains.",
            'country' => 'United States',
            'formation_year' => '1987',
        ]);

        Artist::create([
            'name' => 'Depeche Mode',
            'description' => 'Depeche Mode is an English band founded in 1980, originally from Basildon, Essex, United Kingdom. They are one of the most enduring and successful bands that emerged during the 80s, particularly from the new wave/new romantic era. The band name is derived from a French fashion magazine, Dépêche mode, which means "fashion dispatch."',
            'country' => 'United Kingdom',
            'formation_year' => '1980',
        ]);

        Artist::create([
            'name' => 'Opeth',
            'description' => "Opeth is a progressive metal band from Sweden that is influenced by many diverse musical styles ranging from 1970s progressive rock to death metal, Their recent releases have deviated from their traditional death metal-influenced style, with more emphasis on progressive elements. Frontman and vocalist Mikael Åkerfeldt is also noted for utilizing both clean singing and death growls, often in the same song. Due to their unique blend of melodic and progressive elements, Opeth are often classified separately from more typical death metal acts. The name Opeth was taken from Wilbur Smith's novel Sunbird, and derived from Opet, a city of the moon named in the novel.",
            'country' => 'Sweden',
            'formation_year' => '1990',
        ]);

        Artist::create([
            'name' => 'BUCK-TICK',
            'description' => 'BUCK-TICK is a Japanese rock band, originally formed by Imai Hisashi in 1983 in Gunma, Japan, with its current line-up lasting since 1985. They are commonly credited as one of the founders of the visual kei movement. As of yet, they have released twenty-two original studio albums and one of self-covers, nearly all reaching the top ten on the charts. Their twenty-third original album, "異空 -IZORA-", is to be released on 12th April 2023.',
            'country' => 'Japan',
            'formation_year' => '1983',
        ]);

        Artist::create([
            'name' => 'Deftones',
            'description' => 'Deftones is an American alternative metal band from Sacramento, California, formed in 1988, consisting of Chino Moreno (lead vocals and guitar), Stephen Carpenter (guitar), Frank Delgado (keyboards and turntables), and Abe Cunningham (drums and percussion). Vega (formerly of Quicksand) took on bass duties from mid-2009 to ca. 2021 in substitution for Chi Cheng, who was seriously injured in an automobile accident in Santa Clara, California on November 4, 2008. Cheng remained in a coma until his death on April 13, 2013, due to cardiac arrest. Fred Sablan is their current live bassist starting in 2022. Lance Jackman plays guitar during non-US shows since Stephen Carpenter no longer travels abroad as of 2022.',
            'country' => 'United States',
            'formation_year' => '1988',
        ]);

        Artist::create([
            'name' => 'Death',
            'description' => 'Death was an American death metal band formed in Altamonte Springs, Florida in 1984 by guitarist and vocalist Chuck Schuldiner. Death is considered to be among the most influential bands in heavy metal and a pioneering force in the extreme metal subgenre of death metal. Their debut album, Scream Bloody Gore, has been widely regarded one of the first death metal records, alongside the first records from Possessed and Necrophagia.',
            'country' => 'United States',
            'formation_year' => '1984',
        ]);

        Artist::create([
            'name' => 'Bladee',
            'description' => 'Benjamin Thage Dag Reichwald (born 9 April 1994 in Stockholm, Sweden), known professionally as Bladee is a Rapper, singer, songwriter, record-producer, fashion designer and founding member of the artistic collective Drain Gang (fka Gravity Boys/Shield Gang/Smög Boys) and a former member of Krossad alonside ECCO2k. He has also released music as Evil Bladee, Ken Burns & DJ Baby Icy Yeti.',
            'country' => 'Sweden',
            'formation_year' => '2012',
        ]);

        Artist::create([
            'name' => 'Joy Division',
            'description' => 'Joy Division was a post-punk band formed in 1976 in Salford, Greater Manchester, United Kingdom. Originally named Warsaw, the band consisted of Ian Curtis (vocals and occasional guitar), Bernard Sumner (guitar and keyboards), Peter Hook (bass guitar and backing vocals) and Stephen Morris (drums and percussion). The band dissolved in May 1980 after the suicide of its lead singer, Ian Curtis. Much of their popularity/reputation arguably resulted from frequent playings on air by iconic DJ John Peel, but it is easy now to overlook the impact that the first album, Unknown Pleasures, had on post-punk music at the time, as reference the number of prominent bands that cited this album as an influence. The remaining members reformed as New Order and they have gone on to achieve much critical and commercial success.',
            'country' => 'United Kingdom',
            'formation_year' => '1976',
        ]);

        Artist::create([
            'name' => 'Dissection',
            'description' => 'Dissection was a Melodic Death/Black Metal band from Strömstad, Sweden. The 2006 album "Reinkaos" is Conceptual Melodic Thrash/Death Metal or as Jon himself called it "The Metal Of Death". The band was formed in 1989 by Jon Nödtveidt (vocals / lead, rhythm & acoustic guitars). Other members were Ole Öhman (drums), Peter Palmdahl (bass), and John Zwetsloot (rhythm & classic acoustic guitars).',
            'country' => 'Sweden',
            'formation_year' => '1989',
        ]);

    }
}

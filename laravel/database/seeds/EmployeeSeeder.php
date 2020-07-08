<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'lastname' => 'MAILLARD',
            'firstname' => 'Estelle',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'rm_mag0139@nocibe.net',
            'phonenumber' => '+33 (0)6 71 14 56 44',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'PERINEAU',
            'firstname' => 'X.',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'pharmacie.oceane@orange.fr',
            'phonenumber' => '+33 (0)2 40 40 78 78',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'FABRE ',
            'firstname' => 'N.',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'pharmacie.oceane@orange.fr',
            'phonenumber' => '+33 (0)2 40 94 07 81',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DUCLOS',
            'firstname' => 'Julie',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'reze-cc@franckprovost.com',
            'phonenumber' => '+33 (0)6 64 74 48 94',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LEROUX',
            'firstname' => 'Karen',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'stevenkreze@gmail.com',
            'phonenumber' => '+33 (0)6 68 14 19 98',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ALAÏMO',
            'firstname' => 'Aurélie',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => '38.rezeoceane@coiffure-du-monde.com',
            'phonenumber' => '+33 (0)7 71 01 96 44',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LEBEAU',
            'firstname' => 'Valérie',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'mag1698@sephora.fr',
            'phonenumber' => '+33 (0)6 46 00 26 07',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BREVET',
            'firstname' => 'Justine',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'echevalier@damart.com',
            'phonenumber' => '+33 (0)6 08 96 12 49',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'TEIGNE',
            'firstname' => 'Rachelle',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'bellesaunaturel@gmail.com',
            'phonenumber' => '+33 (0)6 37 08 92 55',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MARNIER',
            'firstname' => 'Isab.',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'bellesaunaturel@gmail.com',
            'phonenumber' => '+33 (0)6 33 41 28 36',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'NAY',
            'firstname' => 'Nadège',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'sunshine.bronzage@gmail.com',
            'phonenumber' => '+33 (0)6 79 87 78 45',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'RICORDEAU',
            'firstname' => 'Alexia',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'a.ricordeau@live.fr',
            'phonenumber' => '+33 (0)6 68 68 94 76',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'AUDREN',
            'firstname' => 'Pierrick',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'jdo.oceane@free.fr',
            'phonenumber' => '+33 (0)6 73 54 36 45',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'FICHAUT',
            'firstname' => 'Martine',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'leonidasreze@hotmail.fr',
            'phonenumber' => '+33 (0)6 15 92 71 93',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => '?',
            'firstname' => 'Edouard',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'leonidasreze@hotmail.fr',
            'phonenumber' => '+33 (0)6 33 94 48 90',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'SANS',
            'firstname' => 'Floriane',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'culturel.oceane@scaouest.fr',
            'phonenumber' => '+33 (0)2 51 11 51 28',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DELOR',
            'firstname' => 'Thomas',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'thomasdelor@bijouterie-delor.com',
            'phonenumber' => '+33 (0)6 88 48 41 49 ',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DELOR',
            'firstname' => 'Servanne',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'thomasdelor@bijouterie-delor.com',
            'phonenumber' => '+33 (0)6 88 48 41 49',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DELOR',
            'firstname' => 'Thomas',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'thomasdelor@bijouterie-delor.com',
            'phonenumber' => '+33 (0)6 88 48 41 49',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ROSENBAUM ',
            'firstname' => 'Jean-David',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'deco.club@wanadoo.fr',
            'phonenumber' => '+33 (0)6 11 78 83 83',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ROSENBAUM',
            'firstname' => 'Charles',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'deco.club@wanadoo.fr',
            'phonenumber' => '+33 (0)6 11 78 83 83',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DUBAS',
            'firstname' => 'Sarah',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nantes@moa.fr',
            'phonenumber' => '+33 (0)6 34 01 80 52',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'TOUANG',
            'firstname' => 'Youngling',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'philippeg@touang.fr',
            'phonenumber' => '+33 (0)6 08 76 57 88',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BRUHAY',
            'firstname' => 'Céline',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'm0463@jennyfer.com',
            'phonenumber' => '+33 (0)6 76 15 30 62',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ROUSSEAU',
            'firstname' => 'Anne',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'a.rousseau@jennyfer.com',
            'phonenumber' => '+33 (0)6 76 15 30 62',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GEOFFRIAUD',
            'firstname' => 'Céline',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'c.geoffriaud@orange.fr',
            'phonenumber' => '+33 (0)6 70 52 18 51',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'COUSTAL',
            'firstname' => 'Valérie',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'vcoustal@riu.fr',
            'phonenumber' => '+33 (0)6 70 52 18 51',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GOUPILLEAU',
            'firstname' => 'Hélène',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'jmarcille@groupe-beaumanoir.fr',
            'phonenumber' => '+33 (0)6 73 84 44 80',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GAUTHIER',
            'firstname' => 'Nathalie',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nat.gauthier70@yahoo.fr',
            'phonenumber' => '+33 (0)6 09 82 46 52',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MEREU',
            'firstname' => 'Bernadette',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'bmereu@rougegorge.com',
            'phonenumber' => '+33 (0)6 09 82 46 52',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BONNEAU',
            'firstname' => 'Laurence',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'laurencebonneau2@gmail.com',
            'phonenumber' => '+33 (0)2 40 06 08 14',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'RICHARD',
            'firstname' => 'Stéphanie',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 27 02 33 91',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'VINCENT',
            'firstname' => 'Aurélie',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'aurelie.vincent83@orange.fr',
            'phonenumber' => '+33 (0)6 78 47 06 82',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'HORRHON',
            'firstname' => 'Laëtitia',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 70 19 25 60',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'CLISSON',
            'firstname' => 'Aurélie',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'aclisson@bonoboplanet.fr',
            'phonenumber' => '+33 (0)6 70 19 25 60',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'REDUREAU',
            'firstname' => 'Laetitia',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => '146@okaidi.fr',
            'phonenumber' => '+33 (0)6 95 07 45 05',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'VRIGNAUD',
            'firstname' => 'Sabrina',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => '146@okaidi.fr',
            'phonenumber' => '+33 (0)6 95 07 45 05',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'PARMENTIER',
            'firstname' => 'Olivier',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'oparmentier@idgroupe.com',
            'phonenumber' => '+33 (0)6 95 07 45 05',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'PAIRE',
            'firstname' => 'Audrey',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 89 58 69 85',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'PAIRE',
            'firstname' => 'Eric',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'eric-paire@orange.fr',
            'phonenumber' => '+33 (0)6 89 58 69 85',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ZAOUJAL',
            'firstname' => 'Arma',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'arma.zaoujal@hotmail.fr',
            'phonenumber' => '+33 (0)6 75 96 70 14',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MASSIGES',
            'firstname' => 'Pamela',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'rm0394@promod.fr',
            'phonenumber' => '+33 (0)6 29 75 26 22',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LEMARIE',
            'firstname' => 'Anabelle',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'annabellelemarie@hotmail.fr',
            'phonenumber' => '+33 (0)6 09 92 86 60',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'RODRIGUEZ',
            'firstname' => 'Elsa',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'elsarodriguez2712@hotmail.com',
            'phonenumber' => '+33 (0)6 63 05 29 87',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'FLEURY',
            'firstname' => 'Sabrina',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'sabrina.fleury@armandthiery.fr',
            'phonenumber' => '+33 (0)6 63 05 29 87',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'VINCELOT',
            'firstname' => 'Franck',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'mag0216@celio.com',
            'phonenumber' => '+33 (0)6 95 12 11 81',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'FILLONNEAU',
            'firstname' => 'Florence',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'filou44eurl3@orange.fr',
            'phonenumber' => '+33 (0)6 43 39 61 22',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MALLET',
            'firstname' => 'Philippe',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'beautyshoesreze@gmail.com',
            'phonenumber' => '+33 (0)6 13 93 33 38',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BLYWEERT',
            'firstname' => 'Quentin',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'md264@devred.fr',
            'phonenumber' => '+33 (0)6 23 21 07 87',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MARIETTE',
            'firstname' => 'Nathalie',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nathalie.mariette@devred.fr',
            'phonenumber' => '+33 (0)6 23 21 07 87',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DESMARRES',
            'firstname' => 'Nadège',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nmag189@damart.com',
            'phonenumber' => '+33 (0)6 69 23 28 58',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'CHEVALIER',
            'firstname' => 'Emmanuelle',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'echevalier@damart.com',
            'phonenumber' => '+33 (0)6 69 23 28 58',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LUMINEAU ',
            'firstname' => 'Caroline',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'caroline.lumineau@gmail.com',
            'phonenumber' => '+33 (0)6 24 82 85 54',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BLEVIN ',
            'firstname' => 'Marianne',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'blevinmarianne@gmail.com',
            'phonenumber' => '+33 (0)6 75 57 64 79',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DABURON',
            'firstname' => 'Elvina',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'd.elvina@orange.fr',
            'phonenumber' => '+33 (0)6 40 46 37 39',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MARTINET',
            'firstname' => 'Annabelle',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'annabelle_martinet@yahoo.fr',
            'phonenumber' => '+33 (0)6 26 77 39 51',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'NOP',
            'firstname' => 'Soprani',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'vyktoretleoreze@gmail.com',
            'phonenumber' => '+33 (0)6 15 52 58 75',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GERGAUD',
            'firstname' => 'Patrick',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'vyktoretleoreze@gmail.com',
            'phonenumber' => '+33 (0)6 50 96 99 15',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GALLIER',
            'firstname' => 'Pauline',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => NULL,
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'RANCIERE',
            'firstname' => 'Vincent',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'vincent.ranciere@ranciere.fr',
            'phonenumber' => '+33 (0)6 23 41 42 43',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'AMIEL',
            'firstname' => 'Caroline',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'caroline.amiel@yahoo.fr',
            'phonenumber' => '+33 (0)6 04 59 12 16',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DISERBEAU',
            'firstname' => 'Aurélie',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'aurelie.diserbeau@gmail.com',
            'phonenumber' => '+33 (0)6 78 08 07 72',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GUILLAMO',
            'firstname' => 'Elisabeth',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'z.reze.oceane@kidilizgroup.com',
            'phonenumber' => '+33 (0)6 80 18 29 21',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MATHIEU',
            'firstname' => 'Clara',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'clara.mathieu@store.hm.com',
            'phonenumber' => '+33 (0)6 74 45 57 19',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GIRAUDET',
            'firstname' => 'Vanessa',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 64 28 30 41',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'COSTARD',
            'firstname' => 'Delphine',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 81 81 68 46',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GERVAIS',
            'firstname' => 'Nadia',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nadia.gervais@hm.com',
            'phonenumber' => '+33 (0)6 15 54 03 66',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DUBOIS',
            'firstname' => 'Nicolas',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nicolas.dubois@hm.com',
            'phonenumber' => NULL,
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'TELENCZAK',
            'firstname' => 'Jérôme',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'jerome.telenczak@hm.com',
            'phonenumber' => NULL,
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MARCADET',
            'firstname' => 'Marie',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'mmarcadet80@hotmail.fr',
            'phonenumber' => '+33 (0)6 80 35 41 28',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BARRE',
            'firstname' => 'Virginie',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 70 53 71 88',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BOUYER',
            'firstname' => 'Stéphanie',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'phaniebouyer@yahoo.fr',
            'phonenumber' => '+33 (0)6 61 95 13 40',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'SIRAS',
            'firstname' => 'Isabelle',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'rezeoceane@leclercvoyages.com',
            'phonenumber' => '+33 (0)6 63 22 15 88',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MASCLET',
            'firstname' => 'Régis',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'regis.masclet@sfr.fr',
            'phonenumber' => '+33 (0)6 18 45 44 59',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'NAJAH',
            'firstname' => 'Abdel',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'mg.presse@wanadoo.fr',
            'phonenumber' => '+33 (0)7 71 01 75 73',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'SAGOT-DUVAUROUX',
            'firstname' => 'Nathalie',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'nathaliesagot@aol.com',
            'phonenumber' => '+33 (0)6 98 53 54 58',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LUCAS',
            'firstname' => 'Olivier',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'change.atlantique@gmail.com',
            'phonenumber' => '+33 (0)6 04 50 34 99',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ANDRE',
            'firstname' => 'David',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'da.andre@docteur-it.com',
            'phonenumber' => '+33 (0)7 68 72 07 12',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MENARD',
            'firstname' => 'Joachim',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)7 68 26 18 22',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BOURZEIX',
            'firstname' => 'Franck',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'franck.bourzeix@laposte.fr',
            'phonenumber' => '+33 (0)6 80 13 74 77',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'TREILLET',
            'firstname' => 'Grégory',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'gregory.treillet@orange.com',
            'phonenumber' => '+33 (0)7 86 62 17 98',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'CORBINEAU',
            'firstname' => 'Caroline',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'cacailla@rcbt.fr',
            'phonenumber' => '+33 (0)6 60 31 26 88',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'BOUYER',
            'firstname' => 'Stéphanie',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'phaniebouyer@yahoo.fr',
            'phonenumber' => '+33 (0)6 61 95 13 40',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'JAFFRE',
            'firstname' => 'Jean-Hugues',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'oceane@cordonnerie.info',
            'phonenumber' => '+33 (0)6 36 36 47 83',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'JOUSSELIN',
            'firstname' => 'Jean-Yves',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'jyjousselin@yahoo.fr',
            'phonenumber' => '+33 (0)6 88 23 23 15',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LORET',
            'firstname' => 'Thomas',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'vapeco4402@nvainvest.com',
            'phonenumber' => '+33 (0)6 76 84 50 64',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GUEHENNEC',
            'firstname' => 'Marc',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'marc.guehennec@maramu.fr',
            'phonenumber' => '+33 (0)6 18 02 35 59',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DUPAS',
            'firstname' => 'Marc',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'marc.dupas@sfr.fr',
            'phonenumber' => '+33 (0)6 83 61 61 97',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GUISSEAU',
            'firstname' => 'Dominique',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'meurlcreperiealize@sfr.fr',
            'phonenumber' => '+33 (0)6 80 52 32 64',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'MARIE',
            'firstname' => 'Renaud',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'renaudmarie44@gmail.com',
            'phonenumber' => '+33 (0)6 62 40 70 45',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'LEROUX',
            'firstname' => 'Martin',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'italysdineroceane@gmail.com',
            'phonenumber' => '+33 (0)6 41 71 14 49',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'DUPAS',
            'firstname' => 'Marc',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'marc.dupas@sfr.fr',
            'phonenumber' => '+33 (0)6 83 61 61 97',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'PATRON',
            'firstname' => 'Anthony',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'restaurant-lepointvirgule@orange.fr',
            'phonenumber' => '+33 (0)6 31 50 64 73',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'SAWHNEY',
            'firstname' => 'Saurabh',
            'role' => 2,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'saurabh.simon@gmail.com',
            'phonenumber' => '+33 (0)6 63 04 15 79',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'CRESPIN',
            'firstname' => 'Romain',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'romaincrespin0609@gmail.com',
            'phonenumber' => '+33 (0)6 43 84 14 55',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'GUERIN',
            'firstname' => 'Alain',
            'role' => 1,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'albanchampenois.intersport@gmail.com',
            'phonenumber' => '+33 (0)6 07 35 01 85',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'M\'BAMBY TOUMBA',
            'firstname' => 'Landry',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => 'fitnessoceane@gmail.com',
            'phonenumber' => '+33 (0)6 63 29 43 73',
        ]);
		
		DB::table('employees')->insert([
            'lastname' => 'ELISE',
            'firstname' => 'Stéphane',
            'role' => 0,
            'active' => 1,
            'exit_date' => NULL,
            'email' => NULL,
            'phonenumber' => '+33 (0)6 50 24 91 28',
        ]);
    }
}

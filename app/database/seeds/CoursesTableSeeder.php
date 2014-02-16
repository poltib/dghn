<?php

class CoursesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('courses')->delete();

		Course::create([
            'name' => 'Ecole de natation',
            'horraire' => 'Les cours se donnent à la piscine de Grâce-Hollogne :</br>
Les Mardi, Mercredi et Vendredi de 19h10 à 19h50</br>
Le Samedi de 12h10 à 12h50',
            'price' => '22,00€/mois à raison de 2 cours/semaine</br>
15€/mois à raison d\'1 cours/semaine</br>
A partir du 3ème nageur dans la famille, une réduction de 50% peut-être appliquée sur la cotisation.</br>
La cotisation comprend l\'assurance et l\'inscription au club.',
            'description' => 'L\'école de natation accueille vos enfants à partir de l\'âge de 3 ans accomplis.
Le programme des cours prévoit une accoutumance à l\'eau et l\'apprentissage des bases de la natation et des différentes nages.',
            'section_id' => '1'    
        ]);

        Course::create([
            'name' => 'Pré-compétition',
            'horraire' => 'Le Mardi de 19h50 à 21h00</br>
Le Mercredi de 19h00 à 21h00</br>
Le Vendredi de 19h50 à 21h00</br>
Le Samedi de 12h00 à 13h00',
            'price' => '22,00€/mois à raison de deux jours/semaine</br>
La cotisation comprend l\'assurance et l\'inscription au club.',
            'description' => 'Le groupe pré-compétition, permet à vos enfants de se perfectionner dans les différents styles de nage, et les prépare à l\'étape suivante : la compétition.</br></br>

Ce groupe est uniquement accessible après passage à l\'école de natation et à la demande du moniteur/entraîneur.',
            'section_id' => '1'    
        ]);

        Course::create([
            'name' => 'Compétition',
            'horraire' => 'Le Mardi de 19h50 à 21h30</br>
Le Mercredi de 19h00 à 21h00</br>
Le Vendredi de 19h50 à 21h30</br>
Le Samedi de 12h00 à 13h00</br></br>
La première demi-heure du mardi et du vendredi est consacrée à un l\'échauffement et du travail à sec sur les plages du bassin.',
            'price' => 'Cotisation annuelle de 324,00€ dont le payement est réparti sur 12 mois à raison de 27,00€ par mois.</br></br>
La licence annuelle et les inscriptions aux différentes compétitions sont prises en charge par le club.',
            'description' => 'Le groupe compétition du DGHN participe aux différentes épreuves des fédérations, à savoir : les championnats de Belgique, les championnats francophone, les compétitions inter-clubs,... </br></br>

Ce groupe est uniquement accessible après passage au groupe pré-compétition et à la demande du moniteur/entraîneur ou transfert d\'un groupe compétition d\'un autre club.',
            'section_id' => '1'    
        ]);

        Course::create([
            'name' => 'Masters',
            'horraire' => 'Les Mardi, Mercredi et Vendredi de 20h00 à 21h00',
            'price' => '29,00€ pour une carte de 10 cours</br>

La cotisation comprend l\'assurance et l\'inscription au club.',
            'description' => 'Le groupe Master est ouvert aux adultes désireux d\'apprendre, de se perfectionner ou, tout simplement, de pratiquer de la natation dans un groupe encadré par des moniteurs.',
            'section_id' => '1'    
        ]);

        Course::create([
            'name' => 'Aquagym',
            'horraire' => 'Les Mardi, Mercredi et Vendredi de 20h00 à 21h00',
            'price' => '40,00€ pour une carte de 12 cours</br>
22,00€ pour une carte de 6 cours </br>
4,00€ pour 1 cours</br>
La cotisation comprend l\'assurance et l\'inscription au club.',
            'description' => 'La gymnastique aquatique est une méthode de musculation (sous forme de gymnastique effectuée dans l\'eau) qui se pratique en piscine. Elle met en oeuvre la résistance de l\'eau aux mouvements. C\'est une activité sans risque, accessible à tous, puisqu\'il n\'y a pas de contrainte mécanique.',
            'section_id' => '2'    
        ]);
	}

}

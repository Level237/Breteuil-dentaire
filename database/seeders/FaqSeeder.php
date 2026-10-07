<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        if (Faq::query()->exists()) {
            return;
        }

        foreach ($this->items() as $index => $item) {
            Faq::query()->create([
                'category' => $item['category'],
                'question' => $item['question'],
                'answer' => $item['answer'],
                'sort_order' => $index + 1,
                'is_published' => true,
            ]);
        }
    }

    private function items(): array
    {
        return [
            [
                'category' => 'Implant dentaire',
                'question' => 'Qu’est-ce qu’un implant dentaire ?',
                'answer' => 'Un implant dentaire est une racine artificielle en titane, biocompatible, et sert à remplacer la racine d’une dent abîmée ou manquante. Il sert de support à une prothèse dentaire fixe (couronne, bridge) ou de point d’ancrage à une prothèse dentaire amovible. Une ou plusieurs dents manquantes ? Nous vous proposons la solution la mieux adaptée à votre situation, pour un résultat optimal.',
            ],
            [
                'category' => 'Implant dentaire',
                'question' => 'Est-ce que cela fait mal ?',
                'answer' => 'La mise en place d’un implant dentaire se fait sous anesthésie locale, la même que celle des soins. On ne sent aucune douleur pendant l’intervention. Au réveil, pas de douleur non plus, si ce n’est la gencive sensible.',
            ],
            [
                'category' => 'Implant dentaire',
                'question' => 'Combien de temps dure un implant dentaire ?',
                'answer' => 'Un implant dentaire est un dispositif médical, à ce titre on ne peut dire qu’il est « à vie », cependant les implants dentaires font partie des traitements les plus pérennes. Une hygiène dentaire adaptée et une prophylaxie sont à prendre en compte pour la pérennité du traitement implantaire et prothétique.',
            ],
            [
                'category' => 'Implant dentaire',
                'question' => 'Quel est le coût des implants dentaires ?',
                'answer' => 'Chaque patient demande une étude personnalisée pour établir avec précision un prix et un plan de traitement. Ce type d’implant dentaire n’est pas remboursé par la sécurité sociale, ceci étant certaines complémentaires de santé peuvent prendre en charge une partie de l’acte.',
            ],
            [
                'category' => 'Implant dentaire',
                'question' => 'Y-a-t-il un âge limite ?',
                'answer' => 'Après la fin de la croissance de la face, environ entre 20 et 23 ans, il n’y a pas de limite d’âge pour avoir des implants dentaires.',
            ],
            [
                'category' => 'Implant dentaire',
                'question' => 'On m’a dit que je n’ai pas assez d’os ?',
                'answer' => 'Seul un scanner dentaire 3D permet avec précision de déterminer s’il y a assez d’os ou non. Dans l’éventualité où il n’y aurait pas assez d’os, il existe des solutions alternatives. Par exemple combler le volume osseux manquant avec un substitut, soit utiliser des implants courts. Même en cas de faible hauteur d’os résiduelle, on utilise la chirurgie guidée pratiquée au sein du cabinet. Elle permet de traiter des cas jusqu’alors considérés comme impossible à réaliser.',
            ],
            [
                'category' => 'Implant dentaire',
                'question' => 'Est-ce que cela est sûr ?',
                'answer' => 'Des protocoles rigoureux, avérés et maîtrisés nous garantissent un travail adapté à la situation, avec environ 95 % de réussite. Dans les 5 % restants, nous déposons l’implant mobile et après un mois de cicatrisation nous reposons gracieusement un implant dentaire, cela ne fait que retarder un peu la fin du traitement.',
            ],
        ];
    }
}

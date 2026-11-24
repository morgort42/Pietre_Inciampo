<?php


class PeopleRepository
{
    static function getPeople() : array
    {
        return [
            '1' => [ 
                'nome' => 'Giacomo',
                'cognome' => 'Mottinelli',
                'nazionalita' => 'Italiano',
                'professione' => 'Politico',
                'anno_nascita' => 1927,
                'anno_deportazione' => 1944,
                'data_assassinio' => 4/5/1945,
                'locazione_campo' => 'Mauthausen Gusen',
                'immagine_cielo' => 'Giacomo_Mottinelli_cielo.jpg',
                'immagine_frontale' => 'Giacomo_Mottinelli_frontale.jpg',
                'immagine_pietra' => 'Giacomo_Mottinelli_pietra.jpg',
                'descrizione_immagine_cielo' => 'Immagine luogo abitazione dal basso',
                'descrizione_immagine_frontale' => 'Immagine luogo abitazione frontale',
                'descrizione_immagine_pietra' => 'Immagine della pietra d\'inciampo dedicata al deportato',

            ],
            '2' => [
                'nome' => 'Ada',
                'cognome' => 'Lovelace',
                'nazionalita' => 'Inglese',
                'anno_nascita' => 1815,
            ],
        ];
    }
    static function getPeopleByID(int $id) : array
    {
        $persone = self::getPeople();
        return $persone[$id];
    }
}
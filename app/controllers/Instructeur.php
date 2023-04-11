<?php

class Instructeur extends BaseController
{
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }

    public function index()
{
    $instructeurs = $this->instructeurModel->getInstructeurs();
    $aantalInstructeurs = count($instructeurs);

    $rows = '';
    foreach ($instructeurs as $result) {
        $rows .= "<tr>
                    <td>$result->Id</td>
                    <td>$result->Voornaam</td> 
                    <td>$result->Tussenvoegsel</td>
                    <td>$result->Achternaam</td>
                    <td>$result->Mobiel</td>
                    <td>$result->DatumInDienst</td>
                    <td>$result->AantalSterren</td>
                    <td><a href='/voertuig/$result->Id'><i class='fa fa-car'></i></a></td>
                  </tr>";
                  
    }

    $data = [
        'title' => 'Instructeurs in dienst',
        'aantal' => "Aantal instructeurs in dienst: $aantalInstructeurs",
        'records' => 'info uit de database',
        'rows'    => $rows
    ];

    $this->view('instructeur/index', $data);
}
}
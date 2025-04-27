<?php

namespace Config;

use CodeIgniter\Validation\Validation as BaseValidation;

class Validation extends BaseValidation
{
    public array $eventCreate = [
        'name' => [
            'label' => 'Event Name',
            'rules' => 'required|min_length[3]|max_length[255]',
        ],
        'venue' => [
            'label' => 'Venue',
            'rules' => 'required|min_length[3]|max_length[255]',
        ],
        'date' => [
            'label' => 'Event Date',
            'rules' => 'required|valid_date[Y-m-d]',
        ],
    ];
}

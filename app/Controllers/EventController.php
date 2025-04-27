<?php

namespace App\Controllers;

use App\Models\EventModel;
use CodeIgniter\Controller;

class EventController extends Controller
{
    /**
     * Handles the creation of a new event.
     * - Displays the event creation form.
     * - Validates the form input.
     * - Inserts the event data into the database if validation passes.
     */
    public function create()
    {
        // Load form and URL helpers for form handling and redirection.
        helper(['form', 'url']);

        if ($this->request->getMethod() === 'post') {
            // Validate the form input using the 'eventCreate' validation group.
            if (!$this->validate('eventCreate')) {
                return view('events/create', [
                    'validation' => $this->validator,
                ]);
            }

            // Initialize the EventModel to interact with the database.
            $eventModel = new EventModel();

            // Collect event data from the form input.
            $eventData = [
                'name'  => $this->request->getPost('name'),
                'venue' => $this->request->getPost('venue'),
                'date'  => $this->request->getPost('date'),
            ];

            // Attempt to insert the event data into the database.
            if ($eventModel->insert($eventData)) {
                return redirect()->to('/events')->with('success', 'Event created successfully.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create event.');
            }
        }

        return view('events/create');
    }
}

/*
Security Approach:
- Validation group 'eventCreate' used from Config\Validation.php ensures input validation.
- Inputs are automatically checked before being written to the database.
- CSRF protection is built-in via form_open(), preventing cross-site request forgery attacks.
- Query Builder and escaping mechanisms prevent SQL Injection and XSS vulnerabilities.
*/

# Hot House Jazz Magazine - CI4 Technical Test

## Submission Includes:
- **Refactored Controller**: `EventController` (utilizes Query Builder, Validation, CSRF, and error handling)
- **EventModel**: For interacting with the `events` table

## Folder Structure:
```
app/
├── Controllers/
│   └── EventController.php
├── Models/
│   └── EventModel.php
├── Views/
│   └── events/
│       └── create.php
├── Config/
│   └── Validation.php
└── README.txt
```

## Security Approach:
- **Input Validation**: Using CodeIgniter 4 Validation service
- **SQL Injection Protection**: Through Query Builder
- **XSS Protection**
- **CSRF Protection**
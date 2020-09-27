<?php

return [
    'send_email_to' => env('FEEDBACK_ADMIN_EMAIL', 'user@admin.com'),
    'from_address' => env('MAIL_FROM_ADDRESS', 'user@admin.com'),
    'enabled' => env('FEEDBACK_ADMIN_EMAIL_ENABLED', true),
];

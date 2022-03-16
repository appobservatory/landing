<?php

return [
  'production' => false,
  'baseUrl' => 'https://appobservatory.com',
  'title' => 'Web Application Monitoring | App Observatory',
  'description' => 'Monitor your web application for availability, response time, and dependency updates.',
  'keywords' => 'web application, monitoring, updates, apps, up time',
  'collections' => [
    'updates' => [
      'path' => '/updates/{-title}',
      'sort' => ['-date']
    ]
  ],
];

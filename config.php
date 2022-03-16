<?php

return [
  'production' => false,
  'baseUrl' => 'https://appobservatory.com',
  'title' => 'Web Application Monitoring | App Observatory',
  'description' => 'Monitor your web application for availability, site up-time, page response time, and dependency updates.',
  'keywords' => 'web application, monitoring, updates, apps, page response time, site uptime monitoring, app observatory, pingdom, solarwinds',
  'collections' => [
    'updates' => [
      'path' => '/updates/{-title}',
      'sort' => ['-date']
    ]
  ],
];

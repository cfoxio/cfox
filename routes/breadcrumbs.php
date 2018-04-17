<?php

// Dashboard
Breadcrumbs::register('main.dashboard', function($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('main.dashboard'));
});

Breadcrumbs::register('main.clans.create', function ($breadcrumbs) {
    $breadcrumbs->parent('main.dashboard');
    $breadcrumbs->push('Create new clan', route('main.clans.create'));
});

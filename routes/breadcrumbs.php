<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Bacheca', route('home'));
});

Breadcrumbs::for('errors.404', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Pagina non trovata');
});


// Home > Profilo
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Profilo', route('profile'));
});

// Home > Pannello di controllo
Breadcrumbs::for('admin.admin.acp', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pannello di controllo', route('admin.admin.acp'));
});

// Home > Pannello di controllo > Utenti
Breadcrumbs::for('admin.users.index', function (BreadcrumbTrail $trail) {
  $trail->parent('admin.admin.acp');
  $trail->push('Utenti', route('admin.users.index'));
});

// Home > Pannello di controllo > Command
  Breadcrumbs::for('admin.admin.command', function (BreadcrumbTrail $trail) {
  $trail->parent('admin.admin.acp');
  $trail->push('Artisan command', route('admin.admin.command'));
});



// Home > Pannello di controllo > Permessi
Breadcrumbs::for('admin.permissions.index', function (BreadcrumbTrail $trail) {
  $trail->parent('admin.admin.acp');
  $trail->push('Permessi', route('admin.permissions.index'));
});
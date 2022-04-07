<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// macro per CRUD
Breadcrumbs::macro('resource', function (string $parent, string $name, string $title, string $item) {
  // Home > Blog
  Breadcrumbs::for("{$name}.index", function (BreadcrumbTrail $trail) use ($parent, $name, $title) {
      $trail->parent($parent);
      $trail->push($title, route("{$name}.index"));
  });

  // Home > Blog > New
  Breadcrumbs::for("{$name}.create", function (BreadcrumbTrail $trail) use ($name) {
      $trail->parent("{$name}.index");
      $trail->push('Nuovo', route("{$name}.create"));
  });

  // Home > Blog > Post 123
  Breadcrumbs::for("{$name}.show", function (BreadcrumbTrail $trail, $model) use ($name, $item) {
      $trail->parent("{$name}.index");
      $trail->push($item, route("{$name}.show", $model));
  });

  // Home > Blog > Post 123 > Edit
  Breadcrumbs::for("{$name}.edit", function (BreadcrumbTrail $trail, $model) use ($name) {
      $trail->parent("{$name}.show", $model);
      $trail->push('Modifica', route("{$name}.edit", $model));
  });
});
// macro per CRUD



// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Bacheca', route('dashboard'));
});

Breadcrumbs::for('errors.404', function (BreadcrumbTrail $trail) {
  $trail->parent('dashboard');
  $trail->push('Pagina non trovata');
});


// Home > Profilo
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Profilo', route('profile'));
});

// Home > Pannello di controllo
Breadcrumbs::for('admin.acp', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Pannello di controllo', route('admin.acp'));
});

// CRUD
Breadcrumbs::resource('admin.acp', 'admin.users', 'Utenti', 'Utente');
Breadcrumbs::resource('admin.acp', 'admin.permissions', 'Permessi','Permesso');
Breadcrumbs::resource('admin.acp', 'admin.templates', 'Modelli', 'Modello');


// Home > Pannello di controllo > Command
Breadcrumbs::for('admin.artisan', function (BreadcrumbTrail $trail) {
  $trail->parent('admin.acp');
  $trail->push('Artisan command', route('admin.artisan'));
});


<?php

// Users

Breadcrumbs::register('admin.users.index', function($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(Str::title(trans_choice('modules.users.users', 2)), route('admin.users.index'));
});

Breadcrumbs::register('admin.users.edit', function($breadcrumbs, $user_id) {
	$user = Sentry::findUserById($user_id);
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($user->first_name . ' ' . $user->last_name, route('admin.users.edit', $user_id));
});

Breadcrumbs::register('admin.users.create', function($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push(trans('modules.users.New'), route('admin.users.create'));
});
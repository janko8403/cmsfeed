<?php

// use App\Auth;


function is_admin() 
{
	return (Auth::check() && Auth::user()->role->type === 'admin');
}

function is_editor() 
{
	return (Auth::check() && Auth::user()->role->type === 'editor');
}

function is_user()
{
	return (Auth::check() && Auth::user()->role->type === 'user');
}
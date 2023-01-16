<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple Laravel Project Test

Using the Laravel Framework, create a simple system where a user can login and view their dashboard with a certain set of User Roles and access roles to certain page. This page will show the list of documents uploaded by the Standard Users. Standard users will only be able to upload the file and they cannot change or delete it after it was uploaded. they can also add a few details such as title and description of the uploaded file. All fields should be marked as required.

Admin users will have the ability to modify or update the details from the list of files uploaded by the user.

## Package
This test project is using the laravel breeze kickstart project with spatie/laravel-permission package.
## Setup

- check out main branch
- do composer install
- do artisan migrate
- do artisan db:seed, default user is super@mail.com, pass: 12345678

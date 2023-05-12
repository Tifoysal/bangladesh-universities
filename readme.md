## List of Universities in Bangladesh

### Installation
You can install the package via composer:

> composer require tifoysal/bangladesh-universities

Setup everything with just running one artisan command

> php artisan BangladeshUniversity:setup

### Usage
> use Tifoysal\BangladeshUniversities\Models\University;

> $universities = University::all();


> $university = University::where('name', 'International University of Business Agriculture and Technology')->first();

> $universitiesByLocation = University::where('location', 'Dhaka')->get();

`Use any Laravel (eluquent) model functions`

[Inspiration from ](https://github.com/devfaysal)

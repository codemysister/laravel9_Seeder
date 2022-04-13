<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faker-instance', function () {
    // $faker = \Faker\Factory::create();
    $faker = Faker::create();
    dump($faker);
});

Route::get('/faker-method', function () {
    $faker = Faker::create();
    echo $faker->name();
    echo "<hr>";
    echo $faker->address();
    echo "<hr>";
    echo $faker->text();
    echo "<hr>";
});

Route::get('/faker-loop', function () {
    $faker = Faker::create();
    for ($i = 0; $i < 10; $i++) {
        echo "{$faker->name()}, {$faker->address()} <hr>";
    }
});

Route::get('/faker-loop-id', function () {
    $faker = Faker::create('id_ID');
    for ($i = 0; $i < 10; $i++) {
        echo "{$faker->name()}, {$faker->address()} <hr>";
    }
});

Route::get('/faker-base', function () {
    $faker = Faker::create('id_ID');
    echo $faker->name();
    echo "<hr>";
    echo $faker->address();
    echo "<hr>";
    echo $faker->email();
    echo "<hr>";
    echo $faker->company();
    echo "<hr>";
    echo $faker->date();
    echo "<hr>";
    echo $faker->userName();
    echo "<hr>";
    echo $faker->password();
    echo "<hr>";
    echo $faker->url();
    echo "<hr>";
});

Route::get('/faker-number', function () {
    $faker = Faker::create('id_ID');
    echo $faker->randomDigit();
    echo "<hr>";
    echo $faker->randomDigitNot(5);
    echo "<hr>";
    echo $faker->randomDigitNotNull();
    echo "<hr>";
    echo $faker->randomNumber(7);
    echo "<hr>";
    echo $faker->randomFloat(5, 1, 4);
    echo "<hr>";
    echo $faker->numberBetween(100, 199);
    echo "<hr>";
});


Route::get('/faker-alphanumeric', function () {
    $faker = Faker::create('id_ID');
    echo $faker->randomLetter();
    echo "<hr>";
    echo $faker->numerify('ID##AB##');
    echo "<hr>";
    echo $faker->lexify('ID??AB??');
    echo "<hr>";
    echo $faker->bothify('ID##AB??');
    echo "<hr>";
    echo $faker->shuffle("Duniailkom");
    echo "<hr>";
    print_r($faker->shuffle([1, 2, 3, 4, 5]));
    echo "<hr>";
    echo $faker->randomElement(['a', 'b', 'c']);
    echo "<hr>";
    print_r($faker->randomElements(['a', 'b', 'c']));
    echo "<hr>";
    print_r($faker->randomElements(['a', 'b', 'c'], 2));
    echo "<hr>";
});


Route::get('/faker-word', function () {
    $faker = Faker::create('id_ID');
    echo $faker->word();
    echo "<hr>";
    echo $faker->words(3, true);
    echo "<hr>";
    print_r($faker->words(3, false));
    echo "<hr>";
    echo $faker->sentence(5);
    echo "<hr>";
    echo $faker->sentence(5, false);
    echo "<hr>";
    echo $faker->sentences(2, true);
    echo "<hr>";
    echo $faker->paragraph(3);
    echo "<hr>";
    echo $faker->paragraph(3, false);
    echo "<hr>";
    print_r($faker->paragraphs(2, false));
    echo "<hr>";
    echo $faker->text(10);
    echo "<hr>";
});

Route::get('/faker-name', function () {
    $faker = Faker::create('id_ID');
    echo $faker->title();
    echo "<hr>";
    echo $faker->titleMale();
    echo "<hr>";
    echo $faker->titleFemale();
    echo "<hr>";
    echo $faker->suffix();
    echo "<hr>";
    echo $faker->name();
    echo "<hr>";
    echo $faker->firstName();
    echo "<hr>";
    echo $faker->firstNameMale();
    echo "<hr>";
    echo $faker->firstNameFemale();
    echo "<hr>";
    echo $faker->lastName();
    echo "<hr>";
    echo $faker->lastNameMale();
    echo "<hr>";
    echo $faker->lastNameFemale();
    echo "<hr>";
});


Route::get('/faker-address', function () {
    $faker = Faker::create('id_ID');
    echo $faker->buildingNumber();
    echo "<hr>";
    echo $faker->streetName();
    echo "<hr>";
    echo $faker->streetAddress();
    echo "<hr>";
    echo $faker->postcode();
    echo "<hr>";
    echo $faker->city();
    echo "<hr>";
    echo $faker->stateAbbr();
    echo "<hr>";
    echo $faker->state();
    echo "<hr>";
    echo $faker->address();
    echo "<hr>";
    echo $faker->country();
    echo "<hr>";
});

Route::get('/faker-phone', function () {
    $faker = Faker::create('id_ID');
    echo $faker->phoneNumber();
    echo "<hr>";
    echo $faker->company();
    echo "<hr>";
});

Route::get('/faker-internet', function () {
    $faker = Faker::create('id_ID');
    echo $faker->email();
    echo "<hr>";
    echo $faker->safeEmail();
    echo "<hr>";
    echo $faker->freeEmail();
    echo "<hr>";
    echo $faker->companyEmail();
    echo "<hr>";
    echo $faker->freeEmailDomain();
    echo "<hr>";
    echo $faker->safeEmailDomain();
    echo "<hr>";
    echo $faker->userName();
    echo "<hr>";
    echo $faker->password();
    echo "<hr>";
    echo $faker->domainName();
    echo "<hr>";
    echo $faker->domainWord();
    echo "<hr>";
    echo $faker->tld();
    echo "<hr>";
    echo $faker->url();
    echo "<hr>";
    echo $faker->slug();
    echo "<hr>";
    echo $faker->ipv4();
    echo "<hr>";
    echo $faker->localIpv4();
    echo "<hr>";
    echo $faker->ipv6();
    echo "<hr>";
    echo $faker->macAddress();
    echo "<hr>";
});

Route::get('/faker-date', function () {
    $faker = Faker::create('id_ID');
    echo $faker->unixTime();
    echo "<hr>";
    echo $faker->date();
    echo "<hr>";
    echo $faker->date('d/m/Y');
    echo "<hr>";
    echo $faker->date('d/m/Y', '1990-01-01');
    echo "<hr>";
    echo $faker->time();
    echo "<hr>";
    echo $faker->dayOfMonth();
    echo "<hr>";
    echo $faker->dayOfWeek();
    echo "<hr>";
    echo $faker->month();
    echo "<hr>";
    echo $faker->monthName();
    echo "<hr>";
    echo $faker->year();
    echo "<hr>";
});

Route::get('/faker-date-carbon', function () {
    $faker = Faker::create('id_ID');
    $date = \Carbon\Carbon::createFromTimestamp($faker->unixTime)->locale('id');
    echo $date->dayName;
    echo "<hr>";
    echo $date->monthName;
});

Route::get('/faker-date-interval', function () {
    $faker = Faker::create('id_ID');

    print_r($faker->dateTimeBetween('-10 years'));
    echo "<hr>";
    print_r($faker->dateTimeBetween('-10 years', '-5 years'));
    echo "<hr>";
    print_r($faker->dateTimeBetween('2010-01-01', '2015-01-01'));
    echo "<hr>";
    print_r($faker->dateTimeBetween('2022-01-01', '2022-01-31'));
    echo "<hr>";

    print_r($faker->dateTimeInInterval('2022-01-01', '+ 30 days'));
    echo "<hr>";
    print_r($faker->dateTimeInInterval('2022-01-01', '- 1 years'));
    echo "<hr>";

    print_r($faker->dateTimeThisCentury());
    echo "<hr>";

    print_r($faker->dateTimeThisDecade());
    echo "<hr>";
    print_r($faker->dateTimeThisYear());
    echo "<hr>";
    print_r($faker->dateTimeThisMonth());
    echo "<hr>";
});


Route::get('/faker-nik', function () {
    $faker = Faker::create('id_ID');

    echo $faker->nik();
    echo "<hr>";
    echo $faker->nik('male');
    echo "<hr>";
    echo $faker->nik('female');
    echo "<hr>";

    $tgl_lahir = $faker->dateTimeInInterval('1990-01-01', '+5 years');

    echo $faker->nik('male', $tgl_lahir);
    echo "<hr>";
    echo $faker->nik('female', $tgl_lahir);
    echo "<hr>";
});

Route::get('/faker-seed', function () {
    $faker = Faker::create('id_ID');
    $faker->seed(999);

    echo $faker->nik();
    echo "<hr>";
    echo $faker->name();
    echo "<hr>";
    echo $faker->address();
    echo "<hr>";
    echo $faker->email();
    echo "<hr>";
    echo $faker->company();
    echo "<hr>";
});

Route::get('/faker-random-digit', function () {

    $faker = Faker::create('id_ID');
    for ($i = 0; $i < 10; $i++) {
        echo $faker->randomDigit() . ' # ';
    }
});

Route::get('/faker-unique-digit', function () {
    $faker = Faker::create('id_ID');
    for ($i = 0; $i < 10; $i++) {
        echo $faker->unique()->randomDigit() . ' # ';
    }
});

Route::get('/faker-random-array', function () {
    $faker = Faker::create('id_ID');
    $jurusan = ["Ilmu Komputer", "Teknik Informatika", "Sistem Informasi"];

    for ($i = 0; $i < 5; $i++) {
        echo $faker->randomElement($jurusan) . ' # ';
    }
});

Route::get('/faker-unique-array', function () {
    $faker = Faker::create('id_ID');
    $jurusan = ["Ilmu Komputer", "Teknik Informatika", "Sistem Informasi"];

    for ($i = 0; $i < 3; $i++) {
        echo $faker->unique()->randomElement($jurusan) . ' # ';
    }
});

Route::get('/faker-optional-1', function () {
    $faker = Faker::create('id_ID');
    $jurusan = ["Ilmu Komputer", "Teknik Informatika", "Sistem Informasi"];

    for ($i = 0; $i < 10; $i++) {
        var_dump($faker->optional()->randomElement($jurusan));
        echo "<br>";
    }
});

Route::get('/faker-optional-2', function () {
    $faker = Faker::create('id_ID');
    $jurusan = ["Ilmu Komputer", "Teknik Informatika", "Sistem Informasi"];
    for ($i = 0; $i < 10; $i++) {
        var_dump($faker->optional(0.8)->randomElement($jurusan));
        echo "<br>";
    }
});

Route::get('/faker-optional-3', function () {
    $faker = Faker::create('id_ID');
    $jurusan = ["Ilmu Komputer", "Teknik Informatika", "Sistem Informasi"];

    for ($i = 0; $i < 10; $i++) {
        echo $faker->optional(0.2, "Tidak memilih Jurusan")->randomElement($jurusan);
        echo "<br>";
    }
});

Route::get('/faker-mahasiswa', function () {
    $faker = Faker::create('id_ID');

    echo $faker->numerify('10######');
    echo "<br>";
    echo $faker->name();
    echo "<br>";

    $tgl_lahir = $faker->dateTimeInInterval('1999-01-01', '+1 years');
    echo \Carbon\Carbon::parse($tgl_lahir)->isoFormat('D-M-YYYY');
    echo "<br>";

    echo $faker->randomFloat(2, 2, 4);
    echo "<br>";
});

Route::get('/faker-mahasiswa-db', function () {
    $faker = Faker::create('id_ID');

    App\Models\Mahasiswa::create(
        [
            'nim' => $faker->numerify('10######'),
            'nama' => $faker->name(),
            'tanggal_lahir' => $faker->dateTimeInInterval('1999-01-01', '+ 3 years'),
            'ipk' => $faker->randomFloat(2, 2, 4),
        ]
    );

    return "Data mahasiswa berhasil ditambah";
});


Route::get('/faker-mahasiswa-db-loop', function () {
    $faker = Faker::create('id_ID');

    for ($i = 0; $i < 10; $i++) {
        App\Models\Mahasiswa::create(
            [
                'nim' => $faker->numerify('10######'),
                'nama' => $faker->name(),
                'tanggal_lahir' => $faker->dateTimeInInterval('1999-01-01', '+ 3 years'),
                'ipk' => $faker->randomFloat(2, 2, 4),
            ]
        );
    }

    return "Data mahasiswa berhasil ditambah";
});

Route::get('/faker-mahasiswa-db-name', function () {
    $faker = Faker::create('id_ID');

    for ($i = 0; $i < 100; $i++) {
        App\Models\Mahasiswa::create(
            [
                'nim' => $faker->numerify('10######'),
                'nama' => $faker->firstName() . " " . $faker->lastName(),
                'tanggal_lahir' => $faker->dateTimeInInterval('1999-01-01', '+ 3 years'),
                'ipk' => $faker->randomFloat(2, 2, 4),
            ]
        );
    }

    return "Data mahasiswa berhasil ditambah";
});

# Mutasi Bank

Pustaka untuk mengambil data mutasi rekening bank online di Indonesia. Bank yang didukung:

1. Bank Mandiri (sumber: https://github.com/ombapit/mutasi-bank)
2. BCA (sumber: https://github.com/kadekjayak/bca-parser)

Pustaka ini bergantung pada:

* PHP >= 7.0
* PHP Curl
* PHP OpenSSL
* PHP LibXML

## Pengembangan

Untuk mengembangkan, clone repository ini kemudian:

1. Instal dependencies `composer install`
2. Pastikan unit test berhasil `vendor/bin/phpunit`
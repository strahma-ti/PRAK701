<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
    public function run()
    {
        $this->db->table('data_buku')->insertBatch([
            [
                'judul' => 'Harry Potter and the Philosophers Stone',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '1997'
            ],
            [
                'judul' => 'Harry Potter and the Chamber of Secrets',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '1998'
            ],
            [
                'judul' => 'Harry Potter and the Prisoner of Azkaban',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '1999'
            ],
            [
                'judul' => 'Harry Potter and the Goblet of Fire',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '2000'
            ],
            [
                'judul' => 'Harry Potter and the Order of the Phoenix',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '2003'
            ],
            [
                'judul' => 'Harry Potter and the Half-Blood Prince',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '2005'
            ],
            [
                'judul' => 'Harry Potter and the Deathly Hallows',
                'penulis' => 'J. K. Rowling',
                'penerbit' => 'Bloomsburry',
                'tahun_terbit' => '2007'
            ]
        ]);
    }
}

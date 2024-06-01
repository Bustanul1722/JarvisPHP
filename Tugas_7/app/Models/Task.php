<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected static $tasks = [
        [
            'id' => 1,
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-05-29',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12',
        ],
        [
            'id' => 2,
            'name' => 'Matematika',
            'deadline' => '2024-05-30',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal matematika di buku PR halaman 20-25',
        ],
        [
            'id' => 3,
            'name' => 'Fisika',
            'deadline' => '2024-05-31',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal fisika di buku PR halaman 30-35',
        ],
        [
            'id' => 4,
            'name' => 'Kimia',
            'deadline' => '2024-06-01',
            'status' => 'Belum Selesai',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, libero! Id nobis officiis quos in accusantium tenetur doloribus unde repudiandae modi suscipit tempora ut mollitia officia obcaecati vero exercitationem, rerum nisi ipsum expedita velit nostrum! Aliquam cum officiis labore maxime repellat. Repudiandae perspiciatis explicabo quis ipsum ad praesentium, atque labore aperiam sit architecto facilis delectus officiis consequuntur maxime culpa veritatis itaque quibusdam assumenda quasi in corrupti aliquam iste voluptatem ea. Numquam, iure. Pariatur, dolore, nulla quia quaerat tenetur blanditiis accusantium assumenda error molestias dolorem necessitatibus porro nostrum excepturi qui architecto!',
        ]
    ];

    public static function getAll(){
        return self::$tasks;
    }
    public static function find($id) {
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumModel extends Model
{
    protected $table = 'forum';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'pesan'];

    // Fungsi untuk menyimpan data ke database
    public function insertForum($data)
    {
        return $this->insert($data);
    }

    // Fungsi untuk mengambil semua pesan dari tabel forum dan diurutkan berdasarkan ID
    public function getAllMessages()
    {
        return $this->orderBy('id', 'DESC')->findAll(); // Mengambil semua pesan dari tabel forum dan diurutkan berdasarkan ID dari besar ke kecil
    }
}

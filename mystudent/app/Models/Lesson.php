<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // ตั้งค่า fillable fields ที่อนุญาตให้กรอก
    protected $fillable = ['Chapters', 'subject', 'youtube_link','image','pdf_file'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    private $id;
    private $thumb_image;
    private $title;
    private $subtitle;
    private $body;
    private $published_at;
}

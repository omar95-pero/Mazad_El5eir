<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * @var mixed
     */
    private $email;
    /**
     * @var mixed
     */
    private $name;
    /**
     * @var mixed
     */
    private $phone_number;
    /**
     * @var mixed
     */
    private $message;
}

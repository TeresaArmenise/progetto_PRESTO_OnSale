<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'description', 'price', 'category_id', 'user_id'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function getSubdescription(){
        if (strlen($this->description) > 25) {
            return substr($this->description,0 , 25) . '...';
        }else{
            return $this->description;
        }
    }

    
    public function getSubtitle(){
        if (strlen($this->title) > 15) {
            return substr($this->title,0 , 15) . '...';
        }else{
            return $this->title;
        }
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisedCount() {
        return Article::where('is_accepted', null)->count();
    } 

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category
        ];
    }

    public function images() : HasMany{
        return $this->hasMany(Image::class);
    }
}
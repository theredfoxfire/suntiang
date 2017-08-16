<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag', 'title', 'subtitle', 'meta_description',
        'reverse_direction',
    ];

    /**
    * The many-to-many relationship between tags and posts.
    *
    * @return BelongsToMany
    */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'post_tag_pivot');
    }

    /**
    * Add any tags needed from the list
    *
    * @param array $tags List of tags to check/add
    */
    public static function addNeededTags(array $tags)
    {
        if (count($tags) === 0) {
            return;
        }

        $found = static::whereIn('tag', $tags)->pluck('tag')->all();

        foreach (array_diff($tags, $found) as $tag) {
            static::create([
            'tag' => $tag,
            'title' => $tag,
            'subtitle' => 'Subtitle for '.$tag,
            'meta_description' => '',
            'reverse_direction' => false,
            ]);
        }
    }
}

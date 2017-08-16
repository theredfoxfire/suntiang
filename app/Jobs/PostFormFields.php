<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Model\Post;
use App\Model\Tag;
use Carbon\Carbon;

class PostFormFields
{
    /**
    * The id (if any) of the Post row
    *
    * @var integer
    */
    protected $id;

    /**
    * List of fields and default value for each field
    *
    * @var array
    */
    protected $fieldList = [
        'title' => '',
        'subtitle' => '',
        'page_image' => '',
        'content' => '',
        'meta_description' => '',
        'is_draft' => "0",
        'publish_date' => '',
        'publish_time' => '',
        'tags' => [],
    ];

    /**
    * Create a new command instance.
    *
    * @param integer $id
    */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
    * Execute the command.
    *
    * @return array of fieldnames => values
    */
    public function handle()
    {
        $fields = $this->fieldList;

        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        } else {
            $when = Carbon::now()->addHour();
            $fields['publish_date'] = $when->format('M-j-Y');
            $fields['publish_time'] = $when->format('g:i A');
        }

        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        return array_merge(
            $fields,
            ['allTags' => Tag::pluck('tag')->all()]
        );
    }

    /**
    * Return the field values from the model
    *
    * @param integer $id
    * @param array $fields
    * @return array
    */
    protected function fieldsFromModel($id, array $fields)
    {
        $post = Post::findOrFail($id);

        $fieldNames = array_keys(array_except($fields, ['tags']));

        $fields = ['id' => $id];
            foreach ($fieldNames as $field) {
            $fields[$field] = $post->{$field};
        }

        $fields['tags'] = $post->tags()->pluck('tag')->all();

        return $fields;
    }
}

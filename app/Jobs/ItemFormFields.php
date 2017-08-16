<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Model\Item;
use App\Model\Categories;
use Carbon\Carbon;

class ItemFormFields
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
        'name' => '',
        'photo' => '',
        'oldPhoto' => '',
        'is_active' => '',
        'description' => '',
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
        }

        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        return array_merge(
            $fields,
            ['allTags' => Categories::pluck('name')->all()]
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
        $item = Item::findOrFail($id);

        $fieldNames = array_keys(array_except($fields, ['tags']));

        $fields = ['id' => $id];
            foreach ($fieldNames as $field) {
            $fields[$field] = $item->{$field};
        }

        $fields['tags'] = $item->tags()->pluck('name')->all();

        return $fields;
    }
}

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
        'convertion' => '',
        'daily_price' => '',
        'condiment_price' => '',
        'catering_price_50' => '',
        'catering_price_75' => '',
        'catering_price_100' => '',
        'is_stall' => '',
        'is_condiment' => '',
        'is_drink' => '',
        'name' => '',
        'photo' => '',
        'oldPhoto' => '',
        'is_active' => '',
        'description' => '',
        'category' => [],
        'area' => [],
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
            ['allCategory' => Categories::where('type', '!=', 'region')->pluck('name')->all()],
            ['allArea' => Categories::where('type', 'region')->pluck('name')->all()],
            ['allDrink' => Item::where('is_drink', 1)->where('id', '!=', $this->id)->pluck('name')->all()],
            ['allCondiment' => Item::where('is_condiment', 1)->where('id', '!=', $this->id)->whereNull('is_drink')->orWhere('is_drink', 0)->pluck('name')->all()]
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

        $fieldNames = array_keys(array_except($fields, ['area', 'category', 'drink', 'condiment']));

        $fields = ['id' => $id];
            foreach ($fieldNames as $field) {
            $fields[$field] = $item->{$field};
        }
        $fields['area'] = $item->tags()->where('type', 'region')->pluck('name')->all();
        $fields['category'] = $item->tags()->where('type', '!=', 'region')->pluck('name')->all();
        $fields['drink'] = $item->getChild('drink', $id);
        $fields['condiment'] = $item->getChild('condiment', $id);

        return $fields;
    }
}

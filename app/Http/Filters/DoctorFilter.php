<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class DoctorFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const SURNAME = 'surname';
    public const PATRNAME = 'patrname';
    public const AGE = 'age';
    public const IS_VISIBLE = 'is_visible';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::SURNAME => [$this, 'surname'],
            self::PATRNAME => [$this, 'patrname'],
            self::AGE => [$this, 'age'],
            self::IS_VISIBLE => [$this, 'is_visible'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function surname(Builder $builder, $value)
    {
        $builder->where('surname', 'like', "%{$value}%");
    }
    public function patrname(Builder $builder, $value)
    {
        $builder->where('patrname', 'like', "%{$value}%");
    }
    public function age(Builder $builder, $value)
    {
        $builder->where('age', 'like', "{$value}");
    }
    public function is_visible(Builder $builder, $value)
    {
        $builder->where('is_visible', 'like', "{$value}");
    }

}

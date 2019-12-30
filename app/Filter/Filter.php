<?php

namespace App\Filter;

use Illuminate\Support\Carbon;

class Filter
{

    public $ignore_fields = [];

    public function __construct($ins)
    {
        $this->ins = $ins;
        $this->setFromTo();
    }

    public function ignoreField(array $fields)
    {
        $this->ignore_fields = $fields;
    }

    public function setFromTo()
    {
        $this->setFrom();
        $this->setTo();
    }

    public function setFrom(Type $var = null)
    {
        if ($this->ins->request->from) {
            $this->from = $this->ins->request->from;
        } else {
            $this->from = null;
        }

        if ($this->ins->request->date_duration == "all") {
            $this->from = null;
        }
    }

    public function setTo(Type $var = null)
    {

        if ($this->ins->request->to) {
            $this->to = $this->ins->request->to;
        } else {
            $this->to = Carbon::now()->endOfMonth();
        }

        if ($this->ins->request->date_duration == "all") {
            $this->to = null;
        }
    }

    public function fromToCondition($query, String $col)
    {

        if ($this->from == null) {
            return $query;
        }

        return $query->whereDate($col, '>=', $this->from)
            ->whereDate($col, '<=', $this->to);
    }

    public function queryFilter($query)
    {
        $this->query = $query;
        $this->query = $this->query->where($this->removeFilterFields());
        return $this->query;
    }

    public function removeFilterFields()
    {
        $array = $this->ins->request->except(['from', 'to', 'page', 'str']);

        if (count($this->ignore_fields) > 0) {
            foreach ($this->ignore_fields as $name) {
                unset($array[$name]);
            }
        }

        $fields = [];

        foreach ($array as $name => $value) {
            if ($value != "all") {
                $fields[$name] = $value;
            }
        }

        $this->ignore_fields = [];
        return $fields;
    }

    public function setToDateToday()
    {
        $this->to = Carbon::now();
    }

    public function setFromDateStart()
    {
        $this->from = new Carbon("2018-12-01");
    }

    public function setFromReset()
    {
        $this->setFrom();
    }

}

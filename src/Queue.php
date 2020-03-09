<?php


class Queue
{

    public const MAX_ITEMS = 5;

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $items = [];

    /**
     * Undocumented function
     *
     * @param [type] $item
     * @return void
     */
    public function push($item)
    {
        if ($this->getCount() == static::MAX_ITEMS) {
            throw new QueueException("Queue is full");
        }

        $this->items[] = $item;
    }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function pop()
    {
        return array_shift($this->items);
    }


    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getCount()
    {
        return count($this->items);
    }
}

<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Location\Site;

use VasilDakov\Speedy\Model\Site;

/**
 * Class Collection
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Collection
{
    /**
     * @var array
     */
    private array $items = array();

    /**
     * @param $obj
     * @return void
     */
    public function addItem($obj): void
    {
        if (!in_array( $obj,$this->items, true)) {
            $this->items[] = $obj;
        }
        else {
            throw new \InvalidArgumentException("Site $obj is already in use.");
        }
    }

    /**
     * @param $obj
     * @return void
     */
    public function deleteItem($obj): void
    {
        if (in_array( $obj,$this->items, true))
        {
            $index = array_search($obj, $this->items, true);
            unset($this->items[$index]);

        }
        else {
            throw new \InvalidArgumentException("There is no such $obj.");
        }
    }

    /**
     * @param $obj
     * @return Site
     */
    public function getItem($obj): Site
    {
        if (in_array( $obj, $this->items, true)) {
            $value=0;
            foreach ($this->items as $item)
            {
                if ($item === $obj){
                    $value = $obj;
                }
            }

            return $value;
        }

        throw new \InvalidArgumentException("There is not a such site $obj.");
    }

    /**
     * @param $id
     * @return int
     */
    public function findItemById($id): int
    {
        if (!empty($this->items)) {
            $value=0;
            foreach ($this->items as $item) {
                if ($item->getId() === $id) {
                    $value = $id;
                }
                else{
                    throw new \InvalidArgumentException("There is not a such ID.");
                }
            }

            return $value;
        }

        throw new \InvalidArgumentException("There is not any site.");
    }
}





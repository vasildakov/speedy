<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Site;

use Exception;
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
    private array $items = [];


    /**
     * @throws Exception
     */
    public function addItem($key, $item): bool
    {
        if (!array_key_exists($key, $this->items) ) {
            $this->items[$key] = $item;

            return true;
        }
        throw new Exception('Key is already used');
    }


    /**
     * @throws Exception
     */
    public function deleteItem($key): bool
    {
        if (array_key_exists($key, $this->items) ) {
            unset($this->items[$key]);

            return true;
        }
        throw new Exception('Key does not exist!');
    }


    /**
     * @throws Exception
     */
    public function getItem($key)
    {
        if (array_key_exists($key, $this->items) ) {
            return $this->items[$key];
        }
        throw new Exception('Item with ... does not exist!');
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


    public function getItems(): array 
    {
        return $this->items;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return !($this->count() > 0);
    }
}

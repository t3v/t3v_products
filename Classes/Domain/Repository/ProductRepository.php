<?php
namespace T3v\T3vProducts\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

use T3v\T3vCore\Domain\Repository\AbstractRepository;

use T3v\T3vProducts\Domain\Repository\Traits\LocalizationTrait;

/**
 * Product Repository Class
 *
 * @package T3v\T3vProducts\Domain\Repository
 */
class ProductRepository extends AbstractRepository {
  /**
   * The default orderings.
   *
   * @var array
   */
  protected $defaultOrderings = [
    'name'    => QueryInterface::ORDER_DESCENDING,
    'sorting' => QueryInterface::ORDER_ASCENDING
  ];

  /**
   * Use the localization trait.
   */
  use LocalizationTrait;
}
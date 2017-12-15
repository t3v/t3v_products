<?php
namespace T3v\T3vProducts\Domain\Model;

use TYPO3\CMS\Core\Localization\LocalizationFactory;

use T3v\T3vCore\Domain\Model\AbstractEntity;
use T3v\T3vCore\Domain\Model\Traits\LocalisationTrait;

/**
 * Abstract Model Class
 *
 * @package T3v\T3vProducts\Domain\Model
 */
abstract class AbstractModel extends AbstractEntity {
  /**
   * The extension key.
   *
   * Required by `LocalisationTrait`.
   */
  const EXTENSION_KEY = 't3v_products';

  /**
   * The Localization Factory.
   *
   * @var \TYPO3\CMS\Core\Localization\LocalizationFactory
   * @inject
   */
  protected $localizationFactory;

  /**
   * Use the localisation trait.
   */
  use LocalisationTrait;
}
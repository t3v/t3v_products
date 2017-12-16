<?php
namespace T3v\T3vProducts\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

use T3v\T3vProducts\Domain\Model\AbstractModel;

/**
 * Product Class
 *
 * @package T3v\T3vProducts\Domain\Model
 */
class Product extends AbstractModel {
  /**
   * The product's name.
   *
   * @var string
   */
  protected $name;

  /**
   * The product's abstract.
   *
   * @var string
   */
  protected $abstract;

  /**
   * The product's thumbnails.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $thumbnails;

  /**
   * The product's images.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $images;

  /**
   * The product's label.
   *
   * @var string
   */
  protected $label;

  /**
   * Constructs a new product.
   */
  public function __construct() {
    parent::__construct();

    $this->thumbnails = new ObjectStorage();
    $this->images     = new ObjectStorage();
  }

  /**
   * Returns the product's name.
   *
   * @return string The product's name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Sets the product's name.
   *
   * @param string $name The product's name
   * @return void
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Returns the product's abstract.
   *
   * @return string The product's abstract
   */
  public function getAbstract() {
    return $this->abstract;
  }

  /**
   * Sets the product's abstract.
   *
   * @param string $abstract The product's abstract
   * @return void
   */
  public function setAbstract($abstract) {
    $this->abstract = $abstract;
  }

  /**
   * Returns all thumbnails belonging to the product.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The product's thumbnails
   */
  public function getThumbnails() {
    return $this->thumbnails;
  }

  /**
   * Adds a thumbnail to the product.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
   * @return void
   */
  public function addThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->attach($thumbnail);
  }

  /**
   * Removes a thumbnail from product.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
   * @return void
   */
  public function removeThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->detach($thumbnail);
  }

  /**
   * Removes all thumbnails from the product.
   *
   * @return void
   */
  public function removeAllThumbnails() {
    $this->thumbnails = new ObjectStorage();
  }

  /**
   * Returns all images belonging to the product.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The product's images
   */
  public function getImages() {
    return $this->images;
  }

  /**
   * Adds a image to the product.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image The image to be added
   * @return void
   */
  public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
    $this->images->attach($image);
  }

  /**
   * Removes a image from product.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image The image to be removed
   * @return void
   */
  public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
    $this->images->detach($image);
  }

  /**
   * Removes all images from the product.
   *
   * @return void
   */
  public function removeAllImages() {
    $this->images = new ObjectStorage();
  }

  /**
   * Returns the product's label.
   *
   * @return string The product's label
   */
  public function getLabel() {
    $name  = $this->name;
    $label = $this->label;

    if ($label) {
      return $label;
    } else {
      return $name;
    }
  }

  /**
   * Sets the product's label.
   *
   * @param string $label The product's label
   * @return void
   */
  public function setLabel($label) {
    $this->label = $label;
  }
}
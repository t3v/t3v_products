<?php
namespace T3v\T3vProducts\Controller\ContentElements;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use \T3v\T3vProducts\Domain\Repository\ProductRepository;

/**
 * Products Content Element Controller Class
 *
 * @package T3v\T3vProducts\Controller\ContentElements
 */
class ProductsContentElementController extends ContentElementController {
  /**
   * The product repository.
   *
   * @var \T3v\T3vProducts\Domain\Repository\ProductRepository
   * @inject
   */
  protected $productRepository;

  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $settings = $this->settings;
    $uids     = $settings['products'];
    $products = $this->productRepository->findByUids($uids);

    $this->view->assign('settings', $settings);
    $this->view->assign('products', $products);
  }
}
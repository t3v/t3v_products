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
    $products = $this->getProductsFromSettings($settings);

    $this->view->assign('settings', $settings);
    $this->view->assign('products', $products);
  }

  /**
   * Helper function to get products from settings.
   *
   * @param array $settings The settings
   * @return array The products
   */
  protected function getProductsFromSettings($settings) {
    $products     = [];
    $productsUids = GeneralUtility::intExplode(',', $settings['products'], true);

    foreach($productsUids as $uid) {
      $product = $this->productRepository->findByUid($uid);

      if ($product) {
        $products[] = $product;
      }
    }

    return $products;
  }
}
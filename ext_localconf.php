<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === Content Elements ===

  // --- Products Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'Products',

    // An array holding the controller-action-combinations that are accessible
    [
      // The first controller and its first action will be the default
      'ContentElements\ProductsContentElement' => 'index'
    ],

    // An array of non-cachable controller-action-combinations (they must already be enabled)
    [
      // 'ContentElements\ProductsContentElement' => 'index'
    ]
  );

  // --- Current Products Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'CurrentProducts',

    // An array holding the controller-action-combinations that are accessible
    [
      // The first controller and its first action will be the default
      'ContentElements\CurrentProductsContentElement' => 'index'
    ],

    // An array of non-cachable controller-action-combinations (they must already be enabled)
    [
      // 'ContentElements\CurrentProductsContentElement' => 'index'
    ]
  );

  // === TsConfig ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extkey . '/Configuration/TSconfig.ts">');
}, 't3v', $_EXTKEY);
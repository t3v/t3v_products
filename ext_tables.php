<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === TCA ===

  // --- Product Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vproducts_domain_model_product', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vproducts_domain_model_product.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vproducts_domain_model_product');

  // === TypoScript ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extkey, 'Configuration/TypoScript', 'T3v Products');
}, 't3v', $_EXTKEY);
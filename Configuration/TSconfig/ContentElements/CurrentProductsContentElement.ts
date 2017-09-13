mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vproducts_currentproducts {
              title = LLL:EXT:t3v_products/Resources/Private/Language/locallang_wizard.xlf:contentElements.currentProductsContentElement.title

              description = LLL:EXT:t3v_products/Resources/Private/Language/locallang_wizard.xlf:contentElements.currentProductsContentElement.description

              iconIdentifier = t3v_products-current_products_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vproducts_currentproducts
              }
            }
          }

          show := addToList(t3vproducts_currentproducts)
        }
      }
    }
  }
}
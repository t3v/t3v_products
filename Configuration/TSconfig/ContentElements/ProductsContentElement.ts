mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vproducts_products {
              title = LLL:EXT:t3v_products/Resources/Private/Language/locallang_wizard.xlf:contentElements.productsContentElement.title

              description = LLL:EXT:t3v_products/Resources/Private/Language/locallang_wizard.xlf:contentElements.productsContentElement.description

              iconIdentifier = t3v_products-products_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vproducts_products
              }
            }
          }

          show := addToList(t3vproducts_products)
        }
      }
    }
  }
}
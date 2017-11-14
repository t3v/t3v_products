lib {
  t3v {
    products {
      config {
        contentElements {
          productsContentElement {
            container = TEXT
            container {
              value = {$t3v.products.config.contentElements.productsContentElement.container}
            }
          }

          currentProductsContentElement {
            container = TEXT
            container {
              value = {$t3v.products.config.contentElements.currentProductsContentElement.container}
            }
          }
        }

        pages {
          products {
            uid = TEXT
            uid {
              value = {$t3v.products.config.pages.products.uid}
            }
          }
        }
      }
    }
  }
}
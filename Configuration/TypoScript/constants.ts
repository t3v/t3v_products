# --------------------------
# | T3v Products Constants |
# --------------------------

t3v {
  products {
    config {
      contentElements {
        productsContentElement {
          # cat=t3v/products/config/contentElements/productsContentElement; type=string; label=The Content Element's container
          container =
        }

        currentProductsContentElement {
          # cat=t3v/products/config/contentElements/currentProductsContentElement; type=string; label=The Content Element's container
          container =
        }
      }

      pages {
        products {
          # cat=t3v/products/config/pages/products; type=int+; label=The UID of the products page
          uid =
        }
      }
    }
  }
}

# === Plugin Constants ===

plugin {
  tx_t3vproducts {
    persistence {
      # cat=plugin/tx_t3vproducts/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vproducts/persistence; type=int+; label=The PID of the storage
      storagePid = 0

      # cat=plugin/tx_t3vproducts/persistence; type=boolean; label=Updates reference index to ensure data integrity
      updateReferenceIndex = 1
    }

    settings {
      # ...
    }

    view {
      # cat=plugin/tx_t3vproducts/view; type=string; label=The path where the layouts are stored
      layoutRootPath = EXT:t3v_products/Resources/Private/Layouts/

      # cat=plugin/tx_t3vproducts/view; type=string; label=The path where the templates are stored
      templateRootPath = EXT:t3v_products/Resources/Private/Templates/

      # cat=plugin/tx_t3vproducts/view; type=string; label=The path where the partials are stored
      partialRootPath = EXT:t3v_products/Resources/Private/Partials/
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">
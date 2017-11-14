# ------------------------------
# | T3v Products Configuration |
# ------------------------------

# === Plugin Configuration ===

plugin {
  tx_t3vproducts {
    persistence {
      classes {
        T3v\T3vProducts\Domain\Model\Product {
          mapping {
            tableName = tx_t3vproducts_domain_model_product

            # columns {
            #   foo.mapOnProperty = foo
            #   bar.mapOnProperty = bar
            # }
          }
        }
      }

      enableAutomaticCacheClearing = {$plugin.tx_t3vproducts.persistence.enableAutomaticCacheClearing}

      storagePid = {$plugin.tx_t3vproducts.persistence.storagePid}

      updateReferenceIndex = {$plugin.tx_t3vproducts.persistence.updateReferenceIndex}
    }

    settings {
      # ...
    }

    view {
      layoutRootPaths {
        0 = {$plugin.tx_t3vproducts.view.layoutRootPath}
      }

      templateRootPaths {
        0 = {$plugin.tx_t3vproducts.view.templateRootPath}
      }

      partialRootPaths {
        0 = {$plugin.tx_t3vproducts.view.partialRootPath}
      }
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/setup.ts">
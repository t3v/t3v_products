# === T3v Products Configuration ===

plugin {
  tx_t3vproducts {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vproducts.persistence.storagePid}

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
    }

    view {
      layoutRootPath = {$plugin.tx_t3vproducts.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vproducts.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vproducts.view.partialRootPath}
    }

    settings {
      # ...
    }
  }
}
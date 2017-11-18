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
      layoutRootPath = {$plugin.tx_t3vproducts.view.layoutRootPath}

      # Used to define several paths for layouts, which will be tried in reversed order (the paths are searched from
      # bottom to top). The first folder where the desired layout is found, is used. If the array keys are numeric,
      # they are first sorted and then tried in reversed order.
      layoutRootPaths {
        0 = {$plugin.tx_t3vproducts.view.layoutRootPath}
      }

      templateRootPath = {$plugin.tx_t3vproducts.view.templateRootPath}

      # Used to define several paths for templates, which will be tried in reversed order (the paths are searched from
      # bottom to top). The first folder where the desired layout is found, is used. If the array keys are numeric,
      # they are first sorted and then tried in reversed order.
      templateRootPaths {
        0 = {$plugin.tx_t3vproducts.view.templateRootPath}
      }

      partialRootPath = {$plugin.tx_t3vproducts.view.partialRootPath}

      # Used to define several paths for partials, which will be tried in reversed order. The first folder where the
      # desired partial is found, is used. The keys of the array define the order.
      partialRootPaths {
        0 = {$plugin.tx_t3vproducts.view.partialRootPath}
      }
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/setup.ts">
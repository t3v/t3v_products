# === T3v Products Configuration ===

plugin {
  tx_t3vproducts {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vproducts.persistence.storagePid}
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
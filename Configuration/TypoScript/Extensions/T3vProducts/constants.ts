# === T3v Products Constants ===

plugin {
  tx_t3vproducts {
    persistence {
      # cat=plugin/tx_t3vproducts/persistence; type=int+; label=The PID of the storage
      # storagePid = 0
    }

    view {
      # cat=plugin/tx_t3vproducts/view; type=string; label=Path to layouts
      layoutRootPath = EXT:t3v_products/Resources/Private/Layouts/

      # cat=plugin/tx_t3vproducts/view; type=string; label=Path to templates
      templateRootPath = EXT:t3v_products/Resources/Private/Templates/

      # cat=plugin/tx_t3vproducts/view; type=string; label=Path to template partials
      partialRootPath = EXT:t3v_products/Resources/Private/Partials/
    }

    settings {
      # ...
    }
  }
}
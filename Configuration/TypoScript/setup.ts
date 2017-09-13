# === T3v Products Configuration ===

t3v {
  products {
    pages {
      products {
        uid = {$t3v.products.pages.products.uid}
      }
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Extensions/setup.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/setup.ts">
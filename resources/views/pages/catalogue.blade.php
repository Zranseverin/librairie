@verbatim
<!-- ═══════════════════════════════════════════
     PAGE CATALOGUE
═══════════════════════════════════════════ -->
<div id="page-catalogue" class="page">
  <div class="catalogue-shell">
    <nav class="catalogue-breadcrumb" aria-label="Fil d'Ariane">
      <a onclick="showPage('home')">Accueil</a>
      <span>›</span>
      <a onclick="showPage('catalogue')">Livres</a>
      <span>›</span>
      <strong>Catalogue</strong>
    </nav>

    <section class="catalogue-market-head">
      <div>
        <h1>Catalogue livres</h1>
        <p><strong id="catCountTop">0</strong> titres disponibles · livraison offerte dès 35 €</p>
      </div>
      <div class="catalogue-head-actions">
        <span class="market-chip active">Meilleures ventes</span>
        <span class="market-chip">Nouveautés</span>
        <span class="market-chip">Promos</span>
      </div>
    </section>

  <div class="catalogue-layout">
    <aside class="filters-panel">
      <div class="filter-title-row">
        <strong>Filtres</strong>
        <button onclick="showToast('Filtres réinitialisés')">Tout effacer</button>
      </div>
      <div class="filter-group">
        <h4>Catégorie</h4>
        <div class="filter-option"><input type="checkbox" id="f1" checked><label for="f1">Science-Fiction</label><span class="fc">(124)</span></div>
        <div class="filter-option"><input type="checkbox" id="f2"><label for="f2">Littérature</label><span class="fc">(312)</span></div>
        <div class="filter-option"><input type="checkbox" id="f3"><label for="f3">Thriller</label><span class="fc">(87)</span></div>
        <div class="filter-option"><input type="checkbox" id="f4"><label for="f4">Histoire</label><span class="fc">(201)</span></div>
        <div class="filter-option"><input type="checkbox" id="f5"><label for="f5">Développement</label><span class="fc">(56)</span></div>
        <div class="filter-option"><input type="checkbox" id="f6"><label for="f6">Jeunesse</label><span class="fc">(143)</span></div>
      </div>
      <div class="filter-group">
        <h4>Auteur populaire</h4>
        <div class="filter-option"><input type="checkbox" id="a1"><label for="a1">Frank Herbert</label><span class="fc">(6)</span></div>
        <div class="filter-option"><input type="checkbox" id="a2"><label for="a2">Victor Hugo</label><span class="fc">(12)</span></div>
        <div class="filter-option"><input type="checkbox" id="a3"><label for="a3">George Orwell</label><span class="fc">(4)</span></div>
      </div>
      <div class="filter-group">
        <h4>Format</h4>
        <div class="filter-option"><input type="checkbox" id="fmt1" checked><label for="fmt1">Poche</label></div>
        <div class="filter-option"><input type="checkbox" id="fmt2"><label for="fmt2">Broché</label></div>
        <div class="filter-option"><input type="checkbox" id="fmt3"><label for="fmt3">Ebook</label></div>
        <div class="filter-option"><input type="checkbox" id="fmt4"><label for="fmt4">Grand format</label></div>
      </div>
      <div class="filter-group">
        <h4>Prix</h4>
        <div class="price-range">
          <input type="number" id="priceMin" value="0" min="0" max="100">
          <span>à</span>
          <input type="number" id="priceMax" value="50" min="0" max="100">
          <span>€</span>
        </div>
        <input type="range" class="range-slider" min="0" max="100" value="50" oninput="document.getElementById('priceMax').value=this.value">
      </div>
      <div class="filter-group">
        <h4>Note</h4>
        <div class="filter-option"><input type="checkbox" id="r5"><label for="r5">★★★★★ (5 étoiles)</label></div>
        <div class="filter-option"><input type="checkbox" id="r4" checked><label for="r4">★★★★☆ et plus</label></div>
        <div class="filter-option"><input type="checkbox" id="r3"><label for="r3">★★★☆☆ et plus</label></div>
      </div>
      <button class="filter-reset" onclick="showToast('Filtres réinitialisés')">Réinitialiser les filtres</button>

      <!-- PUB SIDEBAR -->
      <div style="margin-top:20px">
        <div style="font-size:9.5px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--muted);margin-bottom:6px;text-align:center">Publicité</div>
        <div class="ad-sidebar" onclick="showToast('Publicité : Babelio')">
          <div class="ad-sidebar-img">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=520&q=80" alt="Rayons de livres et recommandations">
          </div>
          <div class="ad-sidebar-body" style="background:white">
            <div class="ad-sidebar-tag">Sponsorisé · Babelio</div>
            <div class="ad-sidebar-title" style="color:var(--navy)">Babelio Plus</div>
            <div class="ad-sidebar-sub" style="color:var(--muted)">Critiques exclusives & alertes nouveautés.</div>
            <button class="ad-sidebar-btn" style="background:#2D6A4F;color:white" onclick="event.stopPropagation();showToast('Redirection Babelio...')">En savoir plus</button>
          </div>
        </div>
      </div>
    </aside>

    <div class="catalogue-main">
      <section class="catalogue-deals">
        <div class="catalogue-deals-head">
          <h2>Meilleures offres</h2>
          <button onclick="showPage('home')">Retour accueil</button>
        </div>
        <div class="carousel" id="catalogue-carousel"></div>
      </section>

      <div class="catalogue-toolbar">
        <div>
          <div class="catalogue-count"><strong id="catCount">24</strong> livres trouvés</div>
          <div class="catalogue-similar">Suggestions : roman classique · science-fiction · prix poche · nouveauté</div>
        </div>
        <select class="sort-select" onchange="showToast('Tri appliqué : '+this.options[this.selectedIndex].text)">
          <option>Les plus demandés</option>
          <option>Prix croissant</option>
          <option>Prix décroissant</option>
          <option>Meilleures notes</option>
          <option>Nouveautés</option>
          <option>Titre A→Z</option>
        </select>
      </div>
      <div class="catalogue-grid" id="catGrid"></div>
      <div class="pagination">
        <button class="pg-btn">‹</button>
        <button class="pg-btn active">1</button>
        <button class="pg-btn">2</button>
        <button class="pg-btn">3</button>
        <button class="pg-btn">…</button>
        <button class="pg-btn">8</button>
        <button class="pg-btn">›</button>
      </div>
    </div>
  </div>
  </div>
</div>
@endverbatim


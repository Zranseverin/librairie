@verbatim
<div class="app-header">
  <div class="market-topbar">
    <span>Vendez vos livres</span>
    <span>Livraison rapide</span>
    <span>Aide & suivi commande</span>
  </div>
  <header>
    <span class="logo" onclick="showPage('home')">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
      Chapitre
    </span>
    <div class="search-wrap">
      <svg class="si" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input type="text" placeholder="Rechercher un livre, un auteur..." oninput="handleSearch(this.value,'home-search-dd')" onfocus="handleSearch(this.value,'home-search-dd')" onblur="setTimeout(()=>closeDD('home-search-dd'),200)">
      <div class="search-dropdown" id="home-search-dd"></div>
    </div>
    <div class="header-actions">
      <button class="icon-btn" title="Mon compte" onclick="showPage('login')">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        <span>Compte</span>
      </button>
      <button class="icon-btn" title="Mon panier" onclick="showPage('cart')">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
        <span>Panier</span>
        <span class="cart-badge" id="badge-global">0</span>
      </button>
    </div>
  </header>

  <nav class="navbar">
    <div class="nav-item active" onclick="showPage('catalogue')">Tous les livres</div>
    <div class="nav-item" onclick="showPage('catalogue')">Science-Fiction</div>
    <div class="nav-item" onclick="showPage('catalogue')">Littérature</div>
    <div class="nav-item" onclick="showPage('catalogue')">Thriller</div>
    <div class="nav-item" onclick="showPage('catalogue')">Histoire</div>
    <div class="nav-item" onclick="showPage('catalogue')">Développement perso</div>
    <div class="nav-item" onclick="showPage('catalogue')">Jeunesse</div>
    <div class="nav-item" onclick="showPage('catalogue')">BD & Mangas</div>
    <div class="nav-item" onclick="showPage('catalogue')">🔥 Promos</div>
  </nav>

  <section class="hero">
    <div class="hero-content">
      <span class="hero-eyebrow">✦ Livre du mois — Juillet 2025</span>
      <h1>La Carte et le<br><em>Territoire</em></h1>
      <p>Prix Goncourt 2010 · Michel Houellebecq</p>
      <div class="hero-promo">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        Livraison gratuite dès 35 € · Retours sous 14 jours
      </div>
      <br>
      <button class="btn-primary" onclick="showPage('catalogue');renderCarousel(BOOKS.slice(0,8),'catalogue-carousel');renderCatalogue()">
        Découvrir la sélection
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </button>
    </div>
    <div class="hero-visual">
      <div class="hero-book-main" onclick="showPage('product')" style="background:linear-gradient(145deg,#2A5F8E,#1a3a5c)">
        <img class="hero-cover-img" src="https://covers.openlibrary.org/b/isbn/9780441172719-L.jpg" alt="Dune">
        <div class="bcp">📘</div><div class="spine-ov"></div>
      </div>
      <div style="display:flex;flex-direction:column;gap:12px">
        <div class="hero-book-sm" style="background:linear-gradient(145deg,#3D6B3A,#2A4A27)"><img class="hero-cover-img" src="https://covers.openlibrary.org/b/isbn/9780451524935-L.jpg" alt="1984"><div class="bcp sm">📗</div></div>
        <div class="hero-book-sm" style="background:linear-gradient(145deg,#7B3F6E,#4E2647);margin-bottom:16px"><img class="hero-cover-img" src="https://covers.openlibrary.org/b/isbn/9780061122415-L.jpg" alt="L'Alchimiste"><div class="bcp sm">📕</div></div>
      </div>
    </div>
  </section>
</div>
@endverbatim

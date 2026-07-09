@verbatim
<!-- ═══════════════════════════════════════════
     PAGE PRODUIT
═══════════════════════════════════════════ -->
<div id="page-product" class="page">
<nav class="breadcrumb">
    <a onclick="showPage('home')">Accueil</a><span>›</span>
    <a onclick="showPage('catalogue')">Science-Fiction</a><span>›</span>
    Dune
  </nav>

  <div class="product-main">
    <div class="cover-sticky">
      <div class="cover-frame" style="background:linear-gradient(145deg,#2A5F8E,#1a3a5c)">
        <img class="product-cover-img" src="https://covers.openlibrary.org/b/isbn/9780441172719-L.jpg" alt="Dune">
        <div class="product-cover-fallback" style="font-size:80px">📘</div>
        <div class="spine-overlay"></div>
      </div>
      <button class="extract-btn">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Feuilleter un extrait (PDF)
      </button>
      <button class="wishlist-btn">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        Ajouter à ma liste
      </button>
    </div>
    <div class="product-info">
      <h1 class="product-h1">Dune</h1>
      <div class="product-author">Frank Herbert</div>
      <div class="rating-row">
        <span class="stars">★★★★★</span>
        <span class="rating-score">4.8</span>
        <span style="color:var(--light)">·</span>
        <a class="rating-link" onclick="switchTab(document.querySelectorAll('.tab-btn')[2],'avis')">142 avis clients</a>
      </div>
      <div class="format-label">Choisir un format</div>
      <div class="formats">
        <div class="fmt-option selected" onclick="selectFormat(this,'9.50')"><div class="fmt-name">Poche</div><div class="fmt-price">9.50 €</div></div>
        <div class="fmt-option" onclick="selectFormat(this,'24.00')"><div class="fmt-name">Broché</div><div class="fmt-price">24.00 €</div></div>
        <div class="fmt-option" onclick="selectFormat(this,'6.99')"><div class="fmt-name">Numérique</div><div class="fmt-price">6.99 €</div></div>
      </div>
      <div class="stock-badge">En stock — Expédié sous 24 h</div>
      <div class="price-row">
        <span class="price-main" id="selPrice">9.50 €</span>
        <span class="price-old">12.00 €</span>
        <span class="price-save">−21 %</span>
      </div>
      <button class="btn-cart" onclick="addToCart({id:1,title:'Dune',author:'Frank Herbert',format:'Poche',price:9.50,emoji:'📘',cover:'https://covers.openlibrary.org/b/isbn/9780441172719-L.jpg',bg:'linear-gradient(145deg,#2A5F8E,#1a3a5c)'})">
        <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
        Ajouter au panier
      </button>
      <div class="reassurance-strip">
        <div class="reassurance-item"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg><span>Livraison offerte dès 35 €</span></div>
        <div class="reassurance-item"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg><span>Retour gratuit 14 j</span></div>
        <div class="reassurance-item"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg><span>Paiement sécurisé</span></div>
      </div>
    </div>
  </div>

  <div class="desc-block">
    <div class="tab-nav">
      <button class="tab-btn active" onclick="switchTab(this,'synopsis')">Synopsis</button>
      <button class="tab-btn" onclick="switchTab(this,'fiche')">Fiche technique</button>
      <button class="tab-btn" onclick="switchTab(this,'avis')">Avis clients (142)</button>
    </div>
    <div id="tab-synopsis" class="tab-content active">
      <div class="synopsis">
        <p>Dans un futur lointain, les humains ont colonisé la galaxie et se disputent le contrôle d'une substance extraordinaire — l'Épice — source de longévité et de prescience. Seule la planète Arrakis, aussi appelée <em>Dune</em>, en produit.</p>
        <p>Paul Atréides, héritier d'une noble maison, se retrouve projeté au cœur de ces luttes de pouvoir lorsque son père est chargé d'administrer cette planète maudite. Dans cet univers impitoyable, Paul découvrira sa destinée parmi les Fremen, les guerriers du désert.</p>
        <p>Chef-d'œuvre incontestable de la science-fiction, <em>Dune</em> est une fresque épique sur le pouvoir, l'écologie et la foi, dont l'écho résonne encore soixante ans après sa première publication.</p>
      </div>
    </div>
    <div id="tab-fiche" class="tab-content">
      <table class="fiche-table">
        <tr><td>Éditeur</td><td>Robert Laffont / Pocket</td></tr>
        <tr><td>Date de parution</td><td>15 janvier 2020</td></tr>
        <tr><td>Nombre de pages</td><td>896 pages</td></tr>
        <tr><td>Dimensions</td><td>12 × 17.5 cm</td></tr>
        <tr><td>Traducteur</td><td>Michel Demuth</td></tr>
        <tr><td>Langue</td><td>Français</td></tr>
        <tr><td>Collection</td><td>Pocket Science-Fiction</td></tr>
        <tr><td>ISBN</td><td>978-2-266-28063-2</td></tr>
      </table>
    </div>
    <div id="tab-avis" class="tab-content">
      <div class="review-summary">
        <div class="review-score"><div class="score-big">4.8</div><div class="score-stars">★★★★★</div><div class="score-count">sur 142 avis</div></div>
        <div class="review-bars">
          <div class="bar-row"><span class="bar-label">5 ★</span><div class="bar-track"><div class="bar-fill" style="width:78%"></div></div><span class="bar-count">111</span></div>
          <div class="bar-row"><span class="bar-label">4 ★</span><div class="bar-track"><div class="bar-fill" style="width:14%"></div></div><span class="bar-count">20</span></div>
          <div class="bar-row"><span class="bar-label">3 ★</span><div class="bar-track"><div class="bar-fill" style="width:5%"></div></div><span class="bar-count">7</span></div>
          <div class="bar-row"><span class="bar-label">2 ★</span><div class="bar-track"><div class="bar-fill" style="width:2%"></div></div><span class="bar-count">3</span></div>
          <div class="bar-row"><span class="bar-label">1 ★</span><div class="bar-track"><div class="bar-fill" style="width:1%"></div></div><span class="bar-count">1</span></div>
        </div>
      </div>
      <div class="review-list">
        <div class="review-item"><div class="review-header"><span class="reviewer-name">Marie D.</span><span class="review-meta">12 nov. 2024 · Achat vérifié</span></div><div class="review-stars">★★★★★</div><div class="review-text">Un chef-d'œuvre absolu. L'univers est d'une richesse hallucinante, les personnages profonds et l'intrigue tient en haleine du début à la fin.</div><div class="review-helpful">Cet avis vous a-t-il été utile ? <a>Oui (34)</a> · <a>Non (2)</a></div></div>
        <div class="review-item"><div class="review-header"><span class="reviewer-name">Thomas L.</span><span class="review-meta">3 oct. 2024 · Achat vérifié</span></div><div class="review-stars">★★★★☆</div><div class="review-text">Lecture exigeante mais tellement gratifiante. Le monde d'Arrakis est fascinant. Le début est lent, mais passé les 100 premières pages, impossible de le poser.</div><div class="review-helpful">Cet avis vous a-t-il été utile ? <a>Oui (18)</a> · <a>Non (1)</a></div></div>
        <div class="review-item"><div class="review-header"><span class="reviewer-name">Amara K.</span><span class="review-meta">18 août 2024 · Achat vérifié</span></div><div class="review-stars">★★★★★</div><div class="review-text">Lu après avoir vu les films. Le livre est tellement plus riche ! Les sous-textes politiques et écologiques sont d'une pertinence incroyable pour notre époque.</div><div class="review-helpful">Cet avis vous a-t-il été utile ? <a>Oui (27)</a> · <a>Non (0)</a></div></div>
      </div>
    </div>
  </div>
</div>
@endverbatim


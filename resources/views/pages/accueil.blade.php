@verbatim
<!-- ═══════════════════════════════════════════
     PAGE ACCUEIL
═══════════════════════════════════════════ -->
<div id="page-home" class="page active">
  <section class="section">
    <div class="section-head">
      <h2 class="section-title">Meilleures ventes</h2>
      <span class="see-all" onclick="showPage('catalogue')">Voir tout →</span>
    </div>
    <div class="carousel" id="bs-carousel"></div>
  </section>


  <!-- PUB 1 : Bannière Kindle -->
  <div id="adBanner1" class="ad-banner" style="background:linear-gradient(135deg,#1A2744 0%,#2C4A8C 100%);color:white" onclick="showToast('Publicité : Kindle Unlimited')">
    <div class="ad-banner-inner">
      <div class="ad-banner-visual">
        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=420&q=80" alt="Lecture numerique Kindle">
      </div>
      <div class="ad-banner-body">
        <span class="ad-banner-tag" style="background:rgba(255,255,255,.15);color:white">Sponsorisé · Amazon</span>
        <div class="ad-banner-title" style="color:white">Kindle Unlimited — 3 mois offerts</div>
        <div class="ad-banner-sub" style="color:rgba(255,255,255,.75)">Accédez à plus d'1 million de livres, magazines et podcasts. Sans engagement. Résiliez à tout moment.</div>
      </div>
      <div class="ad-banner-cta">
        <button class="btn-primary" style="background:var(--amber);white-space:nowrap" onclick="event.stopPropagation();showToast('Redirection vers Amazon Kindle...')">Essayer gratuitement</button>
      </div>
    </div>
    <button class="ad-close" onclick="event.stopPropagation();document.getElementById('adBanner1').style.display='none'" title="Fermer la pub">✕</button>
  </div>
  <div style="text-align:center;margin:0 32px 32px"><span class="ad-label" style="max-width:200px;margin:6px auto 0">Publicité</span></div>

  <div class="promo-banner">
    <div class="pb-icon">🎁</div>
    <div class="promo-copy">
      <h3>Bon cadeau Chapitreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</h3>
      <p>Offrez la liberté de choisir — disponible de 10 € à 100 €, valable 1 an.</p>
    </div>
    <button class="btn-primary" onclick="showToast('Bons cadeaux bientôt disponibles !')">Commander un bon cadeau</button>
  </div>

  <section class="section">
    <div class="section-head">
      <h2 class="section-title">Explorer par genre</h2>
    </div>
    <div class="genre-grid">
      <div class="genre-card" onclick="showPage('catalogue')"><span class="gi">🚀</span><div class="gl">Science-Fiction</div><div class="gc">1 240 titres</div></div>
      <div class="genre-card" onclick="showPage('catalogue')"><span class="gi">💘</span><div class="gl">Romance</div><div class="gc">980 titres</div></div>
      <div class="genre-card" onclick="showPage('catalogue')"><span class="gi">🔪</span><div class="gl">Thriller</div><div class="gc">745 titres</div></div>
      <div class="genre-card" onclick="showPage('catalogue')"><span class="gi">🏛</span><div class="gl">Histoire</div><div class="gc">2 100 titres</div></div>
      <div class="genre-card" onclick="showPage('catalogue')"><span class="gi">🌱</span><div class="gl">Développement</div><div class="gc">610 titres</div></div>
      <div class="genre-card" onclick="showPage('catalogue')"><span class="gi">🧒</span><div class="gl">Jeunesse</div><div class="gc">1 530 titres</div></div>
    </div>
  </section>


  <!-- PUB 2 : Duo cartes -->
  <div style="padding:8px 32px 0">
    <div class="ad-label">Publicité</div>
  </div>
  <div class="ad-duo" style="margin-bottom:44px">
    <div class="ad-card" onclick="showToast('Publicité : Audible')">
      <div class="ad-card-img">
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=720&q=80" alt="Casque audio pour livre audio">
      </div>
      <div class="ad-card-body" style="background:white">
        <div class="ad-card-brand">Sponsorisé · Audible</div>
        <div class="ad-card-title" style="color:var(--navy)">Vos livres préférés en audio</div>
        <div class="ad-card-sub" style="color:var(--muted)">1 crédit offert par mois. Écoutez partout, même hors connexion.</div>
        <button class="ad-card-btn" style="background:var(--amber);color:white" onclick="event.stopPropagation();showToast('Redirection vers Audible...')">1 mois gratuit →</button>
      </div>
      <button class="ad-close" style="color:white;top:8px;right:8px" onclick="event.stopPropagation();this.closest('.ad-card').style.display='none'">✕</button>
    </div>
    <div class="ad-card" onclick="showToast('Publicité : Cultura')">
      <div class="ad-card-img">
        <img src="https://images.unsplash.com/photo-1513201099705-a9746e1e201f?auto=format&fit=crop&w=720&q=80" alt="Cadeaux et achats culture">
      </div>
      <div class="ad-card-body" style="background:white">
        <div class="ad-card-brand">Sponsorisé · Cultura</div>
        <div class="ad-card-title" style="color:var(--navy)">Carte cadeau Cultura — dès 10 €</div>
        <div class="ad-card-sub" style="color:var(--muted)">Livres, vinyles, papeterie... Le cadeau idéal pour tous les passionnés de culture.</div>
        <button class="ad-card-btn" style="background:#E8003D;color:white" onclick="event.stopPropagation();showToast('Redirection vers Cultura...')">Offrir maintenant →</button>
      </div>
      <button class="ad-close" style="color:white;top:8px;right:8px" onclick="event.stopPropagation();this.closest('.ad-card').style.display='none'">✕</button>
    </div>
  </div>

  <section class="section" style="padding-top:0">
    <div class="section-head">
      <h2 class="section-title">Nouveautés</h2>
      <span class="see-all" onclick="showPage('catalogue')">Voir tout →</span>
    </div>
    <div class="carousel" id="nv-carousel"></div>
  </section>

</div>
@endverbatim

@verbatim
<!-- ═══════════════════════════════════════════
     PAGE SUIVI DE COMMANDE
═══════════════════════════════════════════ -->
<div id="page-tracking" class="page">
<div class="tracking-page">
    <nav class="breadcrumb" style="border-bottom:none;padding:14px 32px 0">
      <a onclick="showPage('account')">Mon compte</a><span>›</span>Suivi de commande
    </nav>
    <div class="tracking-hero">
      <h1>Suivi de livraison</h1>
      <div class="tracking-ref">Commande <strong>#CHQ-2025-A8KP3</strong></div>
    </div>
    <div class="tracking-layout">
      <div class="tracking-main">
        <!-- Statut global -->
        <div class="tracking-status-card">
          <div class="tsc-icon">🚚</div>
          <div class="tsc-info">
            <div class="tsc-title">En cours de livraison</div>
            <div class="tsc-sub">Livraison estimée : <strong>Vendredi 20 juin 2025</strong></div>
          </div>
          <div class="tsc-carrier">
            <div class="carrier-logo">Colissimo</div>
            <div class="carrier-num">8L12345678901</div>
          </div>
        </div>

        <!-- Timeline -->
        <div class="tracking-timeline">
          <div class="tl-step done">
            <div class="tl-dot done"></div>
            <div class="tl-content">
              <div class="tl-title">Commande expédiée</div>
              <div class="tl-date">Mercredi 18 juin 2025 — 14:32</div>
              <div class="tl-detail">Votre colis a quitté notre entrepôt de Lyon.</div>
            </div>
          </div>
          <div class="tl-step done">
            <div class="tl-dot done"></div>
            <div class="tl-content">
              <div class="tl-title">En transit — Centre de tri</div>
              <div class="tl-date">Mercredi 18 juin 2025 — 22:15</div>
              <div class="tl-detail">Colis pris en charge au centre de tri de Clermont-Ferrand.</div>
            </div>
          </div>
          <div class="tl-step active">
            <div class="tl-dot active"></div>
            <div class="tl-content">
              <div class="tl-title">En cours de livraison</div>
              <div class="tl-date">Aujourd'hui — En route</div>
              <div class="tl-detail">Votre colis est pris en charge par le facteur.</div>
            </div>
          </div>
          <div class="tl-step">
            <div class="tl-dot"></div>
            <div class="tl-content">
              <div class="tl-title">Livré</div>
              <div class="tl-date">Prévu le Vendredi 20 juin 2025</div>
              <div class="tl-detail">Livraison à votre adresse ou en point relais.</div>
            </div>
          </div>
        </div>

        <!-- Contenu de la commande -->
        <div class="tracking-items-card">
          <h3>Contenu de la commande</h3>
          <div class="tracking-item">
            <div class="ti-cover book-cover-box" style="background:linear-gradient(145deg,#2A5F8E,#1a3a5c)">
              <img class="book-cover-img" src="https://covers.openlibrary.org/b/isbn/9780441172719-L.jpg" alt="Dune" loading="lazy">
              <span class="cover-fallback">📘</span>
            </div>
            <div class="ti-info"><div class="ti-title">Dune</div><div class="ti-sub">Frank Herbert · Poche × 1</div></div>
            <div class="ti-price">9.50 €</div>
          </div>
          <div class="tracking-item">
            <div class="ti-cover book-cover-box" style="background:linear-gradient(145deg,#3D6B3A,#2A4A27)">
              <img class="book-cover-img" src="https://covers.openlibrary.org/b/isbn/9780451524935-L.jpg" alt="1984" loading="lazy">
              <span class="cover-fallback">📗</span>
            </div>
            <div class="ti-info"><div class="ti-title">1984</div><div class="ti-sub">George Orwell · Poche × 1</div></div>
            <div class="ti-price">7.90 €</div>
          </div>
          <div class="tracking-total">Total payé : <strong>17.40 €</strong> — Livraison gratuite</div>
        </div>
      </div>

      <!-- Sidebar infos -->
      <div class="tracking-sidebar">
        <div class="ts-card">
          <h4>Adresse de livraison</h4>
          <p>Jean Dupont<br>12 rue des Lilas<br>75011 Paris<br>France</p>
        </div>
        <div class="ts-card">
          <h4>Actions</h4>
          <button class="btn-outline-full" onclick="showToast('Demande de modification envoyée')">Modifier l'adresse</button>
          <button class="btn-outline-full" onclick="showToast('Demande de retour initiée')">Initier un retour</button>
          <button class="btn-outline-full" onclick="showToast('Facture téléchargée')">Télécharger la facture</button>
          <button class="btn-outline-full" onclick="showToast('Contactez notre support au 01 23 45 67 89')">Contacter le support</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════
     PAGE RÉSULTATS DE RECHERCHE
═══════════════════════════════════════════ -->
@endverbatim


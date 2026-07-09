@verbatim
<!-- ═══════════════════════════════════════════
     PAGE MON COMPTE
═══════════════════════════════════════════ -->
<div id="page-account" class="page">
<div class="account-page">
    <div class="account-layout">
      <!-- Sidebar -->
      <aside class="account-sidebar">
        <div class="account-avatar">
          <div class="avatar-circle">JD</div>
          <div>
            <div class="avatar-name">Jean Dupont</div>
            <div class="avatar-email">jean.dupont@exemple.com</div>
          </div>
        </div>
        <nav class="account-nav">
          <div class="account-nav-item active" onclick="switchAccountTab(this,'orders')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            Mes commandes
          </div>
          <div class="account-nav-item" onclick="switchAccountTab(this,'wishlist')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            Ma liste de souhaits
          </div>
          <div class="account-nav-item" onclick="switchAccountTab(this,'profile')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            Mon profil
          </div>
          <div class="account-nav-item" onclick="switchAccountTab(this,'addresses')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Mes adresses
          </div>
          <div class="account-nav-item" onclick="switchAccountTab(this,'settings')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
            Paramètres
          </div>
          <div class="account-nav-item logout" onclick="showPage('home');showToast('Déconnexion réussie')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            Se déconnecter
          </div>
        </nav>
      </aside>

      <!-- Content -->
      <div class="account-content">

        <!-- COMMANDES -->
        <div id="acc-orders" class="acc-tab active">
          <div class="acc-header">
            <h2>Mes commandes</h2>
            <span class="acc-count">4 commandes</span>
          </div>
          <div class="orders-list">
            <div class="order-card">
              <div class="order-card-head">
                <div>
                  <div class="order-ref">Commande #CHQ-2025-A8KP3</div>
                  <div class="order-date">Passée le 18 juin 2025</div>
                </div>
                <span class="order-status shipped">Expédiée</span>
              </div>
              <div class="order-books">
                <div class="ob-cover" style="background:linear-gradient(145deg,#2A5F8E,#1a3a5c)">📘</div>
                <div class="ob-cover" style="background:linear-gradient(145deg,#3D6B3A,#2A4A27)">📗</div>
              </div>
              <div class="order-card-foot">
                <span class="order-total">Total : 17.40 €</span>
                <div style="display:flex;gap:8px">
                  <button class="btn-outline-sm" onclick="showPage('tracking')">Suivre la livraison</button>
                  <button class="btn-outline-sm" onclick="showToast('Facture PDF téléchargée')">Facture PDF</button>
                </div>
              </div>
            </div>
            <div class="order-card">
              <div class="order-card-head">
                <div>
                  <div class="order-ref">Commande #CHQ-2025-7TY2X</div>
                  <div class="order-date">Passée le 2 mai 2025</div>
                </div>
                <span class="order-status delivered">Livrée</span>
              </div>
              <div class="order-books">
                <div class="ob-cover" style="background:linear-gradient(145deg,#5B3A8B,#3A1F5C)">📓</div>
              </div>
              <div class="order-card-foot">
                <span class="order-total">Total : 11.00 €</span>
                <div style="display:flex;gap:8px">
                  <button class="btn-outline-sm" onclick="showToast('Retour initié pour cette commande')">Retourner un article</button>
                  <button class="btn-outline-sm" onclick="addToCart({id:5,title:'Fondation',author:'Isaac Asimov',format:'Broché',price:11.00,emoji:'📓',bg:'linear-gradient(145deg,#5B3A8B,#3A1F5C)'});showToast('Fondation ajouté au panier')">Commander à nouveau</button>
                </div>
              </div>
            </div>
            <div class="order-card">
              <div class="order-card-head">
                <div>
                  <div class="order-ref">Commande #CHQ-2025-3MNB7</div>
                  <div class="order-date">Passée le 14 mars 2025</div>
                </div>
                <span class="order-status delivered">Livrée</span>
              </div>
              <div class="order-books">
                <div class="ob-cover" style="background:linear-gradient(145deg,#B8860B,#7A5C00)">📙</div>
                <div class="ob-cover" style="background:linear-gradient(145deg,#8B3A3A,#5C2020)">📕</div>
                <div class="ob-cover" style="background:linear-gradient(145deg,#1A6B6B,#0D4040)">📔</div>
              </div>
              <div class="order-card-foot">
                <span class="order-total">Total : 23.70 €</span>
                <div style="display:flex;gap:8px">
                  <button class="btn-outline-sm" onclick="showToast('Laisser un avis disponible sur la page produit')">Laisser un avis</button>
                  <button class="btn-outline-sm" onclick="showToast('Facture PDF téléchargée')">Facture PDF</button>
                </div>
              </div>
            </div>
            <div class="order-card">
              <div class="order-card-head">
                <div>
                  <div class="order-ref">Commande #CHQ-2024-YKQ91</div>
                  <div class="order-date">Passée le 5 décembre 2024</div>
                </div>
                <span class="order-status delivered">Livrée</span>
              </div>
              <div class="order-books">
                <div class="ob-cover" style="background:linear-gradient(145deg,#2E4A7A,#182A50)">📒</div>
              </div>
              <div class="order-card-foot">
                <span class="order-total">Total : 12.50 €</span>
                <div style="display:flex;gap:8px">
                  <button class="btn-outline-sm" onclick="showToast('Laisser un avis disponible sur la page produit')">Laisser un avis</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- LISTE DE SOUHAITS -->
        <div id="acc-wishlist" class="acc-tab">
          <div class="acc-header">
            <h2>Ma liste de souhaits</h2>
            <span class="acc-count">3 livres</span>
          </div>
          <div class="wishlist-grid">
            <div class="wish-card">
              <div class="wish-cover" style="background:linear-gradient(145deg,#456789,#2A3D50)" onclick="showPage('product')">📘<div class="wish-remove" onclick="event.stopPropagation();showToast('Retiré de la liste de souhaits')" title="Retirer">✕</div></div>
              <div class="wish-body">
                <div class="wish-title">Intermezzo</div>
                <div class="wish-author">Sally Rooney</div>
                <div class="wish-price">22.00 €</div>
                <button class="add-btn-sm" onclick="addToCart({id:9,title:'Intermezzo',author:'Sally Rooney',format:'Broché',price:22.00,emoji:'📘',bg:'linear-gradient(145deg,#456789,#2A3D50)'})">+ Ajouter au panier</button>
              </div>
            </div>
            <div class="wish-card">
              <div class="wish-cover" style="background:linear-gradient(145deg,#5A4A7B,#362955)" onclick="showPage('product')">📙<div class="wish-remove" onclick="event.stopPropagation();showToast('Retiré de la liste de souhaits')" title="Retirer">✕</div></div>
              <div class="wish-body">
                <div class="wish-title">Orbital</div>
                <div class="wish-author">Samantha Harvey</div>
                <div class="wish-price">20.00 €</div>
                <button class="add-btn-sm" onclick="addToCart({id:11,title:'Orbital',author:'Samantha Harvey',format:'Broché',price:20.00,emoji:'📙',bg:'linear-gradient(145deg,#5A4A7B,#362955)'})">+ Ajouter au panier</button>
              </div>
            </div>
            <div class="wish-card">
              <div class="wish-cover" style="background:linear-gradient(145deg,#4A3B2A,#2E2010)" onclick="showPage('product')">📚<div class="wish-remove" onclick="event.stopPropagation();showToast('Retiré de la liste de souhaits')" title="Retirer">✕</div></div>
              <div class="wish-body">
                <div class="wish-title">Sapiens</div>
                <div class="wish-author">Yuval Noah Harari</div>
                <div class="wish-price">13.90 €</div>
                <button class="add-btn-sm" onclick="addToCart({id:8,title:'Sapiens',author:'Yuval Noah Harari',format:'Broché',price:13.90,emoji:'📚',bg:'linear-gradient(145deg,#4A3B2A,#2E2010)'})">+ Ajouter au panier</button>
              </div>
            </div>
          </div>
        </div>

        <!-- PROFIL -->
        <div id="acc-profile" class="acc-tab">
          <div class="acc-header"><h2>Mon profil</h2></div>
          <div class="profile-form">
            <div class="form-grid">
              <div class="fld"><label>Prénom</label><input type="text" value="Jean"></div>
              <div class="fld"><label>Nom</label><input type="text" value="Dupont"></div>
              <div class="fld full"><label>Adresse e-mail</label><input type="email" value="jean.dupont@exemple.com"></div>
              <div class="fld"><label>Téléphone</label><input type="tel" value="+33 6 12 34 56 78"></div>
              <div class="fld"><label>Date de naissance</label><input type="date" value="1990-04-15"></div>
              <div class="fld full"><label>Nouveau mot de passe</label><input type="password" placeholder="Laisser vide pour ne pas modifier"></div>
              <div class="fld full"><label>Confirmer le nouveau mot de passe</label><input type="password" placeholder="••••••••"></div>
            </div>
            <div style="margin-top:20px;display:flex;gap:10px">
              <button class="btn-primary" onclick="showToast('Profil mis à jour avec succès')">Enregistrer les modifications</button>
              <button class="btn-outline" onclick="showToast('Modifications annulées')">Annuler</button>
            </div>
          </div>
        </div>

        <!-- ADRESSES -->
        <div id="acc-addresses" class="acc-tab">
          <div class="acc-header">
            <h2>Mes adresses</h2>
            <button class="btn-primary" style="font-size:13px;padding:8px 14px" onclick="showToast('Formulaire d\'ajout d\'adresse')">+ Ajouter une adresse</button>
          </div>
          <div class="addresses-grid">
            <div class="address-card default">
              <div class="address-badge">Par défaut</div>
              <div class="address-name">Jean Dupont</div>
              <div class="address-line">12 rue des Lilas</div>
              <div class="address-line">75011 Paris, France</div>
              <div class="address-line">+33 6 12 34 56 78</div>
              <div class="address-actions">
                <button onclick="showToast('Modification d\'adresse')">Modifier</button>
                <button onclick="showToast('Adresse supprimée')">Supprimer</button>
              </div>
            </div>
            <div class="address-card">
              <div class="address-name">Jean Dupont (Bureau)</div>
              <div class="address-line">45 avenue de la République</div>
              <div class="address-line">75003 Paris, France</div>
              <div class="address-line">+33 1 42 00 00 00</div>
              <div class="address-actions">
                <button onclick="showToast('Modification d\'adresse')">Modifier</button>
                <button onclick="showToast('Adresse supprimée')">Supprimer</button>
                <button onclick="showToast('Adresse définie par défaut')">Définir par défaut</button>
              </div>
            </div>
          </div>
        </div>

        <!-- PARAMÈTRES -->
        <div id="acc-settings" class="acc-tab">
          <div class="acc-header"><h2>Paramètres</h2></div>
          <div class="settings-list">
            <div class="settings-section">
              <h4>Notifications par e-mail</h4>
              <div class="setting-row"><div><div class="setting-label">Nouveautés & promotions</div><div class="setting-desc">Recevoir les nouvelles parutions et offres exclusives</div></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
              <div class="setting-row"><div><div class="setting-label">Statut de commande</div><div class="setting-desc">Mises à jour de livraison et confirmation</div></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
              <div class="setting-row"><div><div class="setting-label">Suggestions personnalisées</div><div class="setting-desc">Recommandations basées sur vos lectures</div></div><label class="toggle"><input type="checkbox"><span class="toggle-slider"></span></label></div>
              <div class="setting-row"><div><div class="setting-label">Newsletter mensuelle</div><div class="setting-desc">Le meilleur de la littérature chaque mois</div></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
            </div>
            <div class="settings-section">
              <h4>Confidentialité</h4>
              <div class="setting-row"><div><div class="setting-label">Cookies analytiques</div><div class="setting-desc">Améliorer votre expérience de navigation</div></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
              <div class="setting-row"><div><div class="setting-label">Partage avec partenaires</div><div class="setting-desc">Autoriser le partage de données anonymisées</div></div><label class="toggle"><input type="checkbox"><span class="toggle-slider"></span></label></div>
            </div>
            <div class="settings-section">
              <h4>Zone dangereuse</h4>
              <button class="btn-danger" onclick="if(confirm('Supprimer définitivement votre compte ?')) showToast('Demande de suppression envoyée')">Supprimer mon compte</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endverbatim


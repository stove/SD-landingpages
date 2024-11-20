<?php

/*
Plugin Name: Landningssida
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: En kort beskrivning av pluginet.
Version: 1.0
Author: buzz
Author URI: http://URI_Of_The_Plugin_Author
License: En licens, t.ex. GPL2
*/
?>

<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ergo Saddle</title>
    <script src="js/main.js"></script>
	<link rel="stylesheet" href="css/style.css">


</head>
<body>
<div class="page-container">
	<header class="header">
		<a href="#" class="brand">
            <svg
                    class="sd-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
            >
                <path d="M17 18a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11Z" />
                <path d="M17 6H7" />
                <path d="M7 18h10" />
            </svg>

            <span>SupportDesign </span>
		</a>
		<nav class="nav">
			<a href="#features">Egenskaper</a>
			<a href="#benefits">Fördelar</a>
			<a href="#contact">Kontakt</a>
		</nav>
	</header>

	<main>
		<section id="hero" class="hero">
			<div class="content">
				<h1 class="hero-header">Förändra din arbetsdag med ergonomisk komfort</h1>
				<p>Upptäck den perfekta balansen mellan stöd och rörlighet med vår innovativa sadelstol...</p>
				<div class="cta-buttons">
					<a href="#contact" class="btn btn-primary">Prova gratis</a>
					<a id="learnMoreBtn" href="#features" class="btn btn-secondary">Läs mer</a>
				</div>
			</div>
			<img src="/placeholder.svg" alt="Ergonomisk sadelstol" class="hero-img">
		</section>
        <!-- Modal -->
        <div class="modal-overlay" id="modalOverlay"></div>
        <div class="modal" id="modal">
            <div class="modal-header">Mer information</div>
            <div class="modal-body">
                Här är detaljerad information om produkten. Denna text kan anpassas efter behov.
            </div>
            <div class="modal-footer">
                <button class="btn btn-close" id="closeModalBtn">Stäng</button>
            </div>
        </div>
		<section id="features" class="features">
			<h2 class="hero-subheader">Egenskaper designade för din komfort</h2>
			<div class="feature-list">
				<div class="feature-item">
					<div class="icon-circle"><svg
							class="h-6 w-6 text-white"
							fill="none"
							height="24"
							stroke="currentColor"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							width="24"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path d="M12 3l-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
							<path d="M5 3v4" />
							<path d="M19 17v4" />
							<path d="M3 5h4" />
							<path d="M17 19h4" />
						</svg>
					</div>
					<h3>360° Rotation</h3>
					<p>Enkel rörlighet och åtkomst i alla riktningar.</p>
				</div>
				<div class="feature-item">
					<div class="icon-circle"><svg
							class="h-6 w-6 text-white"
							fill="none"
							height="24"
							stroke="currentColor"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							width="24"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9" />
							<path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5" />
							<circle cx="12" cy="12" r="2" />
							<path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5" />
							<path d="M19.1 4.9C23 8.8 23 15.1 19.1 19" />
						</svg>
					</div>
					<h3>Justerbar höjd</h3>
					<p>Anpassa din sittställning för optimal komfort.</p>
				</div>
				<div class="feature-item">
					<div class="icon-circle"><svg
							class="h-6 w-6 text-white"
							fill="none"
							height="24"
							stroke="currentColor"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							width="24"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
							<circle cx="12" cy="12" r="3" />
						</svg></div>
					<h3>Ergonomisk design</h3>
					<p>Främjar god hållning och minskar belastning.</p>
				</div>
			</div>
		</section>

		<section id="benefits" class="benefits">
			<h2 class="hero-subheader">Fördelar för proffs</h2>
			<div class="benefit-list">
				<div class="benefit-item">
                    <div class="circle-checked-outline">
                        <svg
                                class="check-icon"
                                fill="none"
                                height="16"
                                stroke="green"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                width="16"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="M5 12l5 5L20 7" />
                        </svg>
                    </div>
<!--					<div class="circle-checked">-->
<!--                        -->
<!--						<svg-->
<!--							class="check-icon"-->
<!--							fill="none"-->
<!--							height="16"-->
<!--							stroke="white"-->
<!--							stroke-linecap="round"-->
<!--							stroke-linejoin="round"-->
<!--							stroke-width="2"-->
<!--							viewBox="0 0 24 24"-->
<!--							width="16"-->
<!--							xmlns="http://www.w3.org/2000/svg"-->
<!--						>-->
<!--							<path d="M5 12l5 5L20 7" />-->
<!--						</svg>-->
<!--					</div>-->

					<h3>För tandläkare</h3>
					<p>Behåll god hållning under långa procedurer...</p>
				</div>
				<div class="benefit-item">
					<div class="circle-checked-outline">
						<svg
							class="check-icon"
							fill="none"
							height="16"
							stroke="green"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							width="16"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path d="M5 12l5 5L20 7" />
						</svg>
					</div>

					<h3>För kontorsarbetare</h3>
					<p>Förbättra cirkulation och stärk kärnmuskulaturen...</p>
				</div>
				<div class="benefit-item">
					<div class="circle-checked-outline">
						<svg
							class="check-icon"
							fill="none"
							height="16"
							stroke="green"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							width="16"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path d="M5 12l5 5L20 7" />
						</svg>
					</div>

					<h3>För terapeuter</h3>
					<p>Lätt att röra sig runt klienter...</p>
				</div>
			</div>
		</section>

		<section id="contact" class="contact">
			<h2 class="hero-subheader">Prova gratis idag</h2>
			<form class="contact-form">
				<label for="name">Namn</label>
				<input type="text" id="name" placeholder="Ange ditt namn" required>
				<label for="email">E-post</label>
				<input type="email" id="email" placeholder="Ange din e-postadress" required>
				<label for="profession">Yrke</label>
				<input type="text" id="profession" placeholder="Ange ditt yrke" required>
				<label for="message">Meddelande (Valfritt)</label>
				<textarea id="message" placeholder="Eventuella specifika önskemål?"></textarea>
				<button type="submit" class="btn btn-primary">Begär gratis provstol</button>
			</form>
		</section>
	</main>

	<footer class="footer">
		<p>© 2024 Ergo Saddle. Alla rättigheter förbehållna.</p>
		<nav>
			<a href="#">Användarvillkor</a>
			<a href="#">Integritetspolicy</a>
		</nav>
	</footer>
</div>
</body>
</html>

// headConfig.js - Fichier contenant toutes les informations pour générer la balise head
const siteConfig = {
    // Informations générales du site
    siteName: "Didactique pour les Mathématiques",
    siteUrl: "https://iamhenri.github.io/notes-maths-tex/",
    defaultTitle: "Notes explicatives en mathématiques rédigées en LaTeX/HTML",
    defaultDescription: "Ensemble des notions de mathématiques depuis la maternelle décrites par le texte et les dessins. Concepts mathématiques expliqué depuis zéro pour comprendre ces idées et apprendre à réfléchir dans l'abstrait.",
    defaultKeywords: "html, css, javascript, LaTeX, github pages, maths, jeux vidéos, maths pour les jeux vidéos",
    author: "Henri Lecaye",
    language: "fr",
    
    // Réseaux sociaux
    social: {
        ogImage: "https://votre-utilisateur.github.io/votre-repo/images/og-image.jpg",
        twitterImage: "https://votre-utilisateur.github.io/votre-repo/images/twitter-image.jpg",
        twitterHandle: "@votrecompte"
    },
    
    // Favicon et icônes
    icons: {
        favicon: "/favicon.ico",
        appleTouchIcon: "/apple-touch-icon.png",
        favicon32: "/favicon-32x32.png",
        favicon16: "/favicon-16x16.png",
        manifest: "/site.webmanifest"
    },
    
    // Fichiers CSS globaux
    globalStyles: [
        "screen.css"//,
        //"/css/normalize.css"
    ],
    
    // Fichiers JavaScript globaux (en plus de ce script)
    globalScripts: [
        "https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML"//,
        //"/js/main.js"
    ],
    
    // Polices Google (optionnel)
    googleFonts: [
        "Roboto:400,700",
        "Open+Sans:400,600,700"
    ],
    
    // Google Analytics (optionnel)
    googleAnalyticsId: "UA-XXXXXXXXX-X"
};

// Fonction pour générer la balise head
function generateHead(pageConfig = {}) {
    // Fusionner les configurations de page spécifiques avec la config par défaut
    const config = {
        title: pageConfig.title || siteConfig.defaultTitle,
        description: pageConfig.description || siteConfig.defaultDescription,
        keywords: pageConfig.keywords || siteConfig.defaultKeywords,
        canonicalUrl: pageConfig.canonicalUrl || siteConfig.siteUrl + (pageConfig.slug || ''),
        customMeta: pageConfig.customMeta || [],
        additionalStyles: pageConfig.additionalStyles || [],
        additionalScripts: pageConfig.additionalScripts || []
    };

    // Créer le contenu du head
    let headContent = `
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>${config.title}</title>
    <meta name="description" content="${config.description}">
    <meta name="keywords" content="${config.keywords}">
    <meta name="author" content="${siteConfig.author}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="${siteConfig.language}">
    <link rel="canonical" href="${config.canonicalUrl}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="${config.canonicalUrl}">
    <meta property="og:title" content="${config.title}">
    <meta property="og:description" content="${config.description}">
    <meta property="og:image" content="${siteConfig.social.ogImage}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="${config.canonicalUrl}">
    <meta property="twitter:title" content="${config.title}">
    <meta property="twitter:description" content="${config.description}">
    <meta property="twitter:image" content="${siteConfig.social.twitterImage}">
    <meta property="twitter:creator" content="${siteConfig.social.twitterHandle}">
    
    <!-- Favicon -->
    <link rel="icon" href="${siteConfig.icons.favicon}">
    <link rel="apple-touch-icon" sizes="180x180" href="${siteConfig.icons.appleTouchIcon}">
    <link rel="icon" type="image/png" sizes="32x32" href="${siteConfig.icons.favicon32}">
    <link rel="icon" type="image/png" sizes="16x16" href="${siteConfig.icons.favicon16}">
    <link rel="manifest" href="${siteConfig.icons.manifest}">
    `;
    
    // Ajouter Google Fonts si configuré
    if (siteConfig.googleFonts && siteConfig.googleFonts.length > 0) {
        const fontFamily = siteConfig.googleFonts.join('|');
        headContent += `
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=${fontFamily}&display=swap" rel="stylesheet">`;
    }
    
    // Ajouter les styles globaux
    siteConfig.globalStyles.forEach(stylesheet => {
        headContent += `
    <link rel="stylesheet" href="${stylesheet}">`;
    });
    
    // Ajouter les styles spécifiques à la page
    config.additionalStyles.forEach(stylesheet => {
        headContent += `
    <link rel="stylesheet" href="${stylesheet}">`;
    });
    
    // Ajouter Google Analytics si configuré
    if (siteConfig.googleAnalyticsId) {
        headContent += `
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=${siteConfig.googleAnalyticsId}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '${siteConfig.googleAnalyticsId}');
    </script>`;
    }
    
    // Ajouter des balises meta personnalisées
    config.customMeta.forEach(meta => {
        headContent += `
    <meta ${Object.entries(meta).map(([key, value]) => `${key}="${value}"`).join(' ')}>`;
    });
    
    // Ajouter les scripts globaux
    siteConfig.globalScripts.forEach(script => {
        headContent += `
    <script src="${script}" defer></script>`;
    });
    
    // Ajouter les scripts spécifiques à la page
    config.additionalScripts.forEach(script => {
        headContent += `
    <script src="${script}" defer></script>`;
    });
    
    return headContent;
}

// Exécuter automatiquement au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    // Chercher la configuration de page spécifique (si définie)
    const pageConfig = window.pageConfig || {};
    
    // Générer et insérer le contenu du head
    document.head.innerHTML += generateHead(pageConfig);
});
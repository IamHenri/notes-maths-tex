// Exemple : head-content.js

function injectHeadContent() {
    const headContent = `
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mathématiques appliquées, simples et utiles</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="favicon.ico">
    `;
    document.head.innerHTML += headContent;
}

// Appeler la fonction
injectHeadContent();
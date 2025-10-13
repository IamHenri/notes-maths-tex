document.addEventListener("DOMContentLoaded", function () {
  // Sélectionne toutes les div marquées par l'attribut data-hideshow
  const hideShowBlocks = document.querySelectorAll("[data-hideshow]");

  hideShowBlocks.forEach((block) => {
    const title = block.getAttribute("data-hideshow") || "Afficher / Masquer";
    const content = block.innerHTML;

    // Crée un bouton et un conteneur pour le contenu
    const button = document.createElement("button");
    button.textContent = title;
    button.style.cursor = "pointer";
    button.style.marginBottom = "5px";

    const contentDiv = document.createElement("div");
    contentDiv.innerHTML = content;
    contentDiv.style.display = "none";

    // Ajoute la logique de bascule
    button.addEventListener("click", () => {
      contentDiv.style.display =
        contentDiv.style.display === "none" ? "block" : "none";
    });

    // Nettoie et insère les nouveaux éléments
    block.innerHTML = "";
    block.appendChild(button);
    block.appendChild(contentDiv);
  });
});

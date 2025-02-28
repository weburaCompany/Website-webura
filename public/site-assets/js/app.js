import { Collapse, Ripple, initMDB } from "mdb-ui-kit";

// Animation logic


const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  },
  { threshold: 0.1 }
);

const featureCards = document.querySelectorAll(".feature-card");
featureCards.forEach((card) => observer.observe(card));



initMDB({ Collapse, Ripple });

const languageDropdown = document.getElementById("language-dropdown");
const languageOptions = document.getElementById("language-options");
const languageFlag = document.getElementById("language-flag");
const languageText = languageDropdown.querySelector("span");

languageDropdown.addEventListener("click", () => {
  languageOptions.style.display =
    languageOptions.style.display === "block" ? "none" : "block";
});

languageOptions.addEventListener("click", (event) => {
  const selectedOption = event.target.closest("div");
  if (selectedOption) {
    const lang = selectedOption.getAttribute("data-lang");
    const flagSrc = selectedOption.querySelector("img").src;
    const language = selectedOption.querySelector("span").textContent;

    languageFlag.src = flagSrc;
    languageFlag.alt = language;
    languageText.textContent = language;

    languageOptions.style.display = "none";
  }
});

window.addEventListener("click", (event) => {
  if (!languageSelect.contains(event.target)) {
    languageOptions.style.display = "none";
  }
});

document.querySelectorAll(".faq-question").forEach((question) => {
  question.addEventListener("click", () => {
    const answer = question.nextElementSibling;
    const isActive = question.classList.contains("active");

    // Reset all questions and answers
    document
      .querySelectorAll(".faq-question")
      .forEach((q) => q.classList.remove("active"));
    document
      .querySelectorAll(".faq-answer")
      .forEach((a) => a.classList.remove("active"));

    if (!isActive) {
      question.classList.add("active");
      answer.classList.add("active");
    }
  });
});

// let navbar = document.querySelector(".navbar");
// window.onscroll = function () {
//   if (scrollY > 20) {
//     navbar.style.backgroundColor = "#e9eaea";
//     navbar.style.position = "fixed";
//     navbar.style.top = "0";
//     navbar.style.left = "0";
//     navbar.style.right = "0";
//     navbar.style.zIndex = "300";
//     navbar.style.transition = "1s";

//   }else{
//     navbar.style.position = "static";
//     navbar.style.zindex = "300";

//   }
// }



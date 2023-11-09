let lang = navigator.language || navigator.userLanguage;

// Load the appropriate HTML file based on the user's language preference
console.log(lang)
if (lang === 'en') {
    window.location.href = '/index_en.html';
} else if (lang === 'pl') {
    window.location.href = '/index_pl.html';
} else {
    // Default to English or any other fallback language
    window.location.href = '/index_en.html';
}
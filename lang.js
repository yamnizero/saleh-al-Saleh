const translations = {
    en: {
        //header
        home: 'Home',
        service: 'Service',
        about: 'About US',
        contact: 'Contact Us',
        // body
        Saleh_Al_Saleh: "Saleh Al Saleh Law Firm and Legal Consulting",
        english: 'English',
        arabic: 'عربي',

    },

    ar: {
        //header
        home: "الصفحة الرئيسية",
        service: 'خدماتنا',
        about: 'من نحن',
        contact: 'تواصل معنا',
        // body
        Saleh_Al_Saleh: "صالح ال صالح للمحاماة و الاستشارات القانونية",
        english: 'English',
        arabic: 'عربي',
    },
};


const languageSelector = document.querySelector('select');
languageSelector.addEventListener('change', (event) => {
    setLanguage(event.target.value);
    localStorage.setItem('lang',event.target.value)

});
document.addEventListener('DOMContentLoaded', () => {
   
    setLanguage(localStorage.getItem("lang"));
})
const setLanguage = (language) => {
    const elements = document.querySelectorAll("[data-i18n]");
    elements.forEach((element) =>{
        const translationsKey = element.getAttribute("data-i18n");
        element.textContent = translations[language][translationsKey];
    });
    document.dir = language == "ar" ? "rtl" :"ltr";
};
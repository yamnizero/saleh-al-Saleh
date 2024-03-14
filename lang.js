const translations = {
    en: {
        //header
        home: 'Home',
        service: 'Service',
        about: 'About US',
        contact: 'Contact Us',
        // body
        Saleh_Al_Saleh: "Saleh Al Saleh Law Firm and Legal Consulting",
        body_index:"Saleh Al Saleh Law Firm and Legal Consulting is one of the most prominent legal services providers in the UAE through legal expertise and in professional ways, ensuring transactional satisfaction from any legal problems facing our valued clients. The Office deals in all kinds of civil, commercial and criminal cases and provides legal services in various fields and at all levels.",
        
        
        
        
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
        body_index:"مكتب صالح الصالح للمحاماة والاستشارات القانونية هو واحد من أبرز مقدمي الخدمات القانونية في الإمارات العربية المتحدة من خلال الخبرة القانونية والطرق المهنية، مضمونًا رضى العملاء من المشاكل القانونية التي تواجهها. يتعامل المكتب في جميع أنواع القضايا المدنية والتجارية والجنائية ويقدم خدمات قانونية في مختلف المجالات وعلى جميع المستويات.",




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
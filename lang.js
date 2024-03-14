const translations = {
    en: {
        //header
        home: 'Home',
        service: 'Service',
        about: 'About US',
        contact: 'Contact Us',
        // Service
        LegalConsultations:"Legal Consultations",
        legalDocuments:"Preparation and drafting of legal documents",
        LegalProcedures:"Legal procedures, registration legal credits",
        LegalRepresentation:"Legal Representation",
        ResearchServices:"Research services",
        PenalCases:"Penal cases",
        CriminalCases:"Criminal Cases",
        CybercrimeLawsuit:"Cybercrime Lawsuit",
        LaborLawsuit:"Labor Lawsuit",
        RentDisputes:"Rent Disputes",
        FamilyIssuesAndConditions:"Family issues and conditions",
        Insurance:"Insurance",
        MaritimeDisputes:"Maritime disputes",
        BankingAndFinance:"Banking and Finance",
        TradingCompanies:"Trading companies",
        LitigationAndDisputeResolution:"Litigation And Dispute Resolution",
        PrecautionaryMeasures:"Precautionary measures",
        ExecutiveActions:"Executive Actions",
        RealEstateDisputes:"Real estate disputes",
        DebtCollection:"Debt Collection",
        
        // body
        Saleh_Al_Saleh: "Saleh Al Saleh Law Firm and Legal Consulting",
        body_index:"Saleh Al Saleh Law Firm and Legal Consulting is one of the most prominent legal services providers in the UAE through legal expertise and in professional ways, ensuring transactional satisfaction from any legal problems facing our valued clients. The Office deals in all kinds of civil, commercial and criminal cases and provides legal services in various fields and at all levels.",
        OurMission:"Our Mission",
        OurVision:"Our Vision",
        OurMissionBody: "we to provide exceptional legal guidance and support to our clients. We strive to offer personalized solutions, tailored to their unique needs and circumstances.  Our goal is not only to navigate legal complexities effectively but also to empower our clients with knowledge and confidence in their legal matters. With a commitment to integrity, professionalism, and client satisfaction, we aim to be a trusted partner in achieving our clients' legal objectives",
        OurVisionBody:"we to be the foremost destination for legal expertise and guidance, recognized for our unwavering commitment to excellence, innovation, and client satisfaction. We aspire to set new standards in the legal industry by fostering a culture of collaboration, integrity, and forward-thinking. Through our dedication to staying ahead of legal trends and advancements, we aim to empower individuals and businesses alike, ensuring they navigate legal challenges with confidence and clarity.",
        
        
        english: 'English',
        arabic: 'عربي',

    },

    ar: {
        //header
        home: "الصفحة الرئيسية",
        service: 'خدماتنا',
        about: 'من نحن',
        contact: 'تواصل معنا',
        // Service
        LegalConsultations:"الاستشارات القانونية",
        legalDocuments:"إعداد وصياغة الوثائق القانونية",
        LegalProcedures:"الإجراءات القانونية، تسجيل الاعتمادات القانونية",
        LegalRepresentation:"التمثيل القانوني",
        ResearchServices:"خدمات البحث",
        PenalCases:"قضايا جنائية",
        CriminalCases:"قضايا جنائية",
        CybercrimeLawsuit:"   الجرائم الإلكترونية",
        LaborLawsuit:"دعوى قانونية في مجال العمل",
        RentDisputes:"نزاعات الإيجار",
        FamilyIssuesAndConditions:"قضايا الأسرة والظروف",
        Insurance:"التأمين",
        MaritimeDisputes:"نزاعات بحرية",
        BankingAndFinance:"البنوك والتمويل",
        TradingCompanies:"شركات التجارة",
        LitigationAndDisputeResolution:"التقاضي وحل النزاعات",
        PrecautionaryMeasures:"التدابير الاحترازية",
        ExecutiveActions:"إجراءات تنفيذية",
        RealEstateDisputes:"نزاعات العقارات",
        DebtCollection:"تحصيل الديون",

        // body
        Saleh_Al_Saleh: "صالح ال صالح للمحاماة و الاستشارات القانونية",
        body_index:"مكتب صالح الصالح للمحاماة والاستشارات القانونية هو واحد من أبرز مقدمي الخدمات القانونية في الإمارات العربية المتحدة من خلال الخبرة القانونية والطرق المهنية، مضمونًا رضى العملاء من المشاكل القانونية التي تواجهها. يتعامل المكتب في جميع أنواع القضايا المدنية والتجارية والجنائية ويقدم خدمات قانونية في مختلف المجالات وعلى جميع المستويات.",
        OurMission:"مهمتنا",
        OurVision:"رؤيتنا",
        OurMissionBody:"نحن نسعى لتقديم إرشاد قانوني استثنائي ودعم لعملائنا. نحن نسعى لتقديم حلول شخصية، مصممة لتلبية احتياجاتهم وظروفهم الفريدة. هدفنا ليس فقط توجيه العملاء عبر التعقيدات القانونية بفعالية، ولكن أيضًا تمكينهم بالمعرفة والثقة في شؤونهم القانونية. من خلال التزامنا بالنزاهة والاحترافية ورضا العملاء، نهدف إلى أن نكون شريكًا موثوقًا في تحقيق أهدافهم القانونية.",
        OurVisionBody:"نحن نسعى أن نكون الوجهة الرئيسية للخبرة القانونية والإرشاد، معترفين بالتزامنا الثابت بالتميز والابتكار ورضا العملاء. نطمح لوضع معايير جديدة في صناعة القانون من خلال تعزيز ثقافة التعاون والنزاهة والتفكير المستقبلي. من خلال التفاني للبقاء في صدارة الاتجاهات القانونية والتطورات، نهدف إلى تمكين الأفراد والشركات على حد سواء، مضمونين أنهم سيتخطون التحديات القانونية بثقة ووضوح.",


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
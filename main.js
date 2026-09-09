const translations = {
            en: {
                aboutMe: "About Me",
                language: "Language",
                resume: "Résumé",
                resumeFile: "images/CV_Yousef_EN.pdf",
                aboutText: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quae, magni facere error, facilis alias libero ipsum eaque nemo commodi enim ea doloribus vel ut veniam rerum. Ducimus, debitis cum.",
                projects: "Projects",
                museumProject: "Museum Amsterdam website",
                roomUsProject: "Pitched company website",
                nintendoProject: "Nintendo webshop project",
                reactProject: "Learning how React works",
                title: "Yousef Abdel Gawad | Portfolio"
            },
            nl: {
                aboutMe: "Over mij",
                language: "Taal",
                resume: "CV",
                resumeFile: "images/CV_Yousef_NL.pdf",
                aboutText: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quae, magni facere error, facilis alias libero ipsum eaque nemo commodi enim ea doloribus vel ut veniam rerum. Ducimus, debitis cum.",
                projects: "Projecten",
                museumProject: "Website Museum Amsterdam",
                roomUsProject: "Website van het gepitchte bedrijf",
                nintendoProject: "Nintendo-webshopproject",
                reactProject: "Leren werken met React",
                title: "Yousef Abdel Gawad | Portfolio"
            }
        };

        const languageSelect = document.getElementById("language");

        function setLanguage(language) {
            const selectedTranslations = translations[language];

            document.documentElement.lang = language;
            document.title = selectedTranslations.title;
            document.querySelectorAll("[data-resume-link]").forEach((link) => {
                link.href = selectedTranslations.resumeFile;
            });
            document.querySelectorAll("[data-i18n]").forEach((element) => {
                element.textContent = selectedTranslations[element.dataset.i18n];
            });
        }

        languageSelect.addEventListener("change", (event) => {
            setLanguage(event.target.value);
        });
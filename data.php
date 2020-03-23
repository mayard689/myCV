<?php





/****************************************/
/*********** ADRIEN DATA ****************/
/****************************************/

//SKILLS DATA

$adrienOrganisation =[
    "Management d'équipe" => ["details"=>"Lorem ipsum"],
    "Management de projet" => ["details"=>"Lorem ipsum"],
    "Pilotage de processus" => ["details"=>"Lorem ipsum"],
    "cycle en V" => ["details"=>"Lorem ipsum"],
    "SCRUM" => ["details"=>"Lorem ipsum"],
];

$adrienScience =[
    "Développement de transducteurs" => ["details"=>"Lorem ipsum"],
    "Filtrage" => ["details"=>"Lorem ipsum"],
    "Detection de motifs" => ["details"=>"Lorem ipsum"],
    "Correction des erreurs" => ["details"=>"Lorem ipsum"],
    "Optimisation des procédés" => ["details"=>"Lorem ipsum"],
];

$adrienComputer =[
    "Java SE" => ["details"=>"Lorem ipsum"],
    "PHP, HTML, CSS" => ["details"=>"Lorem ipsum"],
    "Logiciel embarqué" => ["details"=>"Lorem ipsum"],
];

$adrienSkills=[
    "Sciences Physiques" => $adrienScience,
    "Developpement Informatique" => $adrienComputer,
    "Organisation" => $adrienOrganisation
];


//EXPERIENCE DATA

$adrienJobs=[
    ["name" => "Developpeur", "company" => "LUAN", "startDate" => "01-02-2004", "endDate" => "01-08-2004", "results" => "Lorem ipsum"],
    ["name" => "Chef de projet", "company" => "FARE", "startDate" => "01-06-2005", "endDate" => "14-09-2007", "results" => "Lorem ipsum"],
    ["name" => "Responsable de Laboratoire", "company" => "IPEV", "startDate" => "15-09-2007", "endDate" => "31-12-2008", "results" => "Lorem ipsum"],
    ["name" => "Chef de projet", "company" => "FARE", "startDate" => "01-4-2009", "endDate" => "31-12-2014", "results" => "Lorem ipsum"],
    ["name" => "Responsable de Laboratoire", "company" => "FARE", "startDate" => "01-01-2015", "endDate" => "31-07-2020", "results" => "Lorem ipsum"]
];

//SECTIONS NAMES

$adrienSectionName=[
    "whoami"=>"Qui suis je ?",
    "skills"=>" Compétent",
    "achievments"=>"Experimenté",
    "education" =>"Formé",
    "various"=>"Ouvert",
    "contact"=>"Contactez moi"
];


/****************************************/
/*********** Barney DATA ****************/
/****************************************/

//SKILLS DATA


$various =[
    "Fort potentiel" => ["details"=>"Presque étudiant à Harvard"],
    "Oreille Musical" => ["details"=>"Bassiste chez 'les Bémols'"],
    "Culture générale" => ["details"=>"Réalisation du documentaire 20000 lieues sous les bières"],
    "Entrepreneur" => ["details"=>"Création du 'roi chasseneige'"],
    "Grande force physique" => ["details"=>"Ancien Marines"]
];


$barneySkills=[
    "Moi :" => $various,
];


//EXPERIENCE DATA

$barneyJobs=[
    ["name" => "Bassiste", "company" => "Les bémols (Groupe de musique)", "startDate" => "01-02-2004", "endDate" => "01-08-2004", "results" => "Relance de l'activité des vitriers."],
    ["name" => "Réalisateur", "company" => "Auto Produit", "startDate" => "01-06-2005", "endDate" => "14-09-2007", "results" => "Vu par 15 personne chez Moe"],
    ["name" => "Entrepreneur", "company" => "Le roi chasseneige", "startDate" => "15-09-2007", "endDate" => "31-12-2008", "results" => "Route du bar déneigée"],
    ["name" => "Marines", "company" => "Armée, corps des marines", "startDate" => "01-4-2009", "endDate" => "31-12-2014", "results" => "Amélioration de la patience des gradés"],

];

//SECTIONS NAMES

$barneySectionName=[
    "whoami"=>"CV d'un Barman expérimenté",
    "skills"=>"Compétences",
    "achievments"=>"Expériences",
    "education" =>"Formations",
    "various"=>"Loisirs",
    "contact"=>"M'envoyer un donut's électronique"
];




//PERSON MANAGEMENT



$persons =[
    "adrien" => [
        "completeName" => "Adrien MAILLARD",
        "address"=> "34 rue du bourg",
        "phoneNumber" => "06.06.06.06.06",
        "email" => "adrien@truc.bidule",
        "stylesheet" => "cssAdrien",
        "sectionsNames" => $adrienSectionName,
        "skills" => $adrienSkills,
        "jobs" => $adrienJobs,
        "whoami" =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
        culpa qui officia deserunt mollit anim id est laborum."
    ],

    "barney" => [
        "completeName" => "Bernard Gumble",
        "address"=> "69 rue de la soif - Springfield",
        "phoneNumber"=>"07.07.07.07.07",
        "email" => "barney@truc.bidule",
        "stylesheet" => "cssBarney",
        "sectionsNames" => $barneySectionName,
        "skills" => $barneySkills,
        "jobs" => $barneyJobs,
        "whoami" =>"Hey guys. Je suis Barney, le barman qu'il vous faut. Vous verrez ici un aperçu de quelques une de mes compétences. C'est un 
        peu long donc n'hésitez pas à ouvrir une bière pendant votre lecture."
    ]
];

/*to be automatically calculated*/
$calendarMin='01-01-2004';
$calendarMax='31-07-2020';


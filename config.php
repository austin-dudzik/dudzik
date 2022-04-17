<?php

// Define the site URL
$site_url = "http://localhost/orig/dudzik.dev";

// Define email
$email = "austin@dudzik.dev";

// Define social links
$social = [
    "behance" => "https://behance.net/austin-dudzik",
    "linkedin" => "https://linkedin.com/in/austin-dudzik",
    "github" => "https://github.com/austin-dudzik",
];

// Define projects
$projects = [
    "spark" => [
        "name" => "Spark",
        "slug" => "spark",
        "url" => "https://dudzik.dev/demos/spark",
        "github" => "https://github.com/austin-dudzik/spark",
        "protected" => true,
        "short_desc" => "Task management platform",
        "lang" => ['HTML', 'CSS', 'Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'jQuery', 'Sass'],
        "description" => "Spark is an intuitive and helpful task management platform that assists in keeping track of tasks, notes, and reminders. Built using Laravel with PHP and Bootstrap, Spark provides a welcoming and easy-to-use interface to create, edit, and delete tasks.<br><br>While Spark is simple and easy to use out of the box, it provides powerful task features to better stay organized. Spark supports the ability to create task labels, allowing greater organization of tasks, and supports three different task views - list, grid, and table, for best task viewing.<br><br>Users can also set daily and weekly goals in Spark, encouraging them to reach their daily and weekly task goals, with progress indicators throughout the application for easy identification of current progress. Also included are multiple built-in themes, allowing users to personalize their account and best fit their personality.",
        "screenshots" => [
            ['01', 'Task inbox view'],
            ['02', 'Today view'],
            ['04', 'Schedule view'],
            ['05', 'Notes view'],
            ['06', 'Labels view'],
            ['07', 'Completed tasks view'],
            ['08', 'Individual label view'],
            ['09', 'Task grid view'],
            ['10', 'Task table view'],
            ['11', 'Settings view'],
            ['12', 'Task search view']
        ],
    ],
    "campfire" => [
        "name" => "Campfire",
        "slug" => "campfire",
        "url" => "https://dudzik.dev/demos/campfire",
        "github" => "https://github.com/austin-dudzik/campfire",
        "protected" => true,
        "short_desc" => "Website feedback tool",
        "lang" => ['HTML', 'CSS', 'JavaScript', 'jQuery', 'PHP', 'GitHub', 'MySQL', 'Bootstrap', 'Sass'],
        "description" => "Built during my earlier days of development and rebuilt recently to follow the latest code conventions, Campfire is a simple, yet useful website feedback tool that allows website owners to collect feedback on their website from their users. Owners can simply embed the JS widget on their site or use built-in standalone feedback pages to collect feedback from their users and see it all, collectively in one place.<br><br>Some features of Campfire include a WYSIWYG campaign editor, privacy controls, data importing and exporting, widget customization, and more, allowing for greater flexibility when collecting site feedback. Support for team members is also delivered out-of-the-box, allowing multiple administrators and editors to view and edit campaigns at once.<br><br>Campfire is built using vanilla PHP and Bootstrap, and utilizes a MySQL database for storage. It has also been developed with self-hosting in mind, allowing for easy deployment of the application to a server using the built-in auto-installer. It is open-source and available on GitHub.",
        "screenshots" => [
            ['01', 'Campaigns view'],
            ['02', 'Campaign editor view'],
            ['03', 'Feedback responses view'],
            ['04', 'Integrations view'],
            ['05', 'Privacy controls view'],
            ['06', 'Data Manager view'],
            ['07', 'Delete campaign view'],
            ['08', 'Profile view'],
            ['09', 'Team management view'],
            ['10', 'Log in view'],
            ['11', 'Standalone feedback page'],
            ['12', 'Embedded feedback widget']
        ],
    ],
    "insight" => [
        "name" => "Insight",
        "slug" => "insight",
        "url" => "",
        "github" => "",
        "protected" => false,
        "short_desc" => "Shop & customer management platform",
        "lang" => ['HTML', 'CSS', 'JavaScript', 'ASP.NET', 'C#', 'JSON', 'Oracle SQL', 'DBeaver', 'Confluence', 'Visual Studio', 'Mercurial', 'jQuery', 'Bootstrap'],
        "description" => "Towards the beginning of summer 2021, I joined the team at Snap-on Incorporated as a web developer intern, assisting in the development of new franchisee applications used out in the field. Throughout my time on the team, my primary focus has been on Insight, a new web application used by Snap-on franchisees to manage their shops and customers along their routes, solving the issue of franchisees having to print out their schedules daily in order to keep track of their stops.<br><br>Insight brings a new level of functionality to franchisees by allowing them to easily view active service orders, targeted customers, payment information, milestones, and more, offering a greater view of their shops and customers that was never possible previously. The application is built using Bootstrap, JavaScript, C#, AJAX, and an API backend, allowing for a quick and responsive experience for franchisees.<br><br>Since the start of development, the application has since been deployed to a select group of franchisees for use on company iPads and is expected to eventually roll out to all franchisees in the future, which has allowed us to better the platform and add new functionality before a full rollout.<br><br>The majority of my work with Insight has consisted of the continuation of development and maintenance, along with adding new functionality, improving UI, fixing bugs, and performing regular code analyses to ensure the application is up-to-date and follows the best development practices.",
        "screenshots" => [
            ['01', 'Shop and customer profile view'],
            ['02', 'RA customer targeting view'],
            ['03', 'EC customer targeting view'],
            ['04', 'Service orders view'],
            ['05', 'On Order report view'],
            ['06', 'Collection report view'],
            ['07', 'Spotlight recommendations view']
        ],
    ],
    "coordinator" => [
        "name" => "Coordinator",
        "slug" => "coordinator",
        "url" => "",
        "github" => "",
        "protected" => false,
        "short_desc" => "Task management platform",
        "lang" => ['HTML', 'CSS', 'JavaScript', 'ASP.NET', 'C#', 'JSON', 'Oracle SQL', 'DBeaver', 'Confluence', 'Visual Studio', 'Mercurial', 'jQuery', 'Bootstrap'],
        "description" => "TODO",
        "screenshots" => [

        ],
    ],
    "dune" => [
        "name" => "Dune",
        "slug" => "dune",
        "url" => "https://dudzik.dev/demos/dune",
        "github" => "",
        "protected" => true,
        "short_desc" => "Social media platform for Spotify",
        "lang" => ['Vue', 'Firebase', 'Spotify API', 'BootstrapVue', 'VueFire', 'JSON', 'NPM', 'Webpack'],
        "description" => "Dune is a first-of-its-kind social media platform, with deep integration with Spotify. In its entirety, Dune is the equivalent to Twitter, but specifically for sharing content from Spotify. After linking a personal Spotify account, Dune automatically pulls in all the user's liked tracks, albums, playlists, and followed artists, in addition to Spotify's collection of millions of songs and content, allowing users to instantly share their favorite content with their friends.<br><br>Working on this project gave me my first exposure to working with public APIs, with Dune utilizing the Spotify API to retrieve user content and the public catalog. Some features of the platform include post reactions, user following, commenting, and live updates, allowing users to interact connect and interact with other users and the content they see.<br><br>Dune is built in Vue with Vue CLI and utilizes the Spotify API for many actions on the platform, such as retrieving user libraries and media content within posts. All data is stored within a Firebase NoSQL database, allowing for real-time updates and data synchronization between users.",
        "screenshots" => [
            ['02', 'Dune landing page'],
            ['03', 'Account setup page'],
            ['04', 'Empty social feed view'],
            ['01', 'Social feed view'],
            ['05', 'Attach from Spotify catalog view'],
            ['06', 'Attach from personal library view'],
            ['07', 'Post composer view'],
            ['08', 'User profile view'],
            ['09', 'Trending hashtags view'],
            ['10', 'Individual hashtag view'],
            ['11', 'Trending songs view'],
            ['12', 'Dune users view'],
            ['13', 'Personal settings view'],
            ['14', 'Account notifications view'],
        ],
    ],
//    "crinkle" => [
//        "name" => "Crinkle",
//        "slug" => "crinkle",
//        "url" => "https://crinkle.io",
//        "github" => "",
//        "protected" => true,
//        "short_desc" => "Link shortening service",
//        "lang" => ['HTML', 'CSS', 'JavaScript', 'Laravel', 'PHP', 'MySQL', 'Bootstrap'],
//        "description" => "TODO",
//        "screenshots" => [
//
//        ],
//    ],
    "yale" => [
        "name" => "Yale SoA",
        "slug" => "yale",
        "url" => "https://xd.adobe.com/view/046aeb6d-d98a-4042-957f-de9727dd9d71-5139/?fullscreen&hints=off",
        "github" => "",
        "protected" => false,
        "short_desc" => "Mock school website redesign",
        "lang" => ['Adobe XD', 'Trello', 'Slack', 'Google Docs', 'Lucidchart'],
        "description" => "For the Yale School of Art website project, we were tasked with finding an existing website in need of a redesign and then redesigning it to make it more functional and easier to use. Since the existing Yale SoA site is lacking and difficult to navigate, this was the perfect opportunity to envision the potential that could come out of a redesign.<br><br>After developing an initial project proposal, business requirements, task analyses, and personas for the school site, the goal was to develop wireframes and prototypes that represent what the future of the site could look like. Using Adobe XD for wireframing, mockups, and prototyping, I worked to develop a new site structure and design that focused on simplifying the navigation experience, improving the consistency of the brand, and ensuring accessibility standards were met.<br><br>At the end of this usability project, a consistent and modern site prototype was the outcome, that successfully passed the stages of usability testing. The complete school site redesign exists as a full-fledged site prototype, published on Adobe Creative Cloud.",
        "screenshots" => [
            ['01', 'Yale SoA homepage'],
            ['02', 'Costs overview page'],
            ['03', 'Event reservation page'],
            ['04', 'Reservation details page'],
            ['05', 'Reservation complete page'],
            ['06', 'Newsletter promotion page'],
            ['07', 'Newsletter signup page'],
            ['08', 'Newsletter confirmation page'],
            ['09', 'Student art gallery page'],
            ['10', 'Program overview page'],
            ['11', 'Current Yale School of Art homepage']
        ],
    ],
    "eric-carle" => [
        "name" => "Eric Carle",
        "slug" => "eric-carle",
        "url" => "https://dudzik.dev/demos/eric-carle",
        "github" => "",
        "protected" => false,
        "short_desc" => "Mock author homepage",
        "lang" => ['WordPress', 'PHP', 'HTML', 'CSS', 'MySQL'],
        "description" => "This project consists of a mock author website that I was tasked with creating, using WordPress. The site was built using a child theme to create a unique and personalized feel for the site. In addition, a custom plugin was developed to manage book listings, customer reviews, and genres published to the site, with additional author settings and content types included in the plugin.<br><br>The Eric Carle mock author site is split into multiple pages, with books, awards, about information, and so on being divided into their respective sections. The theme is responsive on all devices and the site uses custom taxonomies for book and review listing support. In addition, a custom review shortcode was developed, allowing for random reviews to be displayed across the site and a custom widget that displays a random selection of Carle's books in the website sidebar.<br><br>Some other key highlights of the site include a full review and rating breakdown for each book listing and an organized plugin backend that makes managing the site's content and settings as simple as possible.",

        "screenshots" => [
            ['01', 'Eric Carle homepage'],
            ['02', 'Author biography page'],
            ['03', 'Books list page'],
            ['04', 'Individual book page'],
            ['05', 'Author awards page'],
            ['06', 'Contact page'],
            ['07', 'WordPress admin login page'],
            ['08', 'Custom WP publications plugin'],
            ['09', 'Backend books management'],
            ['10', 'Genre configuration page'],
            ['11', 'Backend reviews management'],
            ['12', 'Custom plugin configuration page']
        ],
    ],
    "nova" => [
        "name" => "Nova",
        "slug" => "nova",
        "url" => "https://dudzik.dev/demos/nova",
        "github" => "https://github.com/austin-dudzik/nova",
        "protected" => true,
        "short_desc" => "User feedback collection platform",
        "lang" => ['HTML', 'CSS', 'JavaScript', 'jQuery', 'PHP', 'MySQL', 'Bootstrap', 'JSON'],
        "description" => "Nova is a versatile feedback board application that allows users to submit feedback, share ideas, and discuss topics. The application is built with a custom PHP API, utilizing JavaScript to provide a fast user experience using AJAX calls. Nova includes a multitude of features that help with feedback collection and management, such as full customization, a built-in roadmap tool that allows users to see the status of their feedback, and comment functionality, allowing users to share additional feedback by replying to posted suggestions.<br><br>Nova has a big focus on privacy and niche feedback collection, with support for different feedback board types. Administrators have the option to set boards to public, private, or unlisted, allowing great control over who can post and see content. The application includes a global search tool, allowing for users to search for feedback, users, and boards, directly from one place.<br><br>The project is open-source on available on GitHub, with the hopes of providing a better feedback collection experience for users and site owners.",
        "screenshots" => [
            ['01', 'Feedback boards screen'],
            ['02', 'Feedback roadmap screen'],
            ['03', 'Individual board page'],
            ['04', 'New suggestion page'],
            ['05', 'Individual post page'],
            ['06', 'User profile page'],
            ['07', 'Edit account page'],
            ['08', 'Users management page'],
            ['09', 'Application settings page'],
            ['10', 'Log in page'],
            ['11', 'Create account page']
        ],
    ],
    "lirwc" => [
        "name" => "LIRWC",
        "slug" => "lirwc",
        "url" => "https://lirwc.org",
        "github" => "",
        "protected" => false,
        "short_desc" => "Client site & registration system",
        "lang" => ['WordPress', 'PHP', 'MySQL', 'Sass', 'Google Analytics', 'Event Espresso', 'AR Member'],
        "description" => "This project consists of a client website, designed and developed for Learning in Retirement of Waukesha County. LIRWC reached out in regard to development of a new site, including a membership system that would allow new users to join LIRWC online and allow existing members to sign up for courses and events hosted by the organization.<br><br>The project includes a large amount of custom development and was built using WordPress, with a custom Bootstrap theme. In order move a majority of LIRWC's member and course information over to an online format, an integration between the Event Espresso and AR Member plugins were established to manage member accounts and allow LIRWC to list course offerings that members can register for with their account. A variety of custom shortcodes and page templates were developed and integrated for greater flexibility using WordPress development best practices.<br><br>Besides custom WordPress development, this project also consisted of importing LIRWC's current database of ~500 members and potential members into the new site, along with current year courses and events. Domain transfers, hosting and SSL certificate setup, and the creation of new email inboxes were also completed as part of this development project.",
        "screenshots" => [

        ],
    ],
];

// Define work experience
$experience = [
    "wd-intern" => [
        "title" => "Web Developer Intern",
        "workplace" => "Snap-on Incorporated",
        "location" => "Kenosha, Wisconsin",
        "img" => "assets/img/snap-on.png",
        "skills" => [
            "Accelerated the design, development, and deployment of 3 new internal applications",
            "Organized and participated in device enrollment and roll out of application pilot program to 40+ iPad devices",
            "Diagnosed slow and demanding SQL queries to improve application load times and performance",
            "Identified potential security threats and concerns in infrastructure",
            "Performed regular audits to ensure code is error-free and meets conventional standards",
            "Implemented new features and code modifications based on in-field user feedback",
            "Integrated multiple new API endpoints to retrieve customer data and insights"
        ],
        "start" => "May 2021",
        "end" => "present"
    ],
    "tech-ed-intern" => [
        "title" => "Tech Ed Intern",
        "workplace" => "Franklin High School",
        "location" => "Franklin, Wisconsin",
        "img" => "",
        "skills" => [
            "Coordinated assignments and tasks for 25+ peers",
            "Budgeted and planned total costs for specific projects",
            "Assessed student performance to determine requirements were met",
            "Addressed questions and concerns raised by peers",
            "Observed progress and overall growth"
        ],
        "start" => "2019",
        "end" => "2020"
    ],
    "store-cashier" => [
        "title" => "Store Cashier",
        "workplace" => "Franklin High School",
        "location" => "Franklin, Wisconsin",
        "img" => "",
        "skills" => [
            "Trained new student employees on the ShopKeep POS system",
            "Developed new marketing techniques to increase sales",
            "Organized stock inventory",
            "Obtained feedback from customers in order to improve experience",
            "Evaluated performance and sales with peers during monthly meetings"
        ],
        "start" => "2016",
        "end" => "2020"
    ],

];

// Require the loader
require_once "classes/Loader.php";
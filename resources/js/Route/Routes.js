// import About from "../Components/Navbar";
import About from "../Components/About";
import Contact from "../Components/Contact";
import Skills from "../Components/Skills";
import Experience from "../Components/Experience";

export const routes = [

    {
        path: "/",
        name: 'About',
        component: About,
    },
    {
        path: "/Contact",
        name: 'Contact',
        component: Contact,
    } ,
    {
        path: "/Skills",
        name: 'Skills',
        component: Skills,
    },
    {
        path: "/Experience",
        name: 'Experience',
        component: Experience,
    },

];

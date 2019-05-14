<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */

    public function index()
    {
        $skills = array
                        (
                            array
                            (
                                "title" => "Front-end Developer",
                                "icon" => "pencil-ruler",
                                "description" => "CSS3, HTML5, Symfony2, ReactJS, Laravel, Wordpress, Angular, Bootstrap, Jquery, SASS, LESS, MaterializeCSS, Responsiveness, UX, UI"
                            ),
                            array
                            (
                                "title" => "Back-end Developer",
                                "icon" => "code",
                                "description" => "PHP, Javascript, Java, MySQL, NoSQL, MonggoDB, SOLID Principle, NodeJS, ExpressJS, Software Design Patterns, Redux, RxJava, Retrofit, RESTful API, Dagger 2, Butterknife, SOLID Principle, Software Design Patterns"
                            ),
                            array
                            (
                                "title" => "Tools",
                                "icon" => "tools",
                                "description" => "Vscode, Git, Github, Gitlab, JIRA, Terminal, Adobe Photoshop & Illustrator, Filezilla, Android Studio, Eclipse Oxygen, SVN, XAMPP"
                            ),                            
                        );
        $projects = array
                        (
                            array
                            (
                                "title" => "Project 1",
                                "description" => "Sample description 1"
                            ),
                            array
                            (
                                "title" => "Project 2",
                                "description" => "Sample description 2"
                            ),
                            array
                            (
                                "title" => "Project 3",
                                "description" => "Sample description 3"
                            ),
                            array
                            (
                                "title" => "Project 4",
                                "description" => "Sample description 4"
                            ),
                            array
                            (
                                "title" => "Project 5",
                                "description" => "Sample description 5"
                            ),
                        );
        return $this->render
                        (
                            'base/index.html.twig',
                            ['skills' => $skills, 'projects' => $projects]
                        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                "id"=> 1,
                "name"=> "HTML",
                "description" => "HyperText Markup Language (HTML) is the set of markup symbols or codes inserted into a file intended for display on the Internet.",
            ],
            [
                "id"=> 2,
                "name"=> "CSS",
                "description"=> "CSS (Cascading Style Sheets) is used to style and layout web pages — for example, to alter the font, color, size, and spacing of your content, split it into multiple columns, or add animations and other decorative features.",
            ],
            [
                "id"=> 3,
                "name"=> "JavaScript",
                "description"=> "JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.",
            ],
            [
                "id"=> 4,
                "name" => "React.js",
                "description"=> "React. js is an open-source JavaScript library, crafted with precision by Facebook, that aims to simplify the intricate process of building interactive user interfaces.",
            ],
            [
                "id"=> 5,
                "name"=> "Vue.js",
                "description"=> "Vue is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.",
            ],
            [
                "id"=> 6,
                "name"=> "Angular.js",
                "description"=> "AngularJS is a structural framework for dynamic web apps. It lets you use HTML as your template language and lets you extend HTML's syntax to express your application's components clearly and succinctly.",
            ],
            [
                "id"=> 7,
                "name"=> "PHP",
                "description" => "PHP is a general-purpose scripting language and interpreter that is freely available and widely used for web development. The language is used primarily for server-side scripting, although it can also be used for command-line scripting and, to a limited degree, desktop applications."
            ],
            [
                "id"=> 8,
                "name"=> "Laravel",
                "description"=> "Laravel is an easy-to-use web framework that will help you create extensible PHP-based websites and web applications at scale.",
            ],
            [
                "id"=> 9,
                "name" => "WordPress",
                "description"=> "WordPress is a web content management system. It was originally created as a tool to publish blogs but has evolved to support publishing other web content, including more traditional websites, mailing lists and Internet forum, media galleries, membership sites, learning management systems and online stores.",
            ],
            [
                "id"=> 10,
                "name"=> "CakePHP",
                "description"=> "CakePHP is an open-source web framework. It follows the model–view–controller approach and is written in PHP, modeled after the concepts of Ruby on Rails, and distributed under the MIT License.",
            ],
            [
                "id"=> 11,
                "name"=> "FilamentPHP",
                "description" => "FilamentPHP is an open-source Laravel admin panel that provides a beautiful and modern user interface. It is easy to use and customize, and it comes with a variety of features to help you manage your Laravel applications.",
            ],
            [
                "id"=> 12,
                "name" => "Python",
                "description" => "Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured, object-oriented and functional programming.",
            ],
            [
                "id"=> 13,
                "name"=> "Flutter",
                "description" => "Flutter is an open-source UI software development kit created by Google. It is used to develop cross platform applications from a single codebase for any web browser, Fuchsia, Android, iOS, Linux, macOS, and Windows. First described in 2015, Flutter was released in May 2017.",
            ],
            [
                "id"=> 14,
                "name"=> "Next Js",
                "description" => "Next.js is an open-source web development framework created by the private company Vercel providing React-based web applications with server-side rendering and static website generation.",
            ]
        ];
        foreach($skills as $skill){
            Skill::create($skill);
        };
    }
}

<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "id"=> 1,
                "name"=> "Content Writer",
                "slug" => "content-writer",
                "description" => "Content writing is the process of creating and publishing written content for a variety of purposes, including marketing, education, and entertainment. Content writers must be able to research topics, write in a clear and concise style, and edit their work for grammar and spelling errors.",
            ],
            [
                "id"=> 2,
                "name"=> "Market Research",
                "slug"=> "market-research",
                "description"=> "Market researchers collect and analyse data and information to help their clients make informed political, social and economic decisions. As a market researcher, you'll specialise in collecting, analysing and presenting either quantitative or qualitative research.",
            ],
            [
                "id"=> 3,
                "name"=> "Marketing & Sale",
                "slug"=> "marketing-sale",
                "description"=> "The primary objective of sales is to game the prospects of the customers. Marketing contains a range of activities from selling to distributing.",
            ],
            [
                "id"=> 4,
                "name"=> "Customer Help",
                "slug"=> "customer-help",
                "description"=> "Customer service representatives work directly with customers to provide assistance, resolve complaints, answer questions, and process orders. If you enjoy helping people, a job as a customer service representative could be a good fit.",
            ],
            [
                "id"=> 5,
                "name"=> "Finance",
                "slug"=> "finance",
                "description"=> "Finance jobs differ and include roles as diverse as investment banker, actuary, portfolio manager, quantitative analyst, securities trader, and financial.",
            ],
            [
                "id"=> 6,
                "name"=> "Software",
                "slug"=> "software",
                "description"=> "Software developers design, program, build, deploy and maintain software using many different skills and tools. They also help build software systems that power networks and devices and ensure that those systems remain functional.",
            ],
            [
                "id"=> 7,
                "name" => "Human Resource",
                "slug"=> "human-resource",
                "description"=> "A human resources (HR) department performs human resource management functions, such as finding, hiring, training, and supporting new employees.",
            ],
            [
                "id"=> 8,
                "name"=> "Management",
                "slug"=> "",
                "description"=> "Management is how businesses organize and direct workflow, operations, and employees to meet company goals.",
            ],
            [
                "id"=> 9,
                "name"=> "Retail & Products",
                "slug"=> "retail-products",
                "description"=> "A retail job is a role that consists of selling products to customers. Retail jobs are available in a wide variety of different stores, offices",
            ],
            [
                "id"=> 10,
                "name"=> "Security Analyst",
                "slug"=> "security-analyst",
                "description"=> "Security analysts are experts who identify and fix problems within security systems by analyzing risks, vulnerabilities, threats and incidents. They perform a ton of security analyses to recommend solutions for preventing cyberattacks.",
            ]
        ];
        foreach($categories as $category) {
            JobCategory::create($category);
        }
    }
}

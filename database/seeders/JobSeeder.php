<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'id' => 1,
                'job_title' => 'Senior Laravel Developer (TALL Stack)',
                'slug' => 'senior-laravel-developer-tall-stack',
                'description' => '<p>Ullam omnis incidunt sunt nisi. Incidunt aut voluptatem nobis dicta. Aut minus ipsam impedit eos omnis. Et sit doloribus quis beatae quis provident sequi.</p><p>
                        Responsibilities
                    </p>
                    <div>
                        <p>
                            As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent.
                        </p>
                        <ul>
                            <li>
                                Have sound knowledge of commercial activities.
                            </li>
                            <li>
                                Build next-generation web applications with a focus on the client side
                            </li>
                            <li>
                                Work on multiple projects at once, and consistently meet draft deadlines
                            </li>
                            <li>
                                have already graduated or are currently in any year of study
                            </li>
                            <li>
                                Revise the work of previous designers to create a unified aesthetic for our brand materials
                            </li>
                        </ul>
                    </div>
                    <h5>
                        Qualification
                    </h5>
                    <div>
                        <ul>
                            <li>
                                B.C.A / M.C.A under National University course complete.
                            </li>
                            <li>
                                3 or more years of professional design experience
                            </li>
                            <li>
                                have already graduated or are currently in any year of study
                            </li>
                            <li>
                                Advanced degree or equivalent experience in graphic and web design
                            </li>
                        </ul>
                    </div>',
                'salary_from' => '500.00',
                'salary_to' => '8,200.00',
                'position' => '7',
                'job_expiry_date' => '2024-03-26',
                'no_preference' => 'created_at',
            ],
        ];
    }
}

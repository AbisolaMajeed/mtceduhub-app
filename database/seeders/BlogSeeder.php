<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::updateOrCreate(['title' => 'Digital marketing for newbies'], [
            'category'  => 'ESSENTIAL',
            'quote' => 'Knowledge is wisdom',
            'cite'  => 'Ebenezer Babalola',
            'content_1' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
            'content_2' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
            'content_3' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
            'content_4' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        ]);
        // Blog::updateOrCreate(['title' => 'Project Management professional'], [
        //     'category'  => 'ESSENTIAL',
        //     'quote' => 'Knowledge is wisdom',
        //     'cite'  => 'Ebenezer Babalola',
        //     'content_1' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        //     'content_2' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        //     'content_3' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        //     'content_4' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        // ]);
        // Blog::updateOrCreate(['title' => 'Software Development In a Nutshell'], [
        //     'category'  => 'ESSENTIAL',
        //     'quote' => 'Knowledge is wisdom',
        //     'cite'  => 'Ebenezer Babalola',
        //     'content_1' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        //     'content_2' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        //     'content_3' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        //     'content_4' => 'Lead generation is the act of identifying prospective customers with the objective of gaining new customers. Traditionally, lead generation was accomplished through direct mail, event sponsorships, or cold calling. With the advent of the Internet, other tools such as search engine optimization, pay-per-click, social media, blogs, and content marketing have changed the way leads are generated today. Hence, Digital Marketing plays a crucial role in lead generation today.',
        // ]);
    }
}
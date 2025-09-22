<?php

namespace App\Livewire\Bacancypage;

use App\Facades\LandingPagePatch;
use Livewire\Component;

class Faq extends Component
{
    public $successMessage,$errorMessage,$lp_data=[],$title,$subtitle,$btntitle,$faqs=[];

    public function addfaq()
    {
        $this->faqs[] = [
            'question' => '',
            'answer' => '',
        ];
    }

    public function removefaq($index)
    {
        unset($this->faqs[$index]);
        $this->faqs = array_values($this->faqs); // reindex
    }

    public function mount($lp_data)
    {
        $this->lp_data = isset($lp_data) ? $lp_data : [];
        $faq = isset($this->lp_data['page_contect']) ? json_decode($this->lp_data['page_contect'],true) : [];
        $this->title = $faq['faq']['title'] ?? 'Frequently Asked Questions';
        $this->subtitle = $faq['faq']['subtitle'] ?? 'Still have question ?';
        $this->btntitle = $faq['faq']['btntitle'] ?? 'Let’s Talk';
        $this->faqs = [
                    [
                       'question' => "How quickly can I hire a qualified developer for my project?",
                        'answer' => "At Optimal Virtual Employee, we understand that time is of the essence. You can expect to have access to pre-vetted developers within 24-48 hours, ready to jump into your project. Whether it’s software, web, AI, or mobile development, we make it quick and seamless to connect you with the best talent without the usual delays."
                    ],
                    [
                        'question' => "What’s the cost of hiring a developer through your service?",
                        'answer' => "We offer transparent pricing with no hidden fees. For just $699/month, you get access to a highly skilled developer, including everything from payroll and management to tools and resources. That’s it—no surprises, no extra costs. This makes scaling your tech team both affordable and predictable."
                    ],
                    [
                        'question' => "How can I be sure the developers I hire are skilled?",
                        'answer' => "We use AI-powered vetting processes to ensure that every developer we provide is top-tier. Before you meet them, you’ll receive a comprehensive report on their skills, certifications, and past work. You’ll have full visibility into their capabilities, so you can be confident they’re the right fit for your project."
                    ],
                    [
                        'question' => "What makes your developers better than other options?",
                        'answer' => "Our developers don’t just meet the technical requirements—they’re also skilled communicators who integrate seamlessly into your team. We focus on quality, ensuring that our developers have proven experience in their respective fields, whether it’s building scalable software, developing mobile apps, or deploying AI solutions. You’ll get the best talent, without the hassle of sifting through resumes."
                    ],
                    [
                        'question' => "What if I need a developer for a short-term project?",
                        'answer' => "No problem! Whether you’re working on a short-term, high-priority project or need an expert to handle specific tasks, our developers are flexible. We offer both full-time and part-time options, ensuring that you only pay for the time and expertise you need."
                    ],
                    [
                        'question' => "Can I scale my team quickly if needed?",
                        'answer' => "Absolutely! With our transparent pricing model and pre-vetted talent pool, scaling your team is quick and easy. Whether you need one developer or an entire team, we’ll help you scale up or down based on your project’s needs. You don’t have to worry about lengthy hiring processes or back-and-forth with recruiters."
                    ],
                    [
                        'question' => "What types of developers can I hire through your service?",
                        'answer' => "We offer developers across a wide range of technologies—whether it’s custom software development, web development, AI/ML, or mobile apps (React Native, Android, iOS). We’ve got experts who are proficient in all modern tech stacks, ensuring you get the right fit for your project every time."
                    ],
                    [
                        'question' => "How do I ensure smooth collaboration with remote developers?",
                        'answer' => "Our developers are experts in working remotely and are well-versed in collaborative tools like Slack, Trello, and Zoom. We help you set clear expectations and communication channels from the start to ensure smooth collaboration. You’ll also have a dedicated account manager to oversee progress and keep everything on track."
                    ],
                    [
                        'question' => "Can I try a developer before committing long-term?",
                        'answer' => "Yes! We offer trial periods so you can assess a developer's fit for your project before making a long-term commitment. This way, you can ensure they’re the right match for your team and your goals—without any risk."
                    ],
                    [
                        'question' => "How do you handle developer management and payroll?",
                        'answer' => "We take care of everything, so you don’t have to. From payroll to project management, we handle all the administrative tasks, letting you focus on what matters most—growing your business. You’ll only need to deal with us, while we manage the developers and ensure they’re meeting your expectations."
                    ],
                    [
                        'question' => "What’s the benefit of hiring remote developers?",
                        'answer' => "Hiring remote developers gives you access to a global talent pool, allowing you to hire the best talent at competitive rates. With our remote team, you can hire developers who align with your needs, whether it's a specific tech stack or specialized expertise, and they’ll be fully integrated into your operations."
                    ],
                    [
                        'question' => "What makes your hiring process faster and more efficient?",
                        'answer' => "Our AI-powered platform pre-screens candidates, ensuring that you only meet developers who are a perfect fit for your requirements. Instead of spending weeks sorting through resumes, you get instant access to qualified candidates ready to work on your project."
                    ],
                    [
                        'question' => "Can I hire developers for a variety of roles (e.g., back-end, front-end, AI)?",
                        'answer' => "Yes, you can! Whether you need full-stack developers, React Native experts, or AI specialists, we’ve got you covered. Our developers have expertise in all areas of tech, ensuring you can hire for any role, any time, depending on your project’s needs."
                    ],
                    [
                        'question' => "How do you ensure the quality of work from remote developers?",
                        'answer' => "We hold our developers to the highest standards. Through our comprehensive onboarding process and continuous feedback loops, we ensure the quality of work remains top-notch. Additionally, you’ll have regular check-ins with a project manager to track progress and ensure the developer is meeting your expectations."
                    ],
                    [
                        'question' => "Why should I choose Optimal Virtual Employee over other staffing agencies?",
                        'answer' => "At Optimal Virtual Employee, we provide full transparency in pricing, salary disclosures, and no hidden fees. Our developers are pre-vetted, certified, and ready to integrate seamlessly with your team. You get top-tier talent at competitive rates, with none of the hassle or uncertainty that typically comes with hiring offshore."
                    ]
                ];
    }

    //  $faq['faq']['faqs'] ?? 

    public function save()
    {
        try {
            $this->validate([
                'title'=>'required',
                'subtitle'=>'required',
                'btntitle'=>'required',
                'faqs.*.question'=>'required',
                'faqs.*.answer'=>'required',
            ]);
            
            $content = isset($this->lp_data['page_contect']) ? json_decode($this->lp_data['page_contect'],true) : [];
            //code...
            $content['faq'] = [
                'title'=>$this->title,
                'subtitle'=>$this->subtitle,
                'btntitle'=>$this->btntitle,
                'faqs'=>$this->faqs,
            ];
            
            LandingPagePatch::update($this->lp_data,$content);
            
            $this->successMessage = 'Section updated Successfully!';
        } catch (\Throwable $th) {
            //throw $th;
            $this->errorMessage = $th->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.bacancypage.faq');
    }
}

@extends('homepage.home')

@section('content')
<div class="bg-gray-50/50 min-h-screen py-16">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">About HireMe.AI</h1>
            <p class="mt-4 text-lg text-gray-600">Revolutionizing the way talent meets opportunity.</p>
        </div>

        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100">
            <div class="prose prose-blue max-w-none text-gray-700 leading-relaxed">
                <p class="mb-6">
                    At <strong>HireMe.AI</strong>, we believe that the traditional recruitment process is broken. Resumes only tell half the story, and brilliant candidates often get filtered out by rigid systems before they even get a chance to interview.
                </p>
                <p class="mb-6">
                    Our mission is to create a seamless, intelligent platform that evaluates what truly matters: your skills, your personality, and your potential to grow. By leveraging advanced Artificial Intelligence, we remove the bias and guesswork from hiring.
                </p>
                <h3 class="text-xl font-bold text-gray-900 mt-8 mb-4">What Sets Us Apart</h3>
                <ul class="list-disc pl-5 space-y-2 mb-6">
                    <li><strong>AI-Driven Matching:</strong> We pair your unique skill set with roles where you'll thrive.</li>
                    <li><strong>Smart Interview Prep:</strong> Practice with our AI recruiter to gain confidence and receive instant feedback.</li>
                    <li><strong>Personality Insights:</strong> Find work environments and cultures that align with your core values.</li>
                </ul>
                <p>
                    Whether you're a recent graduate looking for your first break, a seasoned professional seeking a career pivot, or a company looking to build a high-performing team, HireMe.AI is built for you.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('images/pic1.jpg')}}" alt="" class="img-thumbnail" width="250px" height="150px">
            </div>
            <div class="mt-5 text-white mx=5 text-justify">
                <h1 class="fw-bold st-font  text-danger">Hello,</h1>
                <div class="px-4">
                    <p style="text-indent: 100px;">I am <b class="text-warning"> Samir Karki</b> having 2 years of full-stack web development experience for global business, I offer the technical expertise you are seeking for your web developer position.</p>
                    <p>I am a web developer from Tribhuwan University studying BSc.CSIT. I am eager to apply my knowledge and continue to build my skills in the software development space. I have experience working with a variety of programming languages, including PHP, JavaScript, jQuery, Ajax, Laravel, Bagisto and so on. My experience also includes a strong understanding of object-oriented programming, good communication skills, seeking various ways to solve a problem. I am eager to add more experience and add more skills under my belt.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{route('contact')}}" class="btn btn-outline-info">Contact</a>
            </div>
        </div>
    </x-slot>
</x-layout>
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
                <p>Since earning in bachelor's degree in internet and web development from XYZ University, I have served as a web developer at <b class="text-warning"> NIPUNA PRABHIDHIK SEWA </b>, one of the biggest premier digital marketing and web development firm. In this position, I have led web development projects for clients in diverse industries including technology, manufacturing, pharmaceutical, hospitality, retail and financial services.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestias nobis recusandae sit. Ducimus veniam quam animi deleniti quia ad, quas quisquam saepe! Repellat sed consectetur molestiae delectus enim earum.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
            <a href="{{route('contact')}}" class="btn btn-outline-info">Contact</a>
        </div>
    </div>
    </x-slot>
</x-layout>
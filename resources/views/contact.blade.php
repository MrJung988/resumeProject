<x-layout>
    <x-slot name="title">Contact</x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    Do you have any questions? Please do not hesitate to contact. I'll come back to you within a matter of hours to help you.
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName">Your Name</label>
                                <input type="text" class="form-control mt-2" id="inputName" />
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail">Your Email *</label>
                                <input type="text" class="form-control mt-2" id="inputEmail" required />
                            </div>

                            <div class="col-md-12">
                                <label for="inputSubject">Your Subject</label>
                                <input type="text" class="form-control mt-2" id="inputSubject" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputTextarea">Your Message *</label>
                                <textarea class="form-control mt-2" id="inputTextarea" required></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                            <p>Pokhara-Kaski, Nepal</p>
                        </li>
                        <li>
                            <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                            <p>+977 9846812345</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                            <p>samir.karki@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <a href="#" target="_blank"><i class="fab fa-twitter i-color"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100054489180956" target="_blank"><i class="fab fa-facebook-f i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram i-color"></i></a>
            <a href="https://github.com/MrJung988" target="_blank"><i class="fa-brands fa-github i-color"></i></a>
            <a href="https://www.linkedin.com/in/samir-karki-29450b235/" target="_blank"><i class="fa-brands fa-linkedin i-color"></i></a>
        </div>
    </x-slot>
</x-layout>
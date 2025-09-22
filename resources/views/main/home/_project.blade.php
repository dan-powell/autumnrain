<section class="HomeProject">
    <div class="HomeProject-project">
        @include('main.project._single', ['item' => $project])
    </div>
    <div class="HomeProject-character">
        <img class="HomeProject-character-img" src="{{ asset('/img/dan_powell_pointing.svg') }}" alt="A Cartoon style profile picture">
    </div>
    <div class="HomeProject-speech">
        <div class="HomeProject-speech-inner">
            <p class="HomeProject-speech-bubble">Hey look, I made a thing!</p>
        </div>
    </div>
</section>

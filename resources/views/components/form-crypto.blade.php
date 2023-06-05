<div class="accordion accordion-flush dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg"
    id="accordionFlushExample">
    <div class="accordion-item dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                BTC WALLET
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p class="my-2">
                    <span class="my-2">WALLET ADRESS</span><br>
                    <span class="my-2">{{ Auth::user()->btc_code }}</span>
                </p>
                <p class="my-2 d-flex justify-content-center">
                    <img style="width: 80%;" class="my-2" src="{{ Auth::user()->btc_html }}" alt="">
                </p>
            </div>
        </div>
    </div>
    <div class="accordion-item dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                LTC WALLET
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p class="my-2">
                    <span class="my-2">WALLET ADRESS</span><br>
                    <span class="my-2">{{ Auth::user()->ltc_code }}</span>
                </p>
                <p class="my-2 d-flex justify-content-center">
                    <img style="width: 80%;" class="my-2" src="{{ Auth::user()->ltc_html }}" alt="">
                </p>
            </div>
        </div>
    </div>

</div>

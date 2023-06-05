<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Credit Card') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="col-lg-5 mx-auto sm:px-6 lg:px-8 py-5">
            <x-message-terminated />
            <x-message-danger />
            <div class="dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-5">
                <x-form-creditcard />
            </div>
            <div class="dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-5 mt-5">
                <div class="card-header pb-5">
                    <h1 class="text-white">Paypal Payment Summary</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($card as $item)
                                <tr>
                                    <td>$ {{ $item->amount }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {

        //For Card Number formatted input
        var cardNum = document.getElementById('cv_no');
        cardNum.onkeyup = function(e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                parts.push(sanitizedValue.substring(i, i + 4));
            }

            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 4);

            this.value = this.lastValue = parts.join('-');
            this.selectionStart = this.selectionEnd = caretPosition;
        }

        //For Date formatted input
        var expDate = document.getElementById('exp');
        expDate.onkeyup = function(e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
                parts.push(sanitizedValue.substring(i, i + 2));
            }

            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 2);

            this.value = this.lastValue = parts.join('/');
            this.selectionStart = this.selectionEnd = caretPosition;
        }

        // Radio button
        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

    })

    $(document).ready(function() {

        //For Card Number formatted input
        var cardNum = document.getElementById('am_no');
        cardNum.onkeyup = function(e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                parts.push(sanitizedValue.substring(i, i + 4));
            }

            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 4);

            this.value = this.lastValue = parts.join('-');
            this.selectionStart = this.selectionEnd = caretPosition;
        }

    })

    $(document).ready(function() {

        //For Card Number formatted input
        var cardNum = document.getElementById('cr_no');
        cardNum.onkeyup = function(e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                parts.push(sanitizedValue.substring(i, i + 4));
            }

            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 4);

            this.value = this.lastValue = parts.join('-');
            this.selectionStart = this.selectionEnd = caretPosition;
        }

    })
</script>

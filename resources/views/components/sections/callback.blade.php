<section {{ $attributes->merge(['class' => 'callback-section section']) }}>
    <div class="container">
        <div class="callback-wrap">
            <div class="callback__left">
                <h2 class="h2">
                    {{ $block->h1_title }}
                </h2>

                <p class="callback-text">
                    {!! $block->description !!}
                </p>
            </div>
            <div class="callback__right">
                <form class="callback-form" id="callbackForm" action="{{ route('request_modal_section') }}">
                    @csrf
                    <input type="text" class="input" name="title" placeholder="Имя">
                    <input type="text" class="input" name="phone" placeholder="+7 (___) ___ - __ - __">
                    <button class="callback-form-submit uppercase btn --accent" type="submit">Отправить</button>

                    <p class="form-policy">
                        Нажимая кнопку “Записаться”, вы соглашаетесь с нашей <a
                            href="/politika-konfidencialnosti">политикой
                            конфиденциальности</a>
                    </p>

                    <div id="callback_error_section" style="color: red;"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="partical-l partical"></div>
    <div class="partical-r partical"></div>
</section>
<script>
    document.getElementById('callbackForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const errorList = document.createElement('ul');
        errorList.classList.add('errors-list');
        document.getElementById('callback_error_section').appendChild(errorList);

        let formData = new FormData(this);

        fetch(this.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => {
                return response.json();
            })
            .then(data => {
                document.querySelector('#callback_error_section ul').innerText = '';
                console.log(document.querySelector('#callback_error_section'));

                if (data.status === 'item-sent') {
                    document.querySelector('#callback_error_section ul').innerText = '';

                    // handle success
                    MicroModal.close('modal-callback');
                    MicroModal.show('modal-thanks');
                    this.reset();

                } else {
                    if (data.message) {
                        document.querySelector('#callback_error_section').innerText = '';
                        const errorList = document.createElement('ul');
                        errorList.classList.add('errors-list');
                        document.getElementById('callback_error_section').appendChild(errorList);


                        Object.keys(data.message).forEach((key) => {
                            data.message[key].forEach((error) => {
                                const errorItem = document.createElement('li');
                                errorItem.innerText = error;
                                errorList.appendChild(errorItem);
                            });
                        });
                    } else {

                    }

                }
            })
            .catch(error => {

                document.getElementById('callback_error_section').innerText =
                    'Произошла ошибка повторите попытку позже!';
            });
    });
</script>

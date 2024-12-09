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
                <div id="callback_error_section" style="color: red;"></div>
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

        let formData = new FormData(this);

        fetch(this.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'item-sent') {
                    // handle success
                    MicroModal.close('modal-callback');
                    MicroModal.show('modal-thanks');
                    this.reset();
                } else {
                    // handle errors
                    const errorList = document.createElement('ul');
                    errorList.classList.add('errors-list');

                    if (data.message) {
                        Object.keys(data.message).forEach((key) => {
                            data.message[key].forEach((error) => {
                                const errorItem = document.createElement('li');
                                errorItem.innerText = error;
                                errorList.appendChild(errorItem);
                            });
                        });
                    }

                    document.getElementById('callback_error_section').appendChild(errorList);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('callback_error_section').innerText =
                    'Произошла ошибка повторите попытку позже!';
            });
    });
</script>

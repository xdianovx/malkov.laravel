<div class="modal micromodal-slide" id="modal-callback" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <h2 class="modal__title" id="modal-1-title">
                    Оставить заявку
                </h2>


                <button class="modal__close" aria-label="Close modal" data-micromodal-close>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#1B1B1B" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </header>
            <div id="callback_error" style="color: red;"></div>

            <form action="{{ route('request_modal_section') }}" class="modal-form" method="post" id="modalForm">
                @csrf
                <input type="text" class="input" name="title" placeholder="Имя">
                <input type="text" class="input" name="phone" placeholder="+7 (___) ___ - __ - __">
                <button class="callback-form-submit  btn --accent" type="submit">Оставить заявку</button>

                <p class="form-policy">
                    Нажимая кнопку “Оставить заявку”, вы соглашаетесь с нашей <a href="/politika-konfidencialnosti">политикой
                        конфиденциальности</a>
                </p>
            </form>


        </div>
    </div>
</div>
<script>
    document.getElementById('modalForm').addEventListener('submit', function(event) {
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

                document.getElementById('callback_error').appendChild(errorList);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('callback_error').innerText = 'Произошла ошибка повторите попытку позже!';
        });
    });
</script>

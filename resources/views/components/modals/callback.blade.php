<div class="modal micromodal-slide" id="modal-callback" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">

                <h2 class="modal__title" id="modal-1-title">
                    Оставить заявку
                </h2>


                <button class="modal__close" aria-label="Close modal" data-micromodal-close>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#1B1B1B" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </header>



            <form action="{{ route('request_modal_section') }}" class="modal-form" method="post" id="modalForm">
                @csrf
                <input type="text" class="input" name="title" placeholder="Имя">
                <input type="text" class="input" name="phone" placeholder="+7 (___) ___ - __ - __">
                <button class="callback-form-submit  btn --accent" type="submit">Оставить заявку</button>

                <p class="leading-[130%]">
                    Нажимая кнопку “Оставить заявку”, вы соглашаетесь с нашей <a target="_blank"
                        href="/politika-konfidencialnosti" class="text-gold">политикой
                        конфиденциальности</a>
                </p>


            </form>

            <div id="callback_error" class="text-[14px]  mt-2 font-normal leading-[130%]" style="color: red;"></div>


        </div>
    </div>
</div>

<script>
    document.getElementById('modalForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const errorList = document.createElement('ul');
        errorList.classList.add('errors-list');
        document.getElementById('callback_error').appendChild(errorList);

        let formData = new FormData(this);

        fetch(this.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => {
                return response.json();
            })
            .then(data => {
                document.querySelector('#callback_error ul').innerText = '';
                console.log(document.querySelector('#callback_error'));

                if (data.status === 'item-sent') {
                    document.querySelector('#callback_error ul').innerText = '';

                    // handle success
                    MicroModal.close('modal-callback');
                    MicroModal.show('modal-thanks');
                    this.reset();

                } else {
                    if (data.message) {
                        document.querySelector('#callback_error').innerText = '';
                        const errorList = document.createElement('ul');
                        errorList.classList.add('errors-list');
                        document.getElementById('callback_error').appendChild(errorList);


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

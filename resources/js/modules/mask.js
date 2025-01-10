import IMask from 'imask'

export const mask = () => {
    const maskOptions = {
        mask: '+{7} (000) 000 00 00',
        lazy: false
    }
    const phoneInput = document.querySelectorAll('input[type="tel"]')

    phoneInput.forEach(item => {
        const mask = new IMask(item, maskOptions)
    })
}
